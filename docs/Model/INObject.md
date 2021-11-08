# # INObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**inClass** | **string** | The classification of the recognized object. | [optional]
**inGroup** | **string** | The group of the classification. | [optional]
**inId** | **string** | The group of the classification. | [optional]
**color** | **string** | The color of the object, e.g. the color of the hair. Is only available for certain classification objects. See list below:  * _hair_ - black, brown, blonde, grey, red, other | [optional]
**style** | **string** | The style attribute of the object, e.g. the style of the hair. Is only available for certain classification objects. See list below:  * _hair_ - longHaired, shortHaired | [optional]
**x0** | **float** | The center of the rectangle in the horizontal (x) direction. | [optional]
**y0** | **float** | The center of the rectangle in the vertical (y) direction. | [optional]
**width** | **float** | The total width of the rectangle in the horizontal (x) direction. Use _x0 - width / 2_ and _x0 + width / 2_ to get the left and right edges of the rectangle. | [optional]
**height** | **float** | The total height of the rectangle in the vertical (y) direction. Use _y0 - height / 2_ and _y0 + height / 2_ to get the top and bottom edges of the rectangle. | [optional]
**probability** | **int** | The probability that the object found matches the classification. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
