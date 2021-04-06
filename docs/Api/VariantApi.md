# Swagger\Client\VariantApi

All URIs are relative to */api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createVariant**](VariantApi.md#createvariant) | **POST** /flags/{flagID}/variants | 
[**deleteVariant**](VariantApi.md#deletevariant) | **DELETE** /flags/{flagID}/variants/{variantID} | 
[**findVariants**](VariantApi.md#findvariants) | **GET** /flags/{flagID}/variants | 
[**putVariant**](VariantApi.md#putvariant) | **PUT** /flags/{flagID}/variants/{variantID} | 

# **createVariant**
> \Swagger\Client\Model\Variant createVariant($body, $flag_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VariantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\CreateVariantRequest(); // \Swagger\Client\Model\CreateVariantRequest | create a variant
$flag_id = 789; // int | numeric ID of the flag

try {
    $result = $apiInstance->createVariant($body, $flag_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariantApi->createVariant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateVariantRequest**](../Model/CreateVariantRequest.md)| create a variant |
 **flag_id** | **int**| numeric ID of the flag |

### Return type

[**\Swagger\Client\Model\Variant**](../Model/Variant.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteVariant**
> deleteVariant($flag_id, $variant_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VariantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flag_id = 789; // int | numeric ID of the flag
$variant_id = 789; // int | numeric ID of the variant

try {
    $apiInstance->deleteVariant($flag_id, $variant_id);
} catch (Exception $e) {
    echo 'Exception when calling VariantApi->deleteVariant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flag_id** | **int**| numeric ID of the flag |
 **variant_id** | **int**| numeric ID of the variant |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findVariants**
> \Swagger\Client\Model\Variant[] findVariants($flag_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VariantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flag_id = 789; // int | numeric ID of the flag

try {
    $result = $apiInstance->findVariants($flag_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariantApi->findVariants: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flag_id** | **int**| numeric ID of the flag |

### Return type

[**\Swagger\Client\Model\Variant[]**](../Model/Variant.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putVariant**
> \Swagger\Client\Model\Variant putVariant($body, $flag_id, $variant_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VariantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\PutVariantRequest(); // \Swagger\Client\Model\PutVariantRequest | update a variant
$flag_id = 789; // int | numeric ID of the flag
$variant_id = 789; // int | numeric ID of the variant

try {
    $result = $apiInstance->putVariant($body, $flag_id, $variant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariantApi->putVariant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PutVariantRequest**](../Model/PutVariantRequest.md)| update a variant |
 **flag_id** | **int**| numeric ID of the flag |
 **variant_id** | **int**| numeric ID of the variant |

### Return type

[**\Swagger\Client\Model\Variant**](../Model/Variant.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

