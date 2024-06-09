# # IdDocumentDetection

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**checkId** | **string** | The id of the check that lead to the detection | [optional]
**hasOfficialDocument** | **bool** | Indicates whether the identified document is official | [optional]
**comparable** | **bool** | Indicates whether the provided selfie-image is comparable to the document | [optional]
**faceSimilarity** | **int** | Indicates the similarity-level of whether two faces belong to the same person | [optional]
**faceLivenessCheckScore** | **int** | Indicates the liveness score of the selfie image | [optional]
**documentFrontLivenessScore** | **int** | Indicates the liveness score of the front side image of the document | [optional]
**documentBackLivenessScore** | **int** | Indicates the liveness score of the back side image of the document | [optional]
**processedChecks** | [**\Irisnet\API\Client\Model\IdDocumentSubChecks**](IdDocumentSubChecks.md) |  | [optional]
**attributes** | [**\Irisnet\API\Client\Model\IdDocumentAttribute[]**](IdDocumentAttribute.md) | Attributes of the _idDocument_ detection. | [optional]
**documentHolderId** | **string** | The id of the documentHolder | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
