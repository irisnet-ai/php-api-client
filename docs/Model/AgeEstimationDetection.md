# # AgeEstimationDetection

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**checkId** | **string** | The id of the check that lead to the detection | [optional]
**faceSimilarity** | **int** | Indicates the similarity-level of whether two faces belong to the same person | [optional]
**faceLivenessCheckScore** | **int** | Indicates the liveness score of the selfie image | [optional]
**processedChecks** | [**\Irisnet\API\Client\Model\AgeEstimationSubChecks**](AgeEstimationSubChecks.md) |  | [optional]
**attributes** | [**\Irisnet\API\Client\Model\AgeEstimationAttribute[]**](AgeEstimationAttribute.md) | Attributes of the _idDocument_ detection. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
