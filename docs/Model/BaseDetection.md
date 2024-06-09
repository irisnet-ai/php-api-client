# # BaseDetection

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** |  |
**attributes** | [**\Irisnet\API\Client\Model\IdDocumentAttribute[]**](IdDocumentAttribute.md) | Attributes of the _idDocument_ detection. | [optional]
**checkId** | **string** | The id of the check that lead to the detection | [optional]
**hasOfficialDocument** | **bool** | Indicates whether the identified document is official | [optional]
**comparable** | **bool** | Indicates whether the provided selfie-image is comparable to the document | [optional]
**faceSimilarity** | **int** | Indicates the similarity-level of whether two faces belong to the same person | [optional]
**faceLivenessCheckScore** | **int** | Indicates the liveness score of the selfie image | [optional]
**documentFrontLivenessScore** | **int** | Indicates the liveness score of the front side image of the document | [optional]
**documentBackLivenessScore** | **int** | Indicates the liveness score of the back side image of the document | [optional]
**processedChecks** | [**\Irisnet\API\Client\Model\IdDocumentSubChecks**](IdDocumentSubChecks.md) |  | [optional]
**documentHolderId** | **string** | The id of the documentHolder | [optional]
**subDetections** | [**\Irisnet\API\Client\Model\BaseDetection[]**](BaseDetection.md) | A set of sub-detection that are particular to the _face_ detection. Mainly contains detections that were activated with the _attributesCheck_ prototype. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
