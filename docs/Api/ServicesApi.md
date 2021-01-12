# iimmpact\ServicesApi

All URIs are relative to *https://api.iimmpact.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1BillPresentmentGet**](ServicesApi.md#v1BillPresentmentGet) | **GET** /v1/bill-presentment | 
[**v1NetworkstatusGet**](ServicesApi.md#v1NetworkstatusGet) | **GET** /v1/networkstatus | 
[**v1TopupPost**](ServicesApi.md#v1TopupPost) | **POST** /v1/topup | 


# **v1BillPresentmentGet**
> \iimmpact\Model\BillPresentmentResponse v1BillPresentmentGet($account, $account_name, $product)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: SSO
$config = iimmpact\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = iimmpact\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new iimmpact\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account = "account_example"; // string | 
$account_name = "account_name_example"; // string | 
$product = "product_example"; // string | 

try {
    $result = $apiInstance->v1BillPresentmentGet($account, $account_name, $product);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->v1BillPresentmentGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account** | **string**|  |
 **account_name** | **string**|  | [optional]
 **product** | **string**|  | [optional]

### Return type

[**\iimmpact\Model\BillPresentmentResponse**](../Model/BillPresentmentResponse.md)

### Authorization

[SSO](../../README.md#SSO)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1NetworkstatusGet**
> \iimmpact\Model\NetworkStatusResponse v1NetworkstatusGet($product)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: SSO
$config = iimmpact\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = iimmpact\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new iimmpact\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = "product_example"; // string | 

try {
    $result = $apiInstance->v1NetworkstatusGet($product);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->v1NetworkstatusGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product** | **string**|  |

### Return type

[**\iimmpact\Model\NetworkStatusResponse**](../Model/NetworkStatusResponse.md)

### Authorization

[SSO](../../README.md#SSO)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1TopupPost**
> \iimmpact\Model\TopupResponse v1TopupPost($topup_request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: SSO
$config = iimmpact\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = iimmpact\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new iimmpact\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$topup_request = new \iimmpact\Model\TopupRequest(); // \iimmpact\Model\TopupRequest | 

try {
    $result = $apiInstance->v1TopupPost($topup_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->v1TopupPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **topup_request** | [**\iimmpact\Model\TopupRequest**](../Model/TopupRequest.md)|  |

### Return type

[**\iimmpact\Model\TopupResponse**](../Model/TopupResponse.md)

### Authorization

[SSO](../../README.md#SSO)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

