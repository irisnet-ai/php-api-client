# # DocumentCheckRequestData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**callback** | [**\Irisnet\API\Client\Model\Callback**](Callback.md) |  |
**frontImage** | **string** | The base64-encoded front image of the document to be checked in either jpg or png file format. |
**backImage** | **string** | The base64-encoded back image of the document to be checked in either jpg or png file format. | [optional]
**selfieImage** | **string** | The base64-encoded selfie image to be checked in either jpg or png file format. | [optional]
**minimumAcceptedAge** | **int** | The minimum age in years accepted for a DocumentCheck, if applicable. Defaults to 18 if not specified. | [optional]
**documentType** | **string** | The type of the document | [optional]
**documentCountry** | **string** | The country of the document in ISO 3166-1 alpha-2 format. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
