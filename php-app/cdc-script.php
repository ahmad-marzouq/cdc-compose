<?php

require 'vendor/autoload.php';

use Elasticsearch\ClientBuilder;

$hosts = [
    'http://elasticsearch:9200'
];

$client = ClientBuilder::create()->setHosts($hosts)->build();

$conf = new RdKafka\Conf();
//$conf->set('log_level', (string) LOG_DEBUG);
//$conf->set('debug', 'all');
$conf->set('bootstrap.servers', 'kafka:9092');
$rk = new RdKafka\Consumer($conf);
$rk->addBrokers("kafka:9092");
$topic = $rk->newTopic("maxwell");

// The first argument is the partition to consume from.
// The second argument is the offset at which to start consumption. Valid values
// are: RD_KAFKA_OFFSET_BEGINNING, RD_KAFKA_OFFSET_END, RD_KAFKA_OFFSET_STORED.
$topic->consumeStart(0, RD_KAFKA_OFFSET_BEGINNING);

echo 'Started CDC'.PHP_EOL;
while (true) {
    print_r(time());
    $message = $topic->consume(0, 120 * 1000);

    var_dump('MESSAGE',$message);

    $messageStatus = $message->err ?? null;
    if (isset($messageStatus)) {
        switch ($message->err) {
            case RD_KAFKA_RESP_ERR_NO_ERROR:
                $payload = json_decode($message->payload, true);
                $table = $payload['table'];
                $data = $payload['data'];
                $type = $payload['type'];

                // Process the change event based on the table and data
                if ($table === 'products') {
                    handleTableXChangeEvent($type, $data);
                }

                break;
            case RD_KAFKA_RESP_ERR__PARTITION_EOF:
                echo "No more messages; will wait for more\n";
                break;
            case RD_KAFKA_RESP_ERR__TIMED_OUT:
                echo "Timed out\n";
                break;
            default:
                echo "Kafka error: " . $message->errstr() . "\n";
                break;
        }
    }

}

function handleTableXChangeEvent($type, $data)
{

    $id = $data['id'];

    // Index, update, or delete the document in Elasticsearch based on the change event
    if ($type === 'insert') {
        indexToElasticsearch($id, $data);
    } elseif ($type === 'update') {
        updateElasticsearch($id, $data);
    } elseif ($type === 'delete') {
        deleteFromElasticsearch($id);
    }
}

function indexToElasticsearch($id, $data)
{
    global $client;

    $params = [
        'index' => 'products',
        'id' => $id,
        'body' => $data
    ];

    $response = $client->index($params);
    print_r($response);
}

function updateElasticsearch($id, $data)
{
    global $client;

    $params = [
        'index' => 'products',
        'id' => $id,
        'body' => ['doc' => $data]
    ];

    try {
        $response = $client->update($params);
        var_dump('UPDATE',$response);

    } catch (\Elasticsearch\Common\Exceptions\BadRequest400Exception $e) {
        var_dump('ERROR',$e->getMessage());
    } catch (Elasticsearch\Common\Exceptions\Missing404Exception $e) {
        $response = $client->index($params);
        var_dump('ERROR',$response);
    } catch (\Exception $exception) {
        var_dump('ERROR',$exception);
    }
}

function deleteFromElasticsearch($id)
{
    global $client;

    $params = [
        'index' => 'products',
        'id' => $id
    ];

    $response = $client->delete($params);
    var_dump($response);
}
