# # TextDetection

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**classification** | **string** | The classification of the recognized object. | [optional]
**group** | **string** | The group of the classification. | [optional]
**id** | **int** | The id of the detection object. | [optional]
**probability** | **int** | The probability that the object found matches the classification. | [optional]
**coordinates** | [**\Irisnet\API\Client\Model\Coordinates**](Coordinates.md) |  | [optional]
**content** | **string** | The text that was detected | [optional]
**attributes** | [**\Irisnet\API\Client\Model\Attribute[]**](Attribute.md) | Attributes characterizing the text. | [optional]
**subDetections** | [**\Irisnet\API\Client\Model\BaseDetection[]**](BaseDetection.md) | A set of sub-detection for text moderation. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
