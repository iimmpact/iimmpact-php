# iimmpact\ProductEnquiryApi

All URIs are relative to *https://api.iimmpact.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1ProductsGet**](ProductEnquiryApi.md#v1ProductsGet) | **GET** /v1/products | 


# **v1ProductsGet**
> \iimmpact\Model\InlineResponse2002 v1ProductsGet($category)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: SSO
$config = iimmpact\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = iimmpact\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new iimmpact\Api\ProductEnquiryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category = "category_example"; // string | 

try {
    $result = $apiInstance->v1ProductsGet($category);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductEnquiryApi->v1ProductsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category** | **string**|  | [optional]

### Return type

[**\iimmpact\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[SSO](../../README.md#SSO)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

