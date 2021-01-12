# iimmpact\LowBalanceWarningApi

All URIs are relative to *https://api.iimmpact.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1LowBalanceThresholdGet**](LowBalanceWarningApi.md#v1LowBalanceThresholdGet) | **GET** /v1/low-balance-threshold | 
[**v1LowBalanceThresholdPost**](LowBalanceWarningApi.md#v1LowBalanceThresholdPost) | **POST** /v1/low-balance-threshold | 


# **v1LowBalanceThresholdGet**
> \iimmpact\Model\LowBalanceWarningResponse v1LowBalanceThresholdGet()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: SSO
$config = iimmpact\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = iimmpact\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new iimmpact\Api\LowBalanceWarningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1LowBalanceThresholdGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LowBalanceWarningApi->v1LowBalanceThresholdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\iimmpact\Model\LowBalanceWarningResponse**](../Model/LowBalanceWarningResponse.md)

### Authorization

[SSO](../../README.md#SSO)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1LowBalanceThresholdPost**
> \iimmpact\Model\LowBalanceWarningResponse v1LowBalanceThresholdPost($amount)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: SSO
$config = iimmpact\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = iimmpact\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new iimmpact\Api\LowBalanceWarningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$amount = "amount_example"; // string | 

try {
    $result = $apiInstance->v1LowBalanceThresholdPost($amount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LowBalanceWarningApi->v1LowBalanceThresholdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amount** | **string**|  |

### Return type

[**\iimmpact\Model\LowBalanceWarningResponse**](../Model/LowBalanceWarningResponse.md)

### Authorization

[SSO](../../README.md#SSO)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

