# Sajari\RecordsApi

All URIs are relative to https://api-gateway.sajari.com.

| Method                                                       | HTTP request                                                 | Description          |
| ------------------------------------------------------------ | ------------------------------------------------------------ | -------------------- |
| [**batchUpsertRecords()**](RecordsApi.md#batchUpsertRecords) | **POST** /v4/collections/{collection_id}/records:batchUpsert | Batch upsert records |
| [**deleteRecord()**](RecordsApi.md#deleteRecord)             | **POST** /v4/collections/{collection_id}/records:delete      | Delete record        |
| [**getRecord()**](RecordsApi.md#getRecord)                   | **POST** /v4/collections/{collection_id}/records:get         | Get record           |
| [**upsertRecord()**](RecordsApi.md#upsertRecord)             | **POST** /v4/collections/{collection_id}/records:upsert      | Upsert record        |

## `batchUpsertRecords()`

```php
batchUpsertRecords($collection_id, $batch_upsert_records_request): \Sajari\Model\BatchUpsertRecordsResponse
```

Batch upsert records

The batch version of the [UpsertRecord](/api#operation/UpsertRecord) call.

### Example

```php
<?php
require_once __DIR__ . "/vendor/autoload.php";

// Configure HTTP basic authorization: BasicAuth
$config = Sajari\Configuration::getDefaultConfiguration()
  ->setUsername("YOUR_USERNAME")
  ->setPassword("YOUR_PASSWORD");

$apiInstance = new Sajari\Api\RecordsApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client(),
  $config
);
$collection_id = "collection_id_example"; // string | The collection to upsert the records in, e.g. `my-collection`.
$batch_upsert_records_request = new \Sajari\Model\BatchUpsertRecordsRequest(); // \Sajari\Model\BatchUpsertRecordsRequest

try {
  $result = $apiInstance->batchUpsertRecords(
    $collection_id,
    $batch_upsert_records_request
  );
  print_r($result);
} catch (Exception $e) {
  echo "Exception when calling RecordsApi->batchUpsertRecords: ",
    $e->getMessage(),
    PHP_EOL;
}
```

### Parameters

| Name                             | Type                                                                                 | Description                                                              | Notes |
| -------------------------------- | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ----- |
| **collection_id**                | **string**                                                                           | The collection to upsert the records in, e.g. &#x60;my-collection&#x60;. |
| **batch_upsert_records_request** | [**\Sajari\Model\BatchUpsertRecordsRequest**](../Model/BatchUpsertRecordsRequest.md) |                                                                          |

### Return type

[**\Sajari\Model\BatchUpsertRecordsResponse**](../Model/BatchUpsertRecordsResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteRecord()`

```php
deleteRecord($collection_id, $delete_record_request): mixed
```

Delete record

Delete a record with the given key.

### Example

```php
<?php
require_once __DIR__ . "/vendor/autoload.php";

// Configure HTTP basic authorization: BasicAuth
$config = Sajari\Configuration::getDefaultConfiguration()
  ->setUsername("YOUR_USERNAME")
  ->setPassword("YOUR_PASSWORD");

$apiInstance = new Sajari\Api\RecordsApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client(),
  $config
);
$collection_id = "collection_id_example"; // string | The collection that contains the record to delete, e.g. `my-collection`.
$delete_record_request = new \Sajari\Model\DeleteRecordRequest(); // \Sajari\Model\DeleteRecordRequest

try {
  $result = $apiInstance->deleteRecord($collection_id, $delete_record_request);
  print_r($result);
} catch (Exception $e) {
  echo "Exception when calling RecordsApi->deleteRecord: ",
    $e->getMessage(),
    PHP_EOL;
}
```

### Parameters

| Name                      | Type                                                                     | Description                                                                        | Notes |
| ------------------------- | ------------------------------------------------------------------------ | ---------------------------------------------------------------------------------- | ----- |
| **collection_id**         | **string**                                                               | The collection that contains the record to delete, e.g. &#x60;my-collection&#x60;. |
| **delete_record_request** | [**\Sajari\Model\DeleteRecordRequest**](../Model/DeleteRecordRequest.md) |                                                                                    |

### Return type

**mixed**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRecord()`

```php
getRecord($collection_id, $get_record_request): object
```

Get record

Retrieve a record with the given key.

### Example

```php
<?php
require_once __DIR__ . "/vendor/autoload.php";

// Configure HTTP basic authorization: BasicAuth
$config = Sajari\Configuration::getDefaultConfiguration()
  ->setUsername("YOUR_USERNAME")
  ->setPassword("YOUR_PASSWORD");

$apiInstance = new Sajari\Api\RecordsApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client(),
  $config
);
$collection_id = "collection_id_example"; // string | The collection that contains the record to retrieve, e.g. `my-collection`.
$get_record_request = new \Sajari\Model\GetRecordRequest(); // \Sajari\Model\GetRecordRequest

try {
  $result = $apiInstance->getRecord($collection_id, $get_record_request);
  print_r($result);
} catch (Exception $e) {
  echo "Exception when calling RecordsApi->getRecord: ",
    $e->getMessage(),
    PHP_EOL;
}
```

### Parameters

| Name                   | Type                                                               | Description                                                                          | Notes |
| ---------------------- | ------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ----- |
| **collection_id**      | **string**                                                         | The collection that contains the record to retrieve, e.g. &#x60;my-collection&#x60;. |
| **get_record_request** | [**\Sajari\Model\GetRecordRequest**](../Model/GetRecordRequest.md) |                                                                                      |

### Return type

**object**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `upsertRecord()`

```php
upsertRecord($collection_id, $upsert_record_request): \Sajari\Model\UpsertRecordResponse
```

Upsert record

If the record does not exist in your collection it is inserted. If it does exist it is updated. If no pipeline is specified, the default record pipeline is used to process the record. For example, to add a single product from your ecommerce store to a collection, use the following call: `json { \"pipeline\": { \"name\": \"my-pipeline\", \"version\": \"1\" }, \"record\": { \"id\": \"54hdc7h2334h\", \"name\": \"Smart TV\", \"price\": 1999, \"brand\": \"Acme\", \"description\": \"...\", \"in_stock\": true } } `

### Example

```php
<?php
require_once __DIR__ . "/vendor/autoload.php";

// Configure HTTP basic authorization: BasicAuth
$config = Sajari\Configuration::getDefaultConfiguration()
  ->setUsername("YOUR_USERNAME")
  ->setPassword("YOUR_PASSWORD");

$apiInstance = new Sajari\Api\RecordsApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client(),
  $config
);
$collection_id = "collection_id_example"; // string | The collection to upsert the record in, e.g. `my-collection`.
$upsert_record_request = new \Sajari\Model\UpsertRecordRequest(); // \Sajari\Model\UpsertRecordRequest

try {
  $result = $apiInstance->upsertRecord($collection_id, $upsert_record_request);
  print_r($result);
} catch (Exception $e) {
  echo "Exception when calling RecordsApi->upsertRecord: ",
    $e->getMessage(),
    PHP_EOL;
}
```

### Parameters

| Name                      | Type                                                                     | Description                                                             | Notes |
| ------------------------- | ------------------------------------------------------------------------ | ----------------------------------------------------------------------- | ----- |
| **collection_id**         | **string**                                                               | The collection to upsert the record in, e.g. &#x60;my-collection&#x60;. |
| **upsert_record_request** | [**\Sajari\Model\UpsertRecordRequest**](../Model/UpsertRecordRequest.md) |                                                                         |

### Return type

[**\Sajari\Model\UpsertRecordResponse**](../Model/UpsertRecordResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
