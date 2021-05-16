# Irisnet\API\Client\EndpointsForAIChecksApi

All URIs are relative to *https://api.irisnet.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkImage**](EndpointsForAIChecksApi.md#checkImage) | **POST** /v1/check-image/{licenseKey} | Upload and check image against previously chosen configuration.
[**checkImageUrl**](EndpointsForAIChecksApi.md#checkImageUrl) | **POST** /v1/check-url/{licenseKey} | Check image url against previously chosen configuration.



## checkImage

> \Irisnet\API\Client\Model\IrisNet checkImage($licenseKey, $file, $detail)

Upload and check image against previously chosen configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Irisnet\API\Client\Api\EndpointsForAIChecksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$licenseKey = 'licenseKey_example'; // string | License obtained from irisnet.de shop.
$file = "/path/to/file.txt"; // \SplFileObject | 
$detail = 1; // int | Sets the response details.  * _1_ - The response body informs you if the image is ok or not ok (better API performance) * _2_ - In addition the response body lists all broken rules. * _3_ - In addition to the first two options, this will show all objects with positional information.

try {
    $result = $apiInstance->checkImage($licenseKey, $file, $detail);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointsForAIChecksApi->checkImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **licenseKey** | **string**| License obtained from irisnet.de shop. |
 **file** | **\SplFileObject****\SplFileObject**|  |
 **detail** | **int**| Sets the response details.  * _1_ - The response body informs you if the image is ok or not ok (better API performance) * _2_ - In addition the response body lists all broken rules. * _3_ - In addition to the first two options, this will show all objects with positional information. | [optional] [default to 1]

### Return type

[**\Irisnet\API\Client\Model\IrisNet**](../Model/IrisNet.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## checkImageUrl

> \Irisnet\API\Client\Model\IrisNet checkImageUrl($url, $licenseKey, $detail)

Check image url against previously chosen configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Irisnet\API\Client\Api\EndpointsForAIChecksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$url = 'url_example'; // string | 
$licenseKey = 'licenseKey_example'; // string | License obtained from irisnet.de shop.
$detail = 1; // int | Sets the response details.  * _1_ - The response body informs you if the image is ok or not ok (better API performance) * _2_ - In addition the response body lists all broken rules. * _3_ - In addition to the first two options, this will show all objects with positional information.

try {
    $result = $apiInstance->checkImageUrl($url, $licenseKey, $detail);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointsForAIChecksApi->checkImageUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **url** | **string**|  |
 **licenseKey** | **string**| License obtained from irisnet.de shop. |
 **detail** | **int**| Sets the response details.  * _1_ - The response body informs you if the image is ok or not ok (better API performance) * _2_ - In addition the response body lists all broken rules. * _3_ - In addition to the first two options, this will show all objects with positional information. | [optional] [default to 1]

### Return type

[**\Irisnet\API\Client\Model\IrisNet**](../Model/IrisNet.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

