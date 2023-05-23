CDC Example
========================

## Overview

This library was created as proof of concept for using cdc in real time 
## How to use
### Startup the docker compose
```bash
docker-compose up --build --always-recreate-deps --force-recreate -V
```
###  Examples 

```bash
 mysql --port=3336 --host=127.0.0.1 -u root -pmysql test_db -e 'UPDATE `test_db`.`products` SET `productName` = '\''1952 Alpine Renault 13001'\'' WHERE (`id` = '\''2'\'');'
 curl -X GET 'http://localhost:9200/products/_search?pretty=true&q=_id:2'
```