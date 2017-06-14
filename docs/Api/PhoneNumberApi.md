# DataMill\PhoneNumberApi

All URIs are relative to *https://api-beta.methis.at*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkMobilePhone**](PhoneNumberApi.md#checkMobilePhone) | **POST** /phone/mobile/check | Verify mobile phone number
[**formatPhoneNumber**](PhoneNumberApi.md#formatPhoneNumber) | **POST** /phone/format | Parse, format and validate phone numbers
[**getPhoneCountryCode**](PhoneNumberApi.md#getPhoneCountryCode) | **POST** /phone/countrycode/get | International and national dial prefix


# **checkMobilePhone**
> \DataMill\PhoneMobileCheckResponse checkMobilePhone($phonenumber, $countrycode)

Verify mobile phone number

Real time validation of mobile numbers without triggering a call of send a text message.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APISecurity
DataMill\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
DataMill\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new DataMill\Api\PhoneNumberApi();
$phonenumber = "phonenumber_example"; // string | Mobile phone number to be verified.
$countrycode = "countrycode_example"; // string | ISO 3166-1 alpha-2 country code e.g. 'US'. Please see https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2 for further information.

try {
    $result = $api_instance->checkMobilePhone($phonenumber, $countrycode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneNumberApi->checkMobilePhone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phonenumber** | **string**| Mobile phone number to be verified. |
 **countrycode** | **string**| ISO 3166-1 alpha-2 country code e.g. &#39;US&#39;. Please see https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2 for further information. |

### Return type

[**\DataMill\PhoneMobileCheckResponse**](../Model/PhoneMobileCheckResponse.md)

### Authorization

[APISecurity](../../README.md#APISecurity)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **formatPhoneNumber**
> \DataMill\PhoneFormatResponse formatPhoneNumber($phonenumber, $countrycode, $format, $direct_dialing_delimiter, $allowed_delimiters)

Parse, format and validate phone numbers

Validates a given phone number and converts it to the canonical form. In addition the type of the phone number is determined (e.g. \"fixed line\", \"mobile\", ...). The number is not checked for existence.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APISecurity
DataMill\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
DataMill\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new DataMill\Api\PhoneNumberApi();
$phonenumber = "phonenumber_example"; // string | Phone number to be formatted and validated
$countrycode = "countrycode_example"; // string | ISO 3166-1 alpha-2 country code e.g. 'US'. Please see https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2 for further information.
$format = "format_example"; // string | The custom format of the returning phone number if valid. The format is a combination of the following placeholders:  * **{countrycode}**: The international dial prefix for the country without leading zero or the \\\"+\\\" sign  * **{nationalcode}**: The regional dial prefix  * **{phonenumber}**: The phone number including the extension and without the international and regional prefix  * **{national_prefix}**: The national dial prefix including the leading zero  * **{international_prefix}**: The international dial prefix including leading zeros.  If no custom format is specified the following combination is used: **+{countrycode} {nationalcode} {phonenumber}** (canonical format)
$direct_dialing_delimiter = "direct_dialing_delimiter_example"; // string | Optional define a special character (e.g. -) as delimiter between the phone number and the extension.
$allowed_delimiters = "allowed_delimiters_example"; // string | Optional collection of characters inside the specified phone number which are allowed for delimiter. The collection must be provided as **JSON** formatted string.

try {
    $result = $api_instance->formatPhoneNumber($phonenumber, $countrycode, $format, $direct_dialing_delimiter, $allowed_delimiters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneNumberApi->formatPhoneNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phonenumber** | **string**| Phone number to be formatted and validated |
 **countrycode** | **string**| ISO 3166-1 alpha-2 country code e.g. &#39;US&#39;. Please see https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2 for further information. |
 **format** | **string**| The custom format of the returning phone number if valid. The format is a combination of the following placeholders:  * **{countrycode}**: The international dial prefix for the country without leading zero or the \\\&quot;+\\\&quot; sign  * **{nationalcode}**: The regional dial prefix  * **{phonenumber}**: The phone number including the extension and without the international and regional prefix  * **{national_prefix}**: The national dial prefix including the leading zero  * **{international_prefix}**: The international dial prefix including leading zeros.  If no custom format is specified the following combination is used: **+{countrycode} {nationalcode} {phonenumber}** (canonical format) | [optional]
 **direct_dialing_delimiter** | **string**| Optional define a special character (e.g. -) as delimiter between the phone number and the extension. | [optional]
 **allowed_delimiters** | **string**| Optional collection of characters inside the specified phone number which are allowed for delimiter. The collection must be provided as **JSON** formatted string. | [optional]

### Return type

[**\DataMill\PhoneFormatResponse**](../Model/PhoneFormatResponse.md)

### Authorization

[APISecurity](../../README.md#APISecurity)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPhoneCountryCode**
> \DataMill\PhoneCountryCodeGetResponse getPhoneCountryCode($countrycode)

International and national dial prefix

Resolves the national and international dial prefix for a country specified by the given ISO country code.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APISecurity
DataMill\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
DataMill\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new DataMill\Api\PhoneNumberApi();
$countrycode = "countrycode_example"; // string | ISO 3166-1 alpha-2 country code e.g. 'US'. Please see https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2 for further information.

try {
    $result = $api_instance->getPhoneCountryCode($countrycode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneNumberApi->getPhoneCountryCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **countrycode** | **string**| ISO 3166-1 alpha-2 country code e.g. &#39;US&#39;. Please see https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2 for further information. |

### Return type

[**\DataMill\PhoneCountryCodeGetResponse**](../Model/PhoneCountryCodeGetResponse.md)

### Authorization

[APISecurity](../../README.md#APISecurity)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

