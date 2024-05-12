# # IdDocumentAttribute

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Used as a type discriminator for json to object conversion. | [optional]
**documentType** | **string** | The type of the document | [optional]
**documentNumber** | **string** | The number of the document | [optional]
**isTwoSided** | **bool** | Indicates whether the document is two-sided | [optional]
**issuingAuthority** | **string** | The issuing authority | [optional]
**issuingDate** | **\DateTime** | The issuing date | [optional]
**issuingCountry** | **string** | The document&#39;s country in ISO 3166-1 alpha-2 format | [optional]
**expirationDate** | **\DateTime** | The expiration date | [optional]
**accessNumber** | **string** | The access number | [optional]
**firstNames** | **string[]** | The document holder&#39;s first name(s) | [optional]
**lastNames** | **string[]** | The document holder&#39;s last name(s) | [optional]
**birthName** | **string** | The document holder&#39;s birth name | [optional]
**dateOfBirth** | **\DateTime** | The document holder&#39;s date of birth | [optional]
**placeOfBirth** | **string** | The document holder&#39;s place of birth | [optional]
**nationality** | **string** | The document holder&#39;s nationality in ISO 3166-1 alpha-2 format | [optional]
**gender** | **string** | The document holder&#39;s gender | [optional]
**height** | **string** | The document holder&#39;s height | [optional]
**address** | **string** | The document holder&#39;s address | [optional]
**machineReadableZone** | **string[]** | The document&#39;s machine readable zone (MRZ), at most 3 lines | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
