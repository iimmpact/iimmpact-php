# IIMMPACT

This library generated by iimmpact

## Requirements

PHP 5.5 and later

## Installation & Usage

### Composer

```
composer require iimmpact/iimmpact-php
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *https://api.iimmpact.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AuthorizationTokenApi* | [**v1TokenPost**](docs/Api/AuthorizationTokenApi.md#v1tokenpost) | **POST** /v1/token | 
*AuthorizationTokenApi* | [**v1TokenRefreshPost**](docs/Api/AuthorizationTokenApi.md#v1tokenrefreshpost) | **POST** /v1/token/refresh | 
*CallbackUrlApi* | [**v1CallbackUrlGet**](docs/Api/CallbackUrlApi.md#v1callbackurlget) | **GET** /v1/callback-url | 
*CallbackUrlApi* | [**v1CallbackUrlPost**](docs/Api/CallbackUrlApi.md#v1callbackurlpost) | **POST** /v1/callback-url | 
*CarInsuranceApi* | [**v1CarInsuranceGet**](docs/Api/CarInsuranceApi.md#v1carinsuranceget) | **GET** /v1/car-insurance | 
*JPJRecordsApi* | [**v1JpjDrivingLicenseGet**](docs/Api/JPJRecordsApi.md#v1jpjdrivinglicenseget) | **GET** /v1/jpj/driving-license | 
*JPJRecordsApi* | [**v1JpjDrivingTestResultsGet**](docs/Api/JPJRecordsApi.md#v1jpjdrivingtestresultsget) | **GET** /v1/jpj/driving-test-results | 
*JPJRecordsApi* | [**v1JpjMotorVehicleExpiryGet**](docs/Api/JPJRecordsApi.md#v1jpjmotorvehicleexpiryget) | **GET** /v1/jpj/motor-vehicle-expiry | 
*JPJRecordsApi* | [**v1JpjSummonsGet**](docs/Api/JPJRecordsApi.md#v1jpjsummonsget) | **GET** /v1/jpj/summons | 
*LowBalanceWarningApi* | [**v1LowBalanceThresholdGet**](docs/Api/LowBalanceWarningApi.md#v1lowbalancethresholdget) | **GET** /v1/low-balance-threshold | 
*LowBalanceWarningApi* | [**v1LowBalanceThresholdPost**](docs/Api/LowBalanceWarningApi.md#v1lowbalancethresholdpost) | **POST** /v1/low-balance-threshold | 
*MyAccountApi* | [**v1AuthChangePasswordPost**](docs/Api/MyAccountApi.md#v1authchangepasswordpost) | **POST** /v1/auth/change-password | 
*MyAccountApi* | [**v1AuthNewPasswordChallengePost**](docs/Api/MyAccountApi.md#v1authnewpasswordchallengepost) | **POST** /v1/auth/new-password-challenge | 
*MyAccountApi* | [**v1BalanceGet**](docs/Api/MyAccountApi.md#v1balanceget) | **GET** /v1/balance | 
*ProductEnquiryApi* | [**v1ProductsGet**](docs/Api/ProductEnquiryApi.md#v1productsget) | **GET** /v1/products | 
*ServicesApi* | [**v1BillPresentmentGet**](docs/Api/ServicesApi.md#v1billpresentmentget) | **GET** /v1/bill-presentment | 
*ServicesApi* | [**v1NetworkstatusGet**](docs/Api/ServicesApi.md#v1networkstatusget) | **GET** /v1/networkstatus | 
*ServicesApi* | [**v1TopupPost**](docs/Api/ServicesApi.md#v1topuppost) | **POST** /v1/topup | 
*TransactionHistoryApi* | [**v1BalanceStatementGet**](docs/Api/TransactionHistoryApi.md#v1balancestatementget) | **GET** /v1/balance-statement | 
*TransactionHistoryApi* | [**v1TransactionsGet**](docs/Api/TransactionHistoryApi.md#v1transactionsget) | **GET** /v1/transactions | 


## Documentation For Models

 - [BalanceResponse](docs/Model/BalanceResponse.md)
 - [BalanceResponseData](docs/Model/BalanceResponseData.md)
 - [BalanceStatementResponse](docs/Model/BalanceStatementResponse.md)
 - [BalanceStatementResponseData](docs/Model/BalanceStatementResponseData.md)
 - [BalanceStatementResponseLinks](docs/Model/BalanceStatementResponseLinks.md)
 - [BalanceStatementResponseMeta](docs/Model/BalanceStatementResponseMeta.md)
 - [BillPresentmentResponse](docs/Model/BillPresentmentResponse.md)
 - [BillPresentmentResponseData](docs/Model/BillPresentmentResponseData.md)
 - [BillPresentmentResponseMetadata](docs/Model/BillPresentmentResponseMetadata.md)
 - [CallbackUrlResponse](docs/Model/CallbackUrlResponse.md)
 - [CallbackUrlResponseData](docs/Model/CallbackUrlResponseData.md)
 - [CallbackUrlResponseMetadata](docs/Model/CallbackUrlResponseMetadata.md)
 - [CarInsuranceRespone](docs/Model/CarInsuranceRespone.md)
 - [CarInsuranceResponeVariant](docs/Model/CarInsuranceResponeVariant.md)
 - [ChangePasswordRequest](docs/Model/ChangePasswordRequest.md)
 - [DepositRequest](docs/Model/DepositRequest.md)
 - [DrivingLicenseRespone](docs/Model/DrivingLicenseRespone.md)
 - [DrivingLicenseResponeInner](docs/Model/DrivingLicenseResponeInner.md)
 - [DrivingTestRespone](docs/Model/DrivingTestRespone.md)
 - [DrivingTestResponeEnquiryTestPart1](docs/Model/DrivingTestResponeEnquiryTestPart1.md)
 - [Error](docs/Model/Error.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [InlineResponse2001](docs/Model/InlineResponse2001.md)
 - [InlineResponse2002](docs/Model/InlineResponse2002.md)
 - [InlineResponse2002Data](docs/Model/InlineResponse2002Data.md)
 - [InlineResponse200Data](docs/Model/InlineResponse200Data.md)
 - [JPJRecordsResponse](docs/Model/JPJRecordsResponse.md)
 - [JPJSummonsResponse](docs/Model/JPJSummonsResponse.md)
 - [LowBalanceWarningResponse](docs/Model/LowBalanceWarningResponse.md)
 - [LowBalanceWarningResponseData](docs/Model/LowBalanceWarningResponseData.md)
 - [LowBalanceWarningResponseMetadata](docs/Model/LowBalanceWarningResponseMetadata.md)
 - [ModelEmpty](docs/Model/ModelEmpty.md)
 - [NetworkStatusResponse](docs/Model/NetworkStatusResponse.md)
 - [NetworkStatusResponseData](docs/Model/NetworkStatusResponseData.md)
 - [NetworkStatusResponseMetadata](docs/Model/NetworkStatusResponseMetadata.md)
 - [NewPasswordRequest](docs/Model/NewPasswordRequest.md)
 - [NewPasswordResponses](docs/Model/NewPasswordResponses.md)
 - [OnlyMessageRespone](docs/Model/OnlyMessageRespone.md)
 - [RefreshTokenRequest](docs/Model/RefreshTokenRequest.md)
 - [TokenRequest](docs/Model/TokenRequest.md)
 - [TokenResponse](docs/Model/TokenResponse.md)
 - [TokenResponseAuthenticationResult](docs/Model/TokenResponseAuthenticationResult.md)
 - [TopupRequest](docs/Model/TopupRequest.md)
 - [TopupResponse](docs/Model/TopupResponse.md)
 - [TopupResponseData](docs/Model/TopupResponseData.md)
 - [TransactionsResponse](docs/Model/TransactionsResponse.md)
 - [TransactionsResponseBalance](docs/Model/TransactionsResponseBalance.md)
 - [TransactionsResponseData](docs/Model/TransactionsResponseData.md)
 - [TransactionsResponseMeta](docs/Model/TransactionsResponseMeta.md)
 - [TransactionsResponseProduct](docs/Model/TransactionsResponseProduct.md)
 - [TransactionsResponseStatus](docs/Model/TransactionsResponseStatus.md)
 - [VehicleExpiryResponse](docs/Model/VehicleExpiryResponse.md)


## Documentation For Authorization


## IIMMPACT-COGNITO

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header

## SSO

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header

## api_key

- **Type**: API key
- **API key parameter name**: x-api-key
- **Location**: HTTP header




