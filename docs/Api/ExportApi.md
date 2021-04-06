# Flagr\Client\ExportApi

All URIs are relative to */api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getExportEvalCacheJSON**](ExportApi.md#getexportevalcachejson) | **GET** /export/eval_cache/json | 
[**getExportSqlite**](ExportApi.md#getexportsqlite) | **GET** /export/sqlite | 

# **getExportEvalCacheJSON**
> object getExportEvalCacheJSON()



Export JSON format of the eval cache dump

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Flagr\Client\Flagr\ExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getExportEvalCacheJSON();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->getExportEvalCacheJSON: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExportSqlite**
> string getExportSqlite($exclude_snapshots)



Export sqlite3 format of the db dump, which is converted from the main database.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Flagr\Client\Flagr\ExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$exclude_snapshots = true; // bool | export without snapshots data - useful for smaller db without snapshots

try {
    $result = $apiInstance->getExportSqlite($exclude_snapshots);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->getExportSqlite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **exclude_snapshots** | **bool**| export without snapshots data - useful for smaller db without snapshots | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

