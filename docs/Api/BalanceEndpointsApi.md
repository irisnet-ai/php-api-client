# Irisnet\API\Client\BalanceEndpointsApi

All URIs are relative to https://api.irisnet.de, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCost()**](BalanceEndpointsApi.md#getCost) | **GET** /v2/cost/{configId} | Get the cost of the configuration for a single image. |
| [**getLicenseInfo()**](BalanceEndpointsApi.md#getLicenseInfo) | **GET** /v2/info/ | Get information for the given license key. |
| [**getVideoCost()**](BalanceEndpointsApi.md#getVideoCost) | **GET** /v2/cost/{configId}/{frames} | Get the cost of the configuration for moving images. |
| [**getVideoCost1()**](BalanceEndpointsApi.md#getVideoCost1) | **GET** /v2/cost/{configId}/{fps}/{duration} | Get the cost of the configuration for moving images. |


## `getCost()`

```php
getCost($configId): \Irisnet\API\Client\Model\Pricing
```

Get the cost of the configuration for a single image.

The cost is subtracted from the license key after a successful check-image operation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: LICENSE-KEY
$config = Irisnet\API\Client\Configuration::getDefaultConfiguration()->setApiKey('LICENSE-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Irisnet\API\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('LICENSE-KEY', 'Bearer');


$apiInstance = new Irisnet\API\Client\Api\BalanceEndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$configId = 'configId_example'; // string | The configuration id from the Basic Configuration operations.

try {
    $result = $apiInstance->getCost($configId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceEndpointsApi->getCost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **configId** | **string**| The configuration id from the Basic Configuration operations. | |

### Return type

[**\Irisnet\API\Client\Model\Pricing**](../Model/Pricing.md)

### Authorization

[LICENSE-KEY](../../README.md#LICENSE-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLicenseInfo()`

```php
getLicenseInfo(): \Irisnet\API\Client\Model\LicenseInfo
```

Get information for the given license key.

Get the LicenseInfo schema for the given license key in the authorization header.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: LICENSE-KEY
$config = Irisnet\API\Client\Configuration::getDefaultConfiguration()->setApiKey('LICENSE-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Irisnet\API\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('LICENSE-KEY', 'Bearer');


$apiInstance = new Irisnet\API\Client\Api\BalanceEndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getLicenseInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceEndpointsApi->getLicenseInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Irisnet\API\Client\Model\LicenseInfo**](../Model/LicenseInfo.md)

### Authorization

[LICENSE-KEY](../../README.md#LICENSE-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVideoCost()`

```php
getVideoCost($configId, $frames): \Irisnet\API\Client\Model\Pricing
```

Get the cost of the configuration for moving images.

The cost is subtracted from the license key after a successful check operation for moving images.  <b>NOTICE: The returned cost is an approximation. The exact cost can only be determined during the check operation.<b>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: LICENSE-KEY
$config = Irisnet\API\Client\Configuration::getDefaultConfiguration()->setApiKey('LICENSE-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Irisnet\API\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('LICENSE-KEY', 'Bearer');


$apiInstance = new Irisnet\API\Client\Api\BalanceEndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$configId = 'configId_example'; // string | The configuration id from the Basic Configuration operations.
$frames = 56; // int | The number of frames that the AI should check.

try {
    $result = $apiInstance->getVideoCost($configId, $frames);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceEndpointsApi->getVideoCost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **configId** | **string**| The configuration id from the Basic Configuration operations. | |
| **frames** | **int**| The number of frames that the AI should check. | |

### Return type

[**\Irisnet\API\Client\Model\Pricing**](../Model/Pricing.md)

### Authorization

[LICENSE-KEY](../../README.md#LICENSE-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVideoCost1()`

```php
getVideoCost1($configId, $fps, $duration): \Irisnet\API\Client\Model\Pricing
```

Get the cost of the configuration for moving images.

The cost is subtracted from the license key after a successful check operation for moving images.  <b>NOTICE: The returned cost is an approximation. The exact cost can only be determined during the check operation.<b>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: LICENSE-KEY
$config = Irisnet\API\Client\Configuration::getDefaultConfiguration()->setApiKey('LICENSE-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Irisnet\API\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('LICENSE-KEY', 'Bearer');


$apiInstance = new Irisnet\API\Client\Api\BalanceEndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$configId = 'configId_example'; // string | The configuration id from the Basic Configuration operations.
$fps = 56; // int | The frames per second of the video or stream.
$duration = 56; // int | The duration in seconds of the video or stream.

try {
    $result = $apiInstance->getVideoCost1($configId, $fps, $duration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceEndpointsApi->getVideoCost1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **configId** | **string**| The configuration id from the Basic Configuration operations. | |
| **fps** | **int**| The frames per second of the video or stream. | |
| **duration** | **int**| The duration in seconds of the video or stream. | |

### Return type

[**\Irisnet\API\Client\Model\Pricing**](../Model/Pricing.md)

### Authorization

[LICENSE-KEY](../../README.md#LICENSE-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
