# Irisnet\API\Client\AICheckOperationsApi

All URIs are relative to https://api.irisnet.de, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**checkIdDocument()**](AICheckOperationsApi.md#checkIdDocument) | **POST** /v2/check-id-document/{configId} | Check an id document with the AI. |
| [**checkImage()**](AICheckOperationsApi.md#checkImage) | **POST** /v2/check-image/{configId} | Check an image with the AI. |
| [**checkStream()**](AICheckOperationsApi.md#checkStream) | **POST** /v2/check-stream/{configId} | Check a stream with the AI. |
| [**checkVideo()**](AICheckOperationsApi.md#checkVideo) | **POST** /v2/check-video/{configId} | Check a video with the AI. |
| [**liveDocumentCheck()**](AICheckOperationsApi.md#liveDocumentCheck) | **POST** /v2/check-live-id-document/{configId} | Start a guided live id document check with the AI. |


## `checkIdDocument()`

```php
checkIdDocument($configId, $documentCheckRequestData): \Irisnet\API\Client\Model\CheckResult
```

Check an id document with the AI.

The response (_CheckResult_ schema) containing only the checkId and possibly ApiNotices is returned immediately after the request. The actual body (_CheckResult_ schema) is sent to the _callbackUrl_ after the AI has finished processing.

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
$documentCheckRequestData = {"callback":{"callbackUrl":"https://www.example.com/callback?idcheck"},"documentCountry":"DE","documentType":"national_identity_card","frontImage":"/9j/4AAQSkZJRgABAQEASABIAAD...","backImage":"/9j/4AAQSkZJRgABAQEASABIAAD...","selfieImage":"/9j/4AAQSkZJRgABAQEASABIAAD..."}; // \Irisnet\API\Client\Model\DocumentCheckRequestData | The DocumentCheckRequestData containing data needed for the id document check.

try {
    $result = $apiInstance->checkIdDocument($configId, $documentCheckRequestData);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AICheckOperationsApi->checkIdDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **configId** | **string**| The configuration id from the Basic Configuration operations. | |
| **documentCheckRequestData** | [**\Irisnet\API\Client\Model\DocumentCheckRequestData**](../Model/DocumentCheckRequestData.md)| The DocumentCheckRequestData containing data needed for the id document check. | |

### Return type

[**\Irisnet\API\Client\Model\CheckResult**](../Model/CheckResult.md)

### Authorization

[LICENSE-KEY](../../README.md#LICENSE-KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `checkImage()`

```php
checkImage($configId, $url, $detail, $imageEncode, $data): \Irisnet\API\Client\Model\CheckResult
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
$url = 'url_example'; // string | <s>The url to the image that needs to be checked.</s> Deprecated: Use request body instead. <b>This parameter will be removed in future releases.</b>
$detail = 1; // int | Set the detail level of the response.  * _1_ - The response only contains the _Summary_ and possibly the _Encoded_ schemas for basic information's (better API performance). * _2_ - Additionally lists all broken rules (_BrokenRule_ schema) according to the configuration parameters that were requested. * _3_ - Also shows detections (e.g. _BaseDetection_ schema) that contains extended features to each found object.
$imageEncode = false; // bool | Specifies whether or not to draw an output image that will be delivered in the response body as base64 encoded string. The _Encoded_ schema will be available in the response.
$data = {"data":"https://example.com/path/to/your/image.png"}; // \Irisnet\API\Client\Model\Data | The http(s) url or base64 encoded body uri of the image that needs to be checked.

try {
    $result = $apiInstance->checkImage($configId, $url, $detail, $imageEncode, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AICheckOperationsApi->checkImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **configId** | **string**| The configuration id from the Basic Configuration operations. | |
| **url** | **string**| &lt;s&gt;The url to the image that needs to be checked.&lt;/s&gt; Deprecated: Use request body instead. &lt;b&gt;This parameter will be removed in future releases.&lt;/b&gt; | [optional] |
| **detail** | **int**| Set the detail level of the response.  * _1_ - The response only contains the _Summary_ and possibly the _Encoded_ schemas for basic information&#39;s (better API performance). * _2_ - Additionally lists all broken rules (_BrokenRule_ schema) according to the configuration parameters that were requested. * _3_ - Also shows detections (e.g. _BaseDetection_ schema) that contains extended features to each found object. | [optional] [default to 1] |
| **imageEncode** | **bool**| Specifies whether or not to draw an output image that will be delivered in the response body as base64 encoded string. The _Encoded_ schema will be available in the response. | [optional] [default to false] |
| **data** | [**\Irisnet\API\Client\Model\Data**](../Model/Data.md)| The http(s) url or base64 encoded body uri of the image that needs to be checked. | [optional] |

### Return type

[**\Irisnet\API\Client\Model\CheckResult**](../Model/CheckResult.md)

### Authorization

[LICENSE-KEY](../../README.md#LICENSE-KEY)

### HTTP request headers

- **Content-Type**: `application/json`
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
$callback = {"callbackUrl":"http://www.example.com/callback?video","headers":{"Authorization":"Basic Rm9yemEgTmFwb2xpLCBzZW1wcmUh"}}; // \Irisnet\API\Client\Model\Callback
$detail = 1; // int | Set the detail level of the response.  * _1_ - The response only contains the _Summary_ and possibly the _Encoded_ schemas for basic information's (better API performance). * _2_ - Additionally lists all broken rules (_BrokenRule_ schema) according to the configuration parameters that were requested. * _3_ - Also shows events (_Event_ schema) that contains extended features to each found object.
$imageEncode = false; // bool | Specifies whether or not to draw an output video that can be downloaded afterwards. The output video format will be MP4 containing H.264 encoding independent of the input format. The _Encoded_ schema will be available in the response.
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
| **imageEncode** | **bool**| Specifies whether or not to draw an output video that can be downloaded afterwards. The output video format will be MP4 containing H.264 encoding independent of the input format. The _Encoded_ schema will be available in the response. | [optional] [default to false] |
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

## `liveDocumentCheck()`

```php
liveDocumentCheck($configId, $liveDocumentCheckRequestData): \Irisnet\API\Client\Model\LiveDocumentCheckResponseData
```

Start a guided live id document check with the AI.

The synchronous response (_LiveDocumentCheckResponseData_ schema) contains an eventId, possibly a token and an URL to send the enduser to. The actual result (_CheckResult_ schema) of the document check is sent to the provided _callbackUrl_ after the AI has finished processing.

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
$liveDocumentCheckRequestData = {"callback":{"callbackUrl":"https://www.example.com/callback?liveident"},"endUserRedirectUrl":"https://www.example.com/user"}; // \Irisnet\API\Client\Model\LiveDocumentCheckRequestData | The LiveDocumentCheckRequestData containing data needed for the live id document check.

try {
    $result = $apiInstance->liveDocumentCheck($configId, $liveDocumentCheckRequestData);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AICheckOperationsApi->liveDocumentCheck: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **configId** | **string**| The configuration id from the Basic Configuration operations. | |
| **liveDocumentCheckRequestData** | [**\Irisnet\API\Client\Model\LiveDocumentCheckRequestData**](../Model/LiveDocumentCheckRequestData.md)| The LiveDocumentCheckRequestData containing data needed for the live id document check. | |

### Return type

[**\Irisnet\API\Client\Model\LiveDocumentCheckResponseData**](../Model/LiveDocumentCheckResponseData.md)

### Authorization

[LICENSE-KEY](../../README.md#LICENSE-KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
