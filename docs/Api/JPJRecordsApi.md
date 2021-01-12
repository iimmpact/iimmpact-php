# iimmpact\JPJRecordsApi

All URIs are relative to *https://api.iimmpact.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1JpjDrivingLicenseGet**](JPJRecordsApi.md#v1JpjDrivingLicenseGet) | **GET** /v1/jpj/driving-license | 
[**v1JpjDrivingTestResultsGet**](JPJRecordsApi.md#v1JpjDrivingTestResultsGet) | **GET** /v1/jpj/driving-test-results | 
[**v1JpjMotorVehicleExpiryGet**](JPJRecordsApi.md#v1JpjMotorVehicleExpiryGet) | **GET** /v1/jpj/motor-vehicle-expiry | 
[**v1JpjSummonsGet**](JPJRecordsApi.md#v1JpjSummonsGet) | **GET** /v1/jpj/summons | 


# **v1JpjDrivingLicenseGet**
> \iimmpact\Model\DrivingLicenseRespone v1JpjDrivingLicenseGet($id_no, $id_type, $captcha)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: SSO
$config = iimmpact\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = iimmpact\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new iimmpact\Api\JPJRecordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_no = "id_no_example"; // string | 
$id_type = "id_type_example"; // string | 
$captcha = "captcha_example"; // string | 

try {
    $result = $apiInstance->v1JpjDrivingLicenseGet($id_no, $id_type, $captcha);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JPJRecordsApi->v1JpjDrivingLicenseGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_no** | **string**|  |
 **id_type** | **string**|  |
 **captcha** | **string**|  | [optional]

### Return type

[**\iimmpact\Model\DrivingLicenseRespone**](../Model/DrivingLicenseRespone.md)

### Authorization

[SSO](../../README.md#SSO)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1JpjDrivingTestResultsGet**
> \iimmpact\Model\DrivingTestRespone v1JpjDrivingTestResultsGet($id_no, $id_type, $captcha)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: SSO
$config = iimmpact\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = iimmpact\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new iimmpact\Api\JPJRecordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_no = "id_no_example"; // string | 
$id_type = "id_type_example"; // string | 
$captcha = "captcha_example"; // string | 

try {
    $result = $apiInstance->v1JpjDrivingTestResultsGet($id_no, $id_type, $captcha);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JPJRecordsApi->v1JpjDrivingTestResultsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_no** | **string**|  |
 **id_type** | **string**|  |
 **captcha** | **string**|  | [optional]

### Return type

[**\iimmpact\Model\DrivingTestRespone**](../Model/DrivingTestRespone.md)

### Authorization

[SSO](../../README.md#SSO)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1JpjMotorVehicleExpiryGet**
> \iimmpact\Model\VehicleExpiryResponse v1JpjMotorVehicleExpiryGet($id_no, $id_type, $vehicle_no, $captcha)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: SSO
$config = iimmpact\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = iimmpact\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new iimmpact\Api\JPJRecordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_no = "id_no_example"; // string | 
$id_type = "id_type_example"; // string | 
$vehicle_no = "vehicle_no_example"; // string | 
$captcha = "captcha_example"; // string | 

try {
    $result = $apiInstance->v1JpjMotorVehicleExpiryGet($id_no, $id_type, $vehicle_no, $captcha);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JPJRecordsApi->v1JpjMotorVehicleExpiryGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_no** | **string**|  |
 **id_type** | **string**|  |
 **vehicle_no** | **string**|  |
 **captcha** | **string**|  | [optional]

### Return type

[**\iimmpact\Model\VehicleExpiryResponse**](../Model/VehicleExpiryResponse.md)

### Authorization

[SSO](../../README.md#SSO)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1JpjSummonsGet**
> \iimmpact\Model\JPJSummonsResponse v1JpjSummonsGet($id_no, $id_type, $captcha)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: SSO
$config = iimmpact\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = iimmpact\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new iimmpact\Api\JPJRecordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_no = "id_no_example"; // string | 
$id_type = "id_type_example"; // string | 
$captcha = "captcha_example"; // string | 

try {
    $result = $apiInstance->v1JpjSummonsGet($id_no, $id_type, $captcha);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JPJRecordsApi->v1JpjSummonsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_no** | **string**|  |
 **id_type** | **string**|  |
 **captcha** | **string**|  | [optional]

### Return type

[**\iimmpact\Model\JPJSummonsResponse**](../Model/JPJSummonsResponse.md)

### Authorization

[SSO](../../README.md#SSO)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

