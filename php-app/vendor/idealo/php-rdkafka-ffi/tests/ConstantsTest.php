<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class ConstantsTest extends TestCase
{
    public function testConstantsExist(): void
    {
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR__BEGIN'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR__BAD_MSG'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR__BAD_COMPRESSION'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR__DESTROY'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR__FAIL'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR__TRANSPORT'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR__CRIT_SYS_RESOURCE'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR__RESOLVE'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR__MSG_TIMED_OUT'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR__PARTITION_EOF'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR__UNKNOWN_PARTITION'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR__FS'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR__UNKNOWN_TOPIC'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR__ALL_BROKERS_DOWN'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR__INVALID_ARG'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR__TIMED_OUT'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR__QUEUE_FULL'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR__ISR_INSUFF'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR__NODE_UPDATE'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR__SSL'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR__WAIT_COORD'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR__UNKNOWN_GROUP'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR__IN_PROGRESS'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR__PREV_IN_PROGRESS'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR__EXISTING_SUBSCRIPTION'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR__ASSIGN_PARTITIONS'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR__REVOKE_PARTITIONS'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR__CONFLICT'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR__STATE'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR__UNKNOWN_PROTOCOL'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR__NOT_IMPLEMENTED'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR__AUTHENTICATION'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR__NO_OFFSET'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR__OUTDATED'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR__TIMED_OUT_QUEUE'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR__UNSUPPORTED_FEATURE'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR__WAIT_CACHE'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR__INTR'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR__KEY_SERIALIZATION'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR__VALUE_SERIALIZATION'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR__KEY_DESERIALIZATION'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR__VALUE_DESERIALIZATION'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR__PARTIAL'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR__END'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_UNKNOWN'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_NO_ERROR'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_OFFSET_OUT_OF_RANGE'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_INVALID_MSG'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_UNKNOWN_TOPIC_OR_PART'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_INVALID_MSG_SIZE'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_LEADER_NOT_AVAILABLE'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_NOT_LEADER_FOR_PARTITION'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_REQUEST_TIMED_OUT'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_BROKER_NOT_AVAILABLE'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_REPLICA_NOT_AVAILABLE'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_MSG_SIZE_TOO_LARGE'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_STALE_CTRL_EPOCH'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_OFFSET_METADATA_TOO_LARGE'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_NETWORK_EXCEPTION'));
//        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_GROUP_LOAD_IN_PROGRESS')); // missing in ext
//        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_GROUP_COORDINATOR_NOT_AVAILABLE')); // missing in ext
//        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_NOT_COORDINATOR_FOR_GROUP')); // missing in ext
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_TOPIC_EXCEPTION'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_RECORD_LIST_TOO_LARGE'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_NOT_ENOUGH_REPLICAS'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_NOT_ENOUGH_REPLICAS_AFTER_APPEND'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_INVALID_REQUIRED_ACKS'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_ILLEGAL_GENERATION'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_INCONSISTENT_GROUP_PROTOCOL'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_INVALID_GROUP_ID'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_UNKNOWN_MEMBER_ID'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_INVALID_SESSION_TIMEOUT'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_REBALANCE_IN_PROGRESS'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_INVALID_COMMIT_OFFSET_SIZE'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_TOPIC_AUTHORIZATION_FAILED'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_GROUP_AUTHORIZATION_FAILED'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_CLUSTER_AUTHORIZATION_FAILED'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_INVALID_TIMESTAMP'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_UNSUPPORTED_SASL_MECHANISM'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_ILLEGAL_SASL_STATE'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_UNSUPPORTED_VERSION'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_TOPIC_ALREADY_EXISTS'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_INVALID_PARTITIONS'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_INVALID_REPLICATION_FACTOR'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_INVALID_REPLICA_ASSIGNMENT'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_INVALID_CONFIG'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_NOT_CONTROLLER'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_INVALID_REQUEST'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_UNSUPPORTED_FOR_MESSAGE_FORMAT'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_POLICY_VIOLATION'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_OUT_OF_ORDER_SEQUENCE_NUMBER'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_DUPLICATE_SEQUENCE_NUMBER'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_INVALID_PRODUCER_EPOCH'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_INVALID_TXN_STATE'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_INVALID_PRODUCER_ID_MAPPING'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_INVALID_TRANSACTION_TIMEOUT'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_CONCURRENT_TRANSACTIONS'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_TRANSACTION_COORDINATOR_FENCED'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_TRANSACTIONAL_ID_AUTHORIZATION_FAILED'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_SECURITY_DISABLED'));
        $this->assertTrue(defined('RD_KAFKA_RESP_ERR_OPERATION_NOT_ATTEMPTED'));
        $this->assertTrue(defined('RD_KAFKA_CONSUMER'));
        $this->assertTrue(defined('RD_KAFKA_OFFSET_BEGINNING'));
        $this->assertTrue(defined('RD_KAFKA_OFFSET_END'));
        $this->assertTrue(defined('RD_KAFKA_OFFSET_STORED'));
        $this->assertTrue(defined('RD_KAFKA_PARTITION_UA'));
        $this->assertTrue(defined('RD_KAFKA_PRODUCER'));
        $this->assertTrue(defined('RD_KAFKA_CONF_UNKNOWN'));
        $this->assertTrue(defined('RD_KAFKA_CONF_INVALID'));
        $this->assertTrue(defined('RD_KAFKA_CONF_OK'));
        $this->assertTrue(defined('RD_KAFKA_MSG_PARTITIONER_RANDOM'));
        $this->assertTrue(defined('RD_KAFKA_MSG_PARTITIONER_CONSISTENT'));
        $this->assertTrue(defined('RD_KAFKA_LOG_PRINT'));
        $this->assertTrue(defined('RD_KAFKA_LOG_SYSLOG'));
        $this->assertTrue(defined('RD_KAFKA_LOG_SYSLOG_PRINT'));
    }
}
