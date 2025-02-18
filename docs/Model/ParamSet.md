# # ParamSet

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**thresh** | **float** | Threshold when an object can be recognized. Lowering the value will increase the probability of recognizing objects. A threshold of 0.5 would mean, that 50% of an object like a face must be visible, to be detected.Setting the value too low however, can cause false positives. | [optional] [default to 0.5]
**grey** | **int** | A grey scale color to use for frame or masking. &#39;0&#39; will represent black, while the maximum &#39;255&#39; will be white. | [optional] [default to 127]
**minDuration** | **int** | Set the overall minimum duration in milliseconds for a rule to be broken in moving images. | [optional] [default to 100]
**abortOnSeverity** | **int** | Set a severity on which to automatically stop the check operation. Works with moving images.Use &#39;-1&#39; to ignore this option. | [optional] [default to -1]
**params** | [**\Irisnet\API\Client\Model\Param[]**](Param.md) | A list of parameter sets that describe the rules of the objects. | [optional]
**kycUiParameters** | [**\Irisnet\API\Client\Model\KycUiParameter**](KycUiParameter.md) |  | [optional]
**kycDocumentCountryDenyList** | **string** | A comma separated list of country codes (ISO 3166-1 alpha-2) for which id-documents should be rejected. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
