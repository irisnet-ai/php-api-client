# # Summary

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | A simple status string that can be either _accept_ or _reject_. | [optional]
**brokenRulesCount** | **int** | The amount of broken rules that are contained in the source media. | [optional]
**helpSuggested** | **int** | In cases where the AI is uncertain, this attribute is set (1), indication that it could be useful to double check the source media by a human. | [optional]
**severity** | **int** | The highest severity value found amongst the broken rules. | [optional]
**creditsConsumed** | **int** | The amount of credits that was consumed for the check. | [optional]
**tags** | **string[]** | A list of classification names that were found. | [optional]
**rejectTags** | **string[]** | A list of classification names that caused a rule to be broken. | [optional]
**rejectReasons** | **string[]** | The names of the classification groups that caused a rule to be broken. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
