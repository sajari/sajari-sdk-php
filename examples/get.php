<?php

require  __DIR__ . '/vendor/autoload.php';

$client = new \Sajari\Client(getenv("SJ_PROJECT"), getenv("SJ_COLLECTION"), [
    new \Sajari\WithKeyCredentials(getenv("SJ_KEY_ID"), getenv("SJ_KEY_SECRET"))
]);

$record = $client->get($client->key("_id", "<record-id>"));
print_r($record);

