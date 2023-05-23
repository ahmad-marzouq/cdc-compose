#!/bin/bash


# Wait for Elasticsearch to start
sleep 30

# Create the products index
curl -XPUT "http://elasticsearch:9200/products" -H 'Content-Type: application/json' -d'
{
  "mappings": {
    "properties": {
      "id": {
        "type": "integer"
      },
      "productCode": {
        "type": "text"
      },
      "productName": {
        "type": "text"
      },
      "productLine": {
        "type": "text"
      },
      "productScale": {
        "type": "text"
      },
      "productVendor": {
        "type": "text"
      },
      "productDescription": {
        "type": "text"
      },
      "quantityInStock": {
        "type": "integer"
      },
      "buyPrice": {
        "type": "float"
      },
      "MSRP": {
        "type": "float"
      },
      "record_insert_date": {
        "type": "text"
      },
      "record_update_date": {
        "type": "text"
      }
    }
  }
}
'

# Import data from MySQL table to Elasticsearch index
curl -XPOST "http://elasticsearch:9200/_bulk" -H 'Content-Type: application/json' --data-binary @/data/products.json
