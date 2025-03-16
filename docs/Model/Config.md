# # Config

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier for the AI configuration. Use this for any check operation to tell the AI how to behave. | [optional]
**name** | **string** | The name of the AI configuration. | [optional]
**kycCheckParameters** | **string[]** | Configures your kyc checks. You can combine certain parameters to customize a single check operation. | [optional]
**prototypes** | **string[]** | Configures your detection. As there are literally hundreds of parameters, prototypes can be used to get useful behaviour. This includes a default setting for parameters and rules that should be applied to the check operations. You can use multiple prototypes for a single check operation. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
