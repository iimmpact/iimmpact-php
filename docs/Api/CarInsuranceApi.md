# iimmpact\CarInsuranceApi

All URIs are relative to *https://api.iimmpact.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1CarInsuranceGet**](CarInsuranceApi.md#v1CarInsuranceGet) | **GET** /v1/car-insurance | 


# **v1CarInsuranceGet**
> \iimmpact\Model\CarInsuranceRespone v1CarInsuranceGet($vehicle_no, $id_no)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: SSO
$config = iimmpact\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = iimmpact\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new iimmpact\Api\CarInsuranceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vehicle_no = "vehicle_no_example"; // string | 
$id_no = "id_no_example"; // string | 

try {
    $result = $apiInstance->v1CarInsuranceGet($vehicle_no, $id_no);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarInsuranceApi->v1CarInsuranceGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vehicle_no** | **string**|  |
 **id_no** | **string**|  | [optional]

### Return type

[**\iimmpact\Model\CarInsuranceRespone**](../Model/CarInsuranceRespone.md)

### Authorization

[SSO](../../README.md#SSO)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

