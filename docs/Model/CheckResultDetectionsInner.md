# # CheckResultDetectionsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**classification** | **string** | The classification of the recognized object. | [optional]
**group** | **string** | The group of the classification. | [optional]
**id** | **int** | The id of the detection object. | [optional]
**probability** | **int** | The probability that the object found matches the classification. | [optional]
**coordinates** | [**\Irisnet\API\Client\Model\Coordinates**](Coordinates.md) |  | [optional]
**type** | **string** | Used as a type discriminator for json to object conversion. | [optional]
**attributes** | [**\Irisnet\API\Client\Model\HairAttribute[]**](HairAttribute.md) | Contains attributes for the _hair_ classification. | [optional]
**subDetections** | [**\Irisnet\API\Client\Model\BaseDetection[]**](BaseDetection.md) | A set of sub-detection that are particular to the _face_ detection. Mainly contains detections that were activated with the _attributesCheck_ prototype. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
