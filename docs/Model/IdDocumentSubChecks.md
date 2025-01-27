# # IdDocumentSubChecks

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**mrzChecksum** | **string** | Indicates whether the MRZ checksum is correct | [optional]
**mrzFormat** | **string** | Indicates whether the MRZ format is correct | [optional]
**mrzConsistency** | **string** | Indicates whether the MRZ is consistent with the document type | [optional]
**expirationDate** | **string** | Indicates whether the expirationDate is valid | [optional]
**securityElements** | **string** | Indicates whether the document&#39;s security elements are valid | [optional]
**photoLocation** | **string** | Indicates whether the photo is in the correct location for a given document type | [optional]
**blacklistCheck** | **string** | Indicates whether a competent authority deny-listed the ID document | [optional]
**photocopyCheck** | **string** | Indicates whether the document is a photocopy | [optional]
**specimenCheck** | **string** | Indicates whether the document has been copied from the Internet | [optional]
**documentModelIdentification** | **string** | Indicates whether the document model has been identified and whether or not the document conforms to official specifications | [optional]
**documentLivenessCheck** | **string** | Indicates if the document image is genuine and not a photo of an image or of a screen | [optional]
**dataIntegrityCheck** | **string** | Indicates whether the data fields contain the correct type of content | [optional]
**dataConsistencyCheck** | **string** | Indicates whether the information on both sides of the document is consistent | [optional]
**ageValidationCheck** | **string** | Indicates if the extracted age is greater than or equal to a predefined minimum accepted age | [optional]
**spoofedImageAnalysis** | **string** | Indicates whether the selfie image is spoofed, copied from the Internet, or is a known deny-listed image | [optional]
**faceLivenessCheck** | **string** | Indicates if the selfie image is genuine and not a photo of an image or of a screen | [optional]
**voiceChallengeCheck** | **string** | Indicates if the enduser had answered correctly during the voice challenge. | [optional]
**actionChallengeCheck** | **string** | Indicates if the enduser had moved correctly during the actions challenge. | [optional]
**knownFacesCheck** | **string** | Indicates if the selfie image matches an aready existing client/customer | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
