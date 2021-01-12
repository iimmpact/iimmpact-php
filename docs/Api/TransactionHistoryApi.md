# iimmpact\TransactionHistoryApi

All URIs are relative to *https://api.iimmpact.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1BalanceStatementGet**](TransactionHistoryApi.md#v1BalanceStatementGet) | **GET** /v1/balance-statement | 
[**v1TransactionsGet**](TransactionHistoryApi.md#v1TransactionsGet) | **GET** /v1/transactions | 


# **v1BalanceStatementGet**
> \iimmpact\Model\BalanceStatementResponse v1BalanceStatementGet($date, $limit, $remarks, $sort, $type, $direction, $page, $amount)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: SSO
$config = iimmpact\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = iimmpact\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new iimmpact\Api\TransactionHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date = "date_example"; // string | 
$limit = "limit_example"; // string | 
$remarks = "remarks_example"; // string | 
$sort = "sort_example"; // string | 
$type = "type_example"; // string | 
$direction = "direction_example"; // string | 
$page = "page_example"; // string | 
$amount = "amount_example"; // string | 

try {
    $result = $apiInstance->v1BalanceStatementGet($date, $limit, $remarks, $sort, $type, $direction, $page, $amount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionHistoryApi->v1BalanceStatementGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date** | **string**|  |
 **limit** | **string**|  | [optional]
 **remarks** | **string**|  | [optional]
 **sort** | **string**|  | [optional]
 **type** | **string**|  | [optional]
 **direction** | **string**|  | [optional]
 **page** | **string**|  | [optional]
 **amount** | **string**|  | [optional]

### Return type

[**\iimmpact\Model\BalanceStatementResponse**](../Model/BalanceStatementResponse.md)

### Authorization

[SSO](../../README.md#SSO)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1TransactionsGet**
> \iimmpact\Model\TransactionsResponse v1TransactionsGet($date, $refid, $limit, $sort, $offset, $direction, $status, $account, $accept_encoding, $sn, $product)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: SSO
$config = iimmpact\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = iimmpact\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new iimmpact\Api\TransactionHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date = "date_example"; // string | 
$refid = "refid_example"; // string | 
$limit = "limit_example"; // string | 
$sort = "sort_example"; // string | 
$offset = "offset_example"; // string | 
$direction = "direction_example"; // string | 
$status = "status_example"; // string | 
$account = "account_example"; // string | 
$accept_encoding = "accept_encoding_example"; // string | 
$sn = "sn_example"; // string | 
$product = "product_example"; // string | 

try {
    $result = $apiInstance->v1TransactionsGet($date, $refid, $limit, $sort, $offset, $direction, $status, $account, $accept_encoding, $sn, $product);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionHistoryApi->v1TransactionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date** | **string**|  |
 **refid** | **string**|  | [optional]
 **limit** | **string**|  | [optional]
 **sort** | **string**|  | [optional]
 **offset** | **string**|  | [optional]
 **direction** | **string**|  | [optional]
 **status** | **string**|  | [optional]
 **account** | **string**|  | [optional]
 **accept_encoding** | **string**|  | [optional]
 **sn** | **string**|  | [optional]
 **product** | **string**|  | [optional]

### Return type

[**\iimmpact\Model\TransactionsResponse**](../Model/TransactionsResponse.md)

### Authorization

[SSO](../../README.md#SSO)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

