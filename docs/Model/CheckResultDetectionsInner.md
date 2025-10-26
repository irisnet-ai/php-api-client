# # CheckResultDetectionsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Used as a type discriminator for json to object conversion. | [optional]
**classification** | **string** | The classification of the recognized object. | [optional]
**group** | **string** | The group of the classification. | [optional]
**id** | **int** | The id of the detection object. | [optional]
**probability** | **int** | The probability that the object found matches the classification. | [optional]
**coordinates** | [**\Irisnet\API\Client\Model\Coordinates**](Coordinates.md) |  | [optional]
**attributes** | [**\Irisnet\API\Client\Model\Attribute[]**](Attribute.md) | Attributes characterizing the text. | [optional]
**subDetections** | [**\Irisnet\API\Client\Model\BaseDetection[]**](BaseDetection.md) | A set of sub-detection for text moderation. | [optional]
**checkId** | **string** | The id of the check that lead to the detection | [optional]
**hasOfficialDocument** | **bool** | Indicates whether the identified document is official | [optional]
**comparable** | **bool** | Indicates whether the provided selfie-image is comparable to the document | [optional]
**faceSimilarity** | **int** | Indicates the similarity-level of whether two faces belong to the same person | [optional]
**faceLivenessCheckScore** | **int** | Indicates the liveness score of the selfie image | [optional]
**documentFrontLivenessScore** | **int** | Indicates the liveness score of the front side image of the document | [optional]
**documentBackLivenessScore** | **int** | Indicates the liveness score of the back side image of the document | [optional]
**processedChecks** | [**\Irisnet\API\Client\Model\PoaDocumentSubChecks**](PoaDocumentSubChecks.md) | The sub-checks that were processed | [optional]
**documentHolderId** | **string** | The id of the documentHolder | [optional]
**knownFaces** | [**\Irisnet\API\Client\Model\KnownFace[]**](KnownFace.md) | A list of known faces, describing which other documentHolders match this documentHolder with a certain similarity | [optional]
**content** | **string** | The text that was detected | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
