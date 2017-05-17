<?php

require  __DIR__ . "/vendor/autoload.php";

include_once "../ExampleUtils.php";

// This script relies on environment variables being set for authentication

// SJ_PROJECT = <Project>
// SJ_COLLECTION = <Collection>
// SJ_KEY_ID = <Key from https://www.sajari.com/console/collections/credentials>
// SJ_KEY_SECRET = <Secret from https://www.sajari.com/console/collections/credentials>

$client = new \Sajari\Client(getenv("SJ_PROJECT"), getenv("SJ_COLLECTION"), [
    new \Sajari\WithKeyCredentials(getenv("SJ_KEY_ID"), getenv("SJ_KEY_SECRET"))
]);

$pipeline = $client->pipeline("raw");

$params = [
    "q" => "alex the cat",
    "resultsPerPage" => "10"
];

try  {
    $response = $pipeline->search($params);
} catch (\Exception $e) {
    printf("a%s\n", $e);
    exit();
}

ExampleUtils::PrintSearchResults($response);