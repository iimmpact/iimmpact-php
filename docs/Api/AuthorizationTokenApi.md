# iimmpact\AuthorizationTokenApi

All URIs are relative to *https://api.iimmpact.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1TokenPost**](AuthorizationTokenApi.md#v1TokenPost) | **POST** /v1/token | 
[**v1TokenRefreshPost**](AuthorizationTokenApi.md#v1TokenRefreshPost) | **POST** /v1/token/refresh | 


# **v1TokenPost**
> \iimmpact\Model\TokenResponse v1TokenPost($token_request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new iimmpact\Api\AuthorizationTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token_request = new \iimmpact\Model\TokenRequest(); // \iimmpact\Model\TokenRequest | 

try {
    $result = $apiInstance->v1TokenPost($token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationTokenApi->v1TokenPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token_request** | [**\iimmpact\Model\TokenRequest**](../Model/TokenRequest.md)|  |

### Return type

[**\iimmpact\Model\TokenResponse**](../Model/TokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1TokenRefreshPost**
> \iimmpact\Model\TokenResponse v1TokenRefreshPost($refresh_token_request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new iimmpact\Api\AuthorizationTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$refresh_token_request = new \iimmpact\Model\RefreshTokenRequest(); // \iimmpact\Model\RefreshTokenRequest | 

try {
    $result = $apiInstance->v1TokenRefreshPost($refresh_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationTokenApi->v1TokenRefreshPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **refresh_token_request** | [**\iimmpact\Model\RefreshTokenRequest**](../Model/RefreshTokenRequest.md)|  |

### Return type

[**\iimmpact\Model\TokenResponse**](../Model/TokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

