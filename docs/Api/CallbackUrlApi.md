# iimmpact\CallbackUrlApi

All URIs are relative to *https://api.iimmpact.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1CallbackUrlGet**](CallbackUrlApi.md#v1CallbackUrlGet) | **GET** /v1/callback-url | 
[**v1CallbackUrlPost**](CallbackUrlApi.md#v1CallbackUrlPost) | **POST** /v1/callback-url | 


# **v1CallbackUrlGet**
> \iimmpact\Model\CallbackUrlResponse v1CallbackUrlGet()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: SSO
$config = iimmpact\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = iimmpact\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new iimmpact\Api\CallbackUrlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1CallbackUrlGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallbackUrlApi->v1CallbackUrlGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\iimmpact\Model\CallbackUrlResponse**](../Model/CallbackUrlResponse.md)

### Authorization

[SSO](../../README.md#SSO)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1CallbackUrlPost**
> \iimmpact\Model\CallbackUrlResponse v1CallbackUrlPost($url)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: SSO
$config = iimmpact\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = iimmpact\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new iimmpact\Api\CallbackUrlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$url = "url_example"; // string | 

try {
    $result = $apiInstance->v1CallbackUrlPost($url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallbackUrlApi->v1CallbackUrlPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **url** | **string**|  |

### Return type

[**\iimmpact\Model\CallbackUrlResponse**](../Model/CallbackUrlResponse.md)

### Authorization

[SSO](../../README.md#SSO)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

