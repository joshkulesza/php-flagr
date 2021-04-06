# Swagger\Client\EvaluationApi

All URIs are relative to */api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postEvaluation**](EvaluationApi.md#postevaluation) | **POST** /evaluation | 
[**postEvaluationBatch**](EvaluationApi.md#postevaluationbatch) | **POST** /evaluation/batch | 

# **postEvaluation**
> \Swagger\Client\Model\EvalResult postEvaluation($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Flagr\EvaluationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EvalContext(); // \Swagger\Client\Model\EvalContext | evalution context

try {
    $result = $apiInstance->postEvaluation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EvaluationApi->postEvaluation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EvalContext**](../Model/EvalContext.md)| evalution context |

### Return type

[**\Swagger\Client\Model\EvalResult**](../Model/EvalResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEvaluationBatch**
> \Swagger\Client\Model\EvaluationBatchResponse postEvaluationBatch($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Flagr\EvaluationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EvaluationBatchRequest(); // \Swagger\Client\Model\EvaluationBatchRequest | evalution batch request

try {
    $result = $apiInstance->postEvaluationBatch($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EvaluationApi->postEvaluationBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EvaluationBatchRequest**](../Model/EvaluationBatchRequest.md)| evalution batch request |

### Return type

[**\Swagger\Client\Model\EvaluationBatchResponse**](../Model/EvaluationBatchResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

