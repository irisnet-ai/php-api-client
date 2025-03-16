# # LiveDocumentCheckRequestData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**callback** | [**\Irisnet\API\Client\Model\Callback**](Callback.md) |  |
**statusUrl** | **string** | The URL to send the intermediate status requests to. If not set, no intermediate status requests will be sent. | [optional]
**endUserRedirectUrl** | **string** | If set the enduser is being redirected to this URL after the check is finished. | [optional]
**tokenValidityInSeconds** | **int** | The validity duration of a started ident process in seconds. Defaults to 3600 seconds &#x3D; 60 minutes. | [optional]
**documentHolderId** | **string** | The documentHolderId from a previous successful live identification | [optional]
**minimumAcceptedAge** | **int** | The minimum accepted age in years for a check. Defaults to 18 if not provided | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
