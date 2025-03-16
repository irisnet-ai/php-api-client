# # AgeVerificationDetection

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**classification** | **string** | The classification of the recognized object. | [optional]
**group** | **string** | The group of the classification. | [optional]
**id** | **int** | The id of the detection object. | [optional]
**probability** | **int** | The probability that the object found matches the classification. | [optional]
**coordinates** | [**\Irisnet\API\Client\Model\Coordinates**](Coordinates.md) |  | [optional]
**checkId** | **string** | The id of the check that lead to the detection | [optional]
**faceSimilarity** | **int** | Indicates the similarity-level of whether two faces belong to the same person | [optional]
**faceLivenessCheckScore** | **int** | Indicates the liveness score of the selfie image | [optional]
**processedChecks** | [**\Irisnet\API\Client\Model\AgeVerificationSubChecks**](AgeVerificationSubChecks.md) |  | [optional]
**attributes** | [**\Irisnet\API\Client\Model\AgeVerificationAttribute[]**](AgeVerificationAttribute.md) | Attributes of the _ageVerification_ detection. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
