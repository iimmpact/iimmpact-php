# iimmpact\MyAccountApi

All URIs are relative to *https://api.iimmpact.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1AuthChangePasswordPost**](MyAccountApi.md#v1AuthChangePasswordPost) | **POST** /v1/auth/change-password | 
[**v1AuthNewPasswordChallengePost**](MyAccountApi.md#v1AuthNewPasswordChallengePost) | **POST** /v1/auth/new-password-challenge | 
[**v1BalanceGet**](MyAccountApi.md#v1BalanceGet) | **GET** /v1/balance | 


# **v1AuthChangePasswordPost**
> \iimmpact\Model\InlineResponse2001 v1AuthChangePasswordPost($new_password_request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: SSO
$config = iimmpact\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = iimmpact\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new iimmpact\Api\MyAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$new_password_request = new \iimmpact\Model\ChangePasswordRequest(); // \iimmpact\Model\ChangePasswordRequest | 

try {
    $result = $apiInstance->v1AuthChangePasswordPost($new_password_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyAccountApi->v1AuthChangePasswordPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **new_password_request** | [**\iimmpact\Model\ChangePasswordRequest**](../Model/ChangePasswordRequest.md)|  |

### Return type

[**\iimmpact\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[SSO](../../README.md#SSO)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1AuthNewPasswordChallengePost**
> \iimmpact\Model\NewPasswordResponses v1AuthNewPasswordChallengePost($new_password_request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new iimmpact\Api\MyAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$new_password_request = new \iimmpact\Model\NewPasswordRequest(); // \iimmpact\Model\NewPasswordRequest | 

try {
    $result = $apiInstance->v1AuthNewPasswordChallengePost($new_password_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyAccountApi->v1AuthNewPasswordChallengePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **new_password_request** | [**\iimmpact\Model\NewPasswordRequest**](../Model/NewPasswordRequest.md)|  |

### Return type

[**\iimmpact\Model\NewPasswordResponses**](../Model/NewPasswordResponses.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1BalanceGet**
> \iimmpact\Model\InlineResponse200 v1BalanceGet()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: SSO
$config = iimmpact\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = iimmpact\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new iimmpact\Api\MyAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1BalanceGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyAccountApi->v1BalanceGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\iimmpact\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[SSO](../../README.md#SSO)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

