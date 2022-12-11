# Irisnet\API\Client\AICheckOperationsApi

All URIs are relative to https://api.irisnet.de, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**checkImage()**](AICheckOperationsApi.md#checkImage) | **POST** /v2/check-image/{configId} | Check an image with the AI. |
| [**checkStream()**](AICheckOperationsApi.md#checkStream) | **POST** /v2/check-stream/{configId} | Check a stream with the AI. |
| [**checkVideo()**](AICheckOperationsApi.md#checkVideo) | **POST** /v2/check-video/{configId} | Check a video with the AI. |


## `checkImage()`

```php
checkImage($configId, $url, $detail, $imageEncode): \Irisnet\API\Client\Model\CheckResult
```

Check an image with the AI.

The response (_CheckResult_ schema) is returned immediately after the request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: LICENSE-KEY
$config = Irisnet\API\Client\Configuration::getDefaultConfiguration()->setApiKey('LICENSE-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Irisnet\API\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('LICENSE-KEY', 'Bearer');


$apiInstance = new Irisnet\API\Client\Api\AICheckOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$configId = 'configId_example'; // string | The configuration id from the Basic Configuration operations.
$url = 'url_example'; // string | The url to the image that needs to be checked.
$detail = 1; // int | Set the detail level of the response.  * _1_ - The response only contains the _Summary_ and possibly the _Encoded_ schemas for basic information's (better API performance). * _2_ - Additionally lists all broken rules (_BrokenRule_ schema) according to the configuration parameters that were requested. * _3_ - Also shows detections (e.g. _BaseDetection_ schema) that contains extended features to each found object.
$imageEncode = false; // bool | Specifies whether or not to draw an output image that will be delivered in the response body as base64 encoded string. The _Encoded_ schema will be available in the response.

try {
    $result = $apiInstance->checkImage($configId, $url, $detail, $imageEncode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AICheckOperationsApi->checkImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **configId** | **string**| The configuration id from the Basic Configuration operations. | |
| **url** | **string**| The url to the image that needs to be checked. | |
| **detail** | **int**| Set the detail level of the response.  * _1_ - The response only contains the _Summary_ and possibly the _Encoded_ schemas for basic information&#39;s (better API performance). * _2_ - Additionally lists all broken rules (_BrokenRule_ schema) according to the configuration parameters that were requested. * _3_ - Also shows detections (e.g. _BaseDetection_ schema) that contains extended features to each found object. | [optional] [default to 1] |
| **imageEncode** | **bool**| Specifies whether or not to draw an output image that will be delivered in the response body as base64 encoded string. The _Encoded_ schema will be available in the response. | [optional] [default to false] |

### Return type

[**\Irisnet\API\Client\Model\CheckResult**](../Model/CheckResult.md)

### Authorization

[LICENSE-KEY](../../README.md#LICENSE-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `checkStream()`

```php
checkStream($configId, $inUrl, $outUrl, $cycleLength, $checkRate): \Irisnet\API\Client\Model\CheckResult[]
```

Check a stream with the AI.

The body is continuously send per JSON stream until completion of the video stream. Only then the full _CheckResult_ schema will be shown (past _Events_ omitted).  <b>NOTICE: Depending on your configuration and parameters this operation can be quite expensive on your credit balance.<b>  <b>WARNING: Please do not use the 'Try it out' for this operation. The browser is not able to refresh the response preview until the completion of the video stream.<b>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: LICENSE-KEY
$config = Irisnet\API\Client\Configuration::getDefaultConfiguration()->setApiKey('LICENSE-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Irisnet\API\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('LICENSE-KEY', 'Bearer');


$apiInstance = new Irisnet\API\Client\Api\AICheckOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$configId = 'configId_example'; // string | The configuration id from the Basic Configuration operations.
$inUrl = 'inUrl_example'; // string | The URL of the video stream that the AI should check.
$outUrl = 'outUrl_example'; // string | The URL of where the AI should send the encoded stream.
$cycleLength = 500; // int | Determine how often (value in milliseconds) the the AI should give a feedback.
$checkRate = 0; // int | The milliseconds between each AI check. E.g. The AI will check 1 frame per second when checkRate is set to '1000'.

try {
    $result = $apiInstance->checkStream($configId, $inUrl, $outUrl, $cycleLength, $checkRate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AICheckOperationsApi->checkStream: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **configId** | **string**| The configuration id from the Basic Configuration operations. | |
| **inUrl** | **string**| The URL of the video stream that the AI should check. | |
| **outUrl** | **string**| The URL of where the AI should send the encoded stream. | [optional] |
| **cycleLength** | **int**| Determine how often (value in milliseconds) the the AI should give a feedback. | [optional] [default to 500] |
| **checkRate** | **int**| The milliseconds between each AI check. E.g. The AI will check 1 frame per second when checkRate is set to &#39;1000&#39;. | [optional] [default to 0] |

### Return type

[**\Irisnet\API\Client\Model\CheckResult[]**](../Model/CheckResult.md)

### Authorization

[LICENSE-KEY](../../README.md#LICENSE-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/x-ndjson`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `checkVideo()`

```php
checkVideo($configId, $url, $callback, $detail, $imageEncode, $checkRate)
```

Check a video with the AI.

An empty response is returned immediately. The actual body (_CheckResult_ schema) is send to the _callbackUrl_ after the AI has finished processing.  <b>NOTICE: Depending on your configuration and parameters this operation can be quite expensive on your credit balance.<b>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: LICENSE-KEY
$config = Irisnet\API\Client\Configuration::getDefaultConfiguration()->setApiKey('LICENSE-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Irisnet\API\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('LICENSE-KEY', 'Bearer');


$apiInstance = new Irisnet\API\Client\Api\AICheckOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$configId = 'configId_example'; // string | The configuration id from the Basic Configuration operations.
$url = 'url_example'; // string | The url to the video that needs to be checked.
$callback = new \Irisnet\API\Client\Model\Callback(); // \Irisnet\API\Client\Model\Callback
$detail = 1; // int | Set the detail level of the response.  * _1_ - The response only contains the _Summary_ and possibly the _Encoded_ schemas for basic information's (better API performance). * _2_ - Additionally lists all broken rules (_BrokenRule_ schema) according to the configuration parameters that were requested. * _3_ - Also shows events (_Event_ schema) that contains extended features to each found object.
$imageEncode = false; // bool | Specifies whether or not to draw an output video that can be downloaded afterwards. The _Encoded_ schema will be available in the response.
$checkRate = 0; // int | The milliseconds between each AI check. E.g. The AI will check 1 frame per second when checkRate is set to '1000'.

try {
    $apiInstance->checkVideo($configId, $url, $callback, $detail, $imageEncode, $checkRate);
} catch (Exception $e) {
    echo 'Exception when calling AICheckOperationsApi->checkVideo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **configId** | **string**| The configuration id from the Basic Configuration operations. | |
| **url** | **string**| The url to the video that needs to be checked. | |
| **callback** | [**\Irisnet\API\Client\Model\Callback**](../Model/Callback.md)|  | |
| **detail** | **int**| Set the detail level of the response.  * _1_ - The response only contains the _Summary_ and possibly the _Encoded_ schemas for basic information&#39;s (better API performance). * _2_ - Additionally lists all broken rules (_BrokenRule_ schema) according to the configuration parameters that were requested. * _3_ - Also shows events (_Event_ schema) that contains extended features to each found object. | [optional] [default to 1] |
| **imageEncode** | **bool**| Specifies whether or not to draw an output video that can be downloaded afterwards. The _Encoded_ schema will be available in the response. | [optional] [default to false] |
| **checkRate** | **int**| The milliseconds between each AI check. E.g. The AI will check 1 frame per second when checkRate is set to &#39;1000&#39;. | [optional] [default to 0] |

### Return type

void (empty response body)

### Authorization

[LICENSE-KEY](../../README.md#LICENSE-KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
