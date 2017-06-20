# DataMill\ConvertApi

All URIs are relative to *https://api.methis.at*

Method | HTTP request | Description
------------- | ------------- | -------------
[**convertCapitalFirst**](ConvertApi.md#convertCapitalFirst) | **POST** /convert/capitalfirst | Convert any string to capitalize words
[**convertLowerCase**](ConvertApi.md#convertLowerCase) | **POST** /convert/lowercase | Convert any string to lower case
[**convertUpperCase**](ConvertApi.md#convertUpperCase) | **POST** /convert/uppercase | Convert any string to upper case
[**convertWrap**](ConvertApi.md#convertWrap) | **POST** /convert/wrap | Wrap text
[**getPhoneticCode**](ConvertApi.md#getPhoneticCode) | **POST** /phonetic/code/get | Calculate phonetic codes of a given text


# **convertCapitalFirst**
> \DataMill\ConvertCapitalFirstResponse convertCapitalFirst($text)

Convert any string to capitalize words

Changes any word of a given text so that the first letter is capitalized and all the others turned into lower case. Special proper names, like \"DiCaprio\" are detected and ignored.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APISecurity
DataMill\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
DataMill\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new DataMill\Api\ConvertApi();
$text = "text_example"; // string | Free-form text to be converted.

try {
    $result = $api_instance->convertCapitalFirst($text);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConvertApi->convertCapitalFirst: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **text** | **string**| Free-form text to be converted. |

### Return type

[**\DataMill\ConvertCapitalFirstResponse**](../Model/ConvertCapitalFirstResponse.md)

### Authorization

[APISecurity](../../README.md#APISecurity)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **convertLowerCase**
> \DataMill\ConvertLowerCaseResponse convertLowerCase($text)

Convert any string to lower case

Converts all letters of any word in a given string in the respective lowercase.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APISecurity
DataMill\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
DataMill\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new DataMill\Api\ConvertApi();
$text = "text_example"; // string | Free-form text to be converted.

try {
    $result = $api_instance->convertLowerCase($text);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConvertApi->convertLowerCase: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **text** | **string**| Free-form text to be converted. |

### Return type

[**\DataMill\ConvertLowerCaseResponse**](../Model/ConvertLowerCaseResponse.md)

### Authorization

[APISecurity](../../README.md#APISecurity)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **convertUpperCase**
> \DataMill\ConvertUpperCaseResponse convertUpperCase($text)

Convert any string to upper case

Converts all letters of any word in a given string in the respective capital.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APISecurity
DataMill\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
DataMill\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new DataMill\Api\ConvertApi();
$text = "text_example"; // string | Free-form text to be converted.

try {
    $result = $api_instance->convertUpperCase($text);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConvertApi->convertUpperCase: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **text** | **string**| Free-form text to be converted. |

### Return type

[**\DataMill\ConvertUpperCaseResponse**](../Model/ConvertUpperCaseResponse.md)

### Authorization

[APISecurity](../../README.md#APISecurity)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **convertWrap**
> \DataMill\ConvertWrapResponse convertWrap($text, $limit, $mode, $linebreak)

Wrap text

Breaks a text into multiple newlines. Each line will be separated by a \\r (CR, ASCII 13) and \\n (LF, ASCII 10) character. The number of characters a line break will be inserted after can be justified.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APISecurity
DataMill\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
DataMill\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new DataMill\Api\ConvertApi();
$text = "text_example"; // string | Fre-form text to be wrapped.
$limit = 56; // int | The number of characters a linefeed will be inserted after (maximum character length per line).
$mode = "mode_example"; // string | The mode how the linefeed will be inserted. Either before (default) the current word, after the current word or exactly after the character. Possible values are **before** to break before last word, **after** to break after last word, **exact** to break at limit.
$linebreak = "linebreak_example"; // string | Defines which line separator should be used. Possible values are **full** for *\\r\\n*, **single** for *\\n*, **html** for *&lt;br&gt;*

try {
    $result = $api_instance->convertWrap($text, $limit, $mode, $linebreak);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConvertApi->convertWrap: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **text** | **string**| Fre-form text to be wrapped. |
 **limit** | **int**| The number of characters a linefeed will be inserted after (maximum character length per line). |
 **mode** | **string**| The mode how the linefeed will be inserted. Either before (default) the current word, after the current word or exactly after the character. Possible values are **before** to break before last word, **after** to break after last word, **exact** to break at limit. | [optional]
 **linebreak** | **string**| Defines which line separator should be used. Possible values are **full** for *\\r\\n*, **single** for *\\n*, **html** for *&amp;lt;br&amp;gt;* | [optional]

### Return type

[**\DataMill\ConvertWrapResponse**](../Model/ConvertWrapResponse.md)

### Authorization

[APISecurity](../../README.md#APISecurity)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPhoneticCode**
> \DataMill\PhoneticCodeGetResponse getPhoneticCode($text, $phonetic_algorithm)

Calculate phonetic codes of a given text

Get the phonetic code of a given text. Currently three phonetic algorithms are available:  * **Soundex** (algorithm code 1)  * **Colcogne Phonetic** (algorithm code 2)  * **Metaphon** (algorithm code 3)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APISecurity
DataMill\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
DataMill\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new DataMill\Api\ConvertApi();
$text = "text_example"; // string | The text which should be converted. Each word will be converted separatly and generate a single entry in the result.
$phonetic_algorithm = 56; // int | The phonetic algorithm which should be applied. If no algorithm code will be provided **Soundex** will be used. Codes:  * 1 = Soundex  * 2 = Colcogne Phonetic  * 3 = Metaphon

try {
    $result = $api_instance->getPhoneticCode($text, $phonetic_algorithm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConvertApi->getPhoneticCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **text** | **string**| The text which should be converted. Each word will be converted separatly and generate a single entry in the result. |
 **phonetic_algorithm** | **int**| The phonetic algorithm which should be applied. If no algorithm code will be provided **Soundex** will be used. Codes:  * 1 &#x3D; Soundex  * 2 &#x3D; Colcogne Phonetic  * 3 &#x3D; Metaphon | [optional]

### Return type

[**\DataMill\PhoneticCodeGetResponse**](../Model/PhoneticCodeGetResponse.md)

### Authorization

[APISecurity](../../README.md#APISecurity)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

