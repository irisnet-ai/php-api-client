# # BiometricCheckRequestData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**callback** | [**\Irisnet\API\Client\Model\Callback**](Callback.md) |  |
**frontImage** | **string** | The base64-encoded front image of the document to be checked in either jpg or png file format. | [optional]
**selfieImage** | **string** | The base64-encoded selfie image to be checked in either jpg or png file format. |
**minimumAcceptedAge** | **int** | The minimum age in years accepted for a DocumentCheck, if applicable. Defaults to 18 if not specified. | [optional]
**documentHolderId** | **string** | The documentHolderId from a previous successful DocumentCheck. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
