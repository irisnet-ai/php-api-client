# # IrisNet

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**rulesBroken** | **int** | The amount of broken rules that are contained in the source media. | [optional] 
**helpSuggested** | **int** | In cases where the AI is uncertain, this attribute is set (1), indication that it could be useful to double check the source media by a human. | [optional] 
**getnClasses** | **int** | The amount of classification objects that were checked against on the source media. This does not mean that all of the classifications were found. | [optional] 
**getnObjects** | **int** | The amount of objects that were recognized on the source image. | [optional] 
**inRule** | [**\Irisnet\API\Client\Model\INRule[]**](INRule.md) | This list contains one rule per classification. Rules for classification objects that were not found, are omitted. | [optional] 
**inObject** | [**\Irisnet\API\Client\Model\INObject[]**](INObject.md) | A list of all instances of the classification objects found on the source image. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


