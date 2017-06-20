# DataMill\DataMillApi

All URIs are relative to *https://api.methis.at*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkBIC**](DataMillApi.md#checkBIC) | **POST** /bic/check | Check BIC for spelling
[**checkEmailDomain**](DataMillApi.md#checkEmailDomain) | **POST** /email/domain/check | Check email syntax and mail server domain
[**checkEmailMailbox**](DataMillApi.md#checkEmailMailbox) | **POST** /email/extended/check | Check email syntax, mail server domain and mailbox itself
[**checkEmailSyntax**](DataMillApi.md#checkEmailSyntax) | **POST** /email/syntax/check | Check email syntax
[**checkIBAN**](DataMillApi.md#checkIBAN) | **POST** /iban/check | Check IBAN for spelling
[**checkMobilePhone**](DataMillApi.md#checkMobilePhone) | **POST** /phone/mobile/check | Verify mobile phone number
[**checkUrl**](DataMillApi.md#checkUrl) | **POST** /url/check | Information about web resources
[**checkVAT**](DataMillApi.md#checkVAT) | **POST** /vat/check | Check vat number for correctness
[**convertCapitalFirst**](DataMillApi.md#convertCapitalFirst) | **POST** /convert/capitalfirst | Convert any string to capitalize words
[**convertLowerCase**](DataMillApi.md#convertLowerCase) | **POST** /convert/lowercase | Convert any string to lower case
[**convertUpperCase**](DataMillApi.md#convertUpperCase) | **POST** /convert/uppercase | Convert any string to upper case
[**convertWrap**](DataMillApi.md#convertWrap) | **POST** /convert/wrap | Wrap text
[**extractHouseNumber**](DataMillApi.md#extractHouseNumber) | **POST** /address/housenumber/extract | Try to extract house number from street information
[**formatPhoneNumber**](DataMillApi.md#formatPhoneNumber) | **POST** /phone/format | Parse, format and validate phone numbers
[**getDUNSRating**](DataMillApi.md#getDUNSRating) | **POST** /business-data/duns/rating | Get marketing information by DUNS number
[**getFirstNames**](DataMillApi.md#getFirstNames) | **POST** /firstname/get | Recognize and extract first names
[**getGender**](DataMillApi.md#getGender) | **POST** /gender/get | Recognize gender by first name
[**getGenderExtended**](DataMillApi.md#getGenderExtended) | **POST** /gender/extended/get | Recognize gender by first name (advanced)
[**getPhoneCountryCode**](DataMillApi.md#getPhoneCountryCode) | **POST** /phone/countrycode/get | International and national dial prefix
[**getPhoneticCode**](DataMillApi.md#getPhoneticCode) | **POST** /phonetic/code/get | Calculate phonetic codes of a given text
[**getSocialMediaActivities**](DataMillApi.md#getSocialMediaActivities) | **POST** /social-media/activities/get | Retrieve social media data by email address
[**locateAddress**](DataMillApi.md#locateAddress) | **POST** /address/locate | Reverse address lookup
[**resolveDUNS**](DataMillApi.md#resolveDUNS) | **POST** /business-data/duns/resolve | Resolve company information by DUNS number
[**resolveVAT**](DataMillApi.md#resolveVAT) | **POST** /vat/resolve | Try to resolve VAT number to company information
[**searchAddress**](DataMillApi.md#searchAddress) | **POST** /address/search | Lookup physical postal address
[**searchAddressMultiple**](DataMillApi.md#searchAddressMultiple) | **POST** /address/search/multiple | Address lookup with multiple possible results
[**searchDUNS**](DataMillApi.md#searchDUNS) | **POST** /business-data/duns/search | Find DUNS number and company information by name
[**searchUndeliverableContact**](DataMillApi.md#searchUndeliverableContact) | **POST** /business-data/undeliverable-contacts/search | Find moved and deceased contacts
[**searchVAT**](DataMillApi.md#searchVAT) | **POST** /vat/search | Find VAT number and company information by name


# **checkBIC**
> \DataMill\BicCheckResponse checkBIC($bic)

Check BIC for spelling

Checks the spelling of a given BIC (Business Identifier Code), also known as SWIFT code which is defined in the ISO 9362. The function does not verify if the BIC really exists, instead the format is checked for validity only.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APISecurity
DataMill\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
DataMill\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new DataMill\Api\DataMillApi();
$bic = "bic_example"; // string | BIC to be checked

try {
    $result = $api_instance->checkBIC($bic);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataMillApi->checkBIC: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bic** | **string**| BIC to be checked |

### Return type

[**\DataMill\BicCheckResponse**](../Model/BicCheckResponse.md)

### Authorization

[APISecurity](../../README.md#APISecurity)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkEmailDomain**
> \DataMill\EmailDomainCheckResponse checkEmailDomain($email)

Check email syntax and mail server domain

Checks the spelling of an email address to detect typos and spelling errors. In addition if the email address has a valid syntax its mail server is determined and checked for existence. The mail server itself will be compared with a list of disposable providers to detect addresses with a short lifetime.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APISecurity
DataMill\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
DataMill\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new DataMill\Api\DataMillApi();
$email = "email_example"; // string | The email address to be checked

try {
    $result = $api_instance->checkEmailDomain($email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataMillApi->checkEmailDomain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| The email address to be checked |

### Return type

[**\DataMill\EmailDomainCheckResponse**](../Model/EmailDomainCheckResponse.md)

### Authorization

[APISecurity](../../README.md#APISecurity)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkEmailMailbox**
> \DataMill\EmailExtendedCheckResponse checkEmailMailbox($email)

Check email syntax, mail server domain and mailbox itself

Checks the spelling of an email address to detect typos and spelling errors. If the email address has a valid syntax its mail server is determined and checked for existence. The mail server itself will be compared with a list of disposable providers to detect addresses with a short lifetime. Additionally the mail server will be checked if an email for the given mailbox can be received.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APISecurity
DataMill\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
DataMill\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new DataMill\Api\DataMillApi();
$email = "email_example"; // string | The email address to be checked

try {
    $result = $api_instance->checkEmailMailbox($email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataMillApi->checkEmailMailbox: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| The email address to be checked |

### Return type

[**\DataMill\EmailExtendedCheckResponse**](../Model/EmailExtendedCheckResponse.md)

### Authorization

[APISecurity](../../README.md#APISecurity)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkEmailSyntax**
> \DataMill\EmailSyntaxCheckResponse checkEmailSyntax($email)

Check email syntax

Checks the spelling of an email address to detect typos and spelling errors.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APISecurity
DataMill\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
DataMill\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new DataMill\Api\DataMillApi();
$email = "email_example"; // string | The email address to be checked

try {
    $result = $api_instance->checkEmailSyntax($email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataMillApi->checkEmailSyntax: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| The email address to be checked |

### Return type

[**\DataMill\EmailSyntaxCheckResponse**](../Model/EmailSyntaxCheckResponse.md)

### Authorization

[APISecurity](../../README.md#APISecurity)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkIBAN**
> \DataMill\IbanCheckResponse checkIBAN($iban)

Check IBAN for spelling

Checks the spelling, country code and checksum of an IBAN (International Bank Account Number). The IBAN is an internationally agreed system of identifying bank accounts across national borders. The function does not verify if the IBAN really exists, instead the format is checked for validity only.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APISecurity
DataMill\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
DataMill\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new DataMill\Api\DataMillApi();
$iban = "iban_example"; // string | IBAN to be checked.

try {
    $result = $api_instance->checkIBAN($iban);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataMillApi->checkIBAN: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **iban** | **string**| IBAN to be checked. |

### Return type

[**\DataMill\IbanCheckResponse**](../Model/IbanCheckResponse.md)

### Authorization

[APISecurity](../../README.md#APISecurity)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

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

$api_instance = new DataMill\Api\DataMillApi();
$phonenumber = "phonenumber_example"; // string | Mobile phone number to be verified.
$countrycode = "countrycode_example"; // string | ISO 3166-1 alpha-2 country code e.g. 'US'. Please see https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2 for further information.

try {
    $result = $api_instance->checkMobilePhone($phonenumber, $countrycode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataMillApi->checkMobilePhone: ', $e->getMessage(), PHP_EOL;
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

# **checkUrl**
> \DataMill\UrlCheckResponse checkUrl($url, $max_redirects)

Information about web resources

Fetches the resource of a given url and checks if it is available. Only websites using HTTP/HTTPS are allowed. IP addresses and ports other than 80/443 are not permitted and will be ignored.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APISecurity
DataMill\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
DataMill\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new DataMill\Api\DataMillApi();
$url = "url_example"; // string | The url to be checked (e.g. any website)
$max_redirects = "10"; // string | The maximum amount of redirects until the lookup for the root resource will be stopped (default **10**)

try {
    $result = $api_instance->checkUrl($url, $max_redirects);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataMillApi->checkUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **url** | **string**| The url to be checked (e.g. any website) |
 **max_redirects** | **string**| The maximum amount of redirects until the lookup for the root resource will be stopped (default **10**) | [optional] [default to 10]

### Return type

[**\DataMill\UrlCheckResponse**](../Model/UrlCheckResponse.md)

### Authorization

[APISecurity](../../README.md#APISecurity)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkVAT**
> \DataMill\VatCheckResponse checkVAT($vatnumber)

Check vat number for correctness

Checks if a given VAT (Value Added Tax) identification number is valid or not. Only VAT numbers of companies within the European Union can be verified.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APISecurity
DataMill\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
DataMill\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new DataMill\Api\DataMillApi();
$vatnumber = "vatnumber_example"; // string | The VAT number of a company within the European Union

try {
    $result = $api_instance->checkVAT($vatnumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataMillApi->checkVAT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vatnumber** | **string**| The VAT number of a company within the European Union |

### Return type

[**\DataMill\VatCheckResponse**](../Model/VatCheckResponse.md)

### Authorization

[APISecurity](../../README.md#APISecurity)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

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

$api_instance = new DataMill\Api\DataMillApi();
$text = "text_example"; // string | Free-form text to be converted.

try {
    $result = $api_instance->convertCapitalFirst($text);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataMillApi->convertCapitalFirst: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new DataMill\Api\DataMillApi();
$text = "text_example"; // string | Free-form text to be converted.

try {
    $result = $api_instance->convertLowerCase($text);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataMillApi->convertLowerCase: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new DataMill\Api\DataMillApi();
$text = "text_example"; // string | Free-form text to be converted.

try {
    $result = $api_instance->convertUpperCase($text);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataMillApi->convertUpperCase: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new DataMill\Api\DataMillApi();
$text = "text_example"; // string | Fre-form text to be wrapped.
$limit = 56; // int | The number of characters a linefeed will be inserted after (maximum character length per line).
$mode = "mode_example"; // string | The mode how the linefeed will be inserted. Either before (default) the current word, after the current word or exactly after the character. Possible values are **before** to break before last word, **after** to break after last word, **exact** to break at limit.
$linebreak = "linebreak_example"; // string | Defines which line separator should be used. Possible values are **full** for *\\r\\n*, **single** for *\\n*, **html** for *&lt;br&gt;*

try {
    $result = $api_instance->convertWrap($text, $limit, $mode, $linebreak);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataMillApi->convertWrap: ', $e->getMessage(), PHP_EOL;
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

# **extractHouseNumber**
> \DataMill\AddressHouseNumberExtractResponse extractHouseNumber($street, $housenumber)

Try to extract house number from street information

Find and extract the house number based on partial address information. The result is an extracted street name, house number and additional house number information (e.g. Apartment, Floor, Room). It is necessary to provide street and housenumber, either in street field or separated in street and house number field.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APISecurity
DataMill\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
DataMill\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new DataMill\Api\DataMillApi();
$street = "street_example"; // string | Free-form text containing the street name and optional the house number including additional house number information. The key is required if housenumber is empty or unset.
$housenumber = "housenumber_example"; // string | Free-form text containing the house number including additional house number information and optional the street name. The key is required if street is empty or unset.

try {
    $result = $api_instance->extractHouseNumber($street, $housenumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataMillApi->extractHouseNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **street** | **string**| Free-form text containing the street name and optional the house number including additional house number information. The key is required if housenumber is empty or unset. | [optional]
 **housenumber** | **string**| Free-form text containing the house number including additional house number information and optional the street name. The key is required if street is empty or unset. | [optional]

### Return type

[**\DataMill\AddressHouseNumberExtractResponse**](../Model/AddressHouseNumberExtractResponse.md)

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

$api_instance = new DataMill\Api\DataMillApi();
$phonenumber = "phonenumber_example"; // string | Phone number to be formatted and validated
$countrycode = "countrycode_example"; // string | ISO 3166-1 alpha-2 country code e.g. 'US'. Please see https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2 for further information.
$format = "format_example"; // string | The custom format of the returning phone number if valid. The format is a combination of the following placeholders:  * **{countrycode}**: The international dial prefix for the country without leading zero or the \\\"+\\\" sign  * **{nationalcode}**: The regional dial prefix  * **{phonenumber}**: The phone number including the extension and without the international and regional prefix  * **{national_prefix}**: The national dial prefix including the leading zero  * **{international_prefix}**: The international dial prefix including leading zeros.  If no custom format is specified the following combination is used: **+{countrycode} {nationalcode} {phonenumber}** (canonical format)
$direct_dialing_delimiter = "direct_dialing_delimiter_example"; // string | Optional define a special character (e.g. -) as delimiter between the phone number and the extension.
$allowed_delimiters = "allowed_delimiters_example"; // string | Optional collection of characters inside the specified phone number which are allowed for delimiter. The collection must be provided as **JSON** formatted string.

try {
    $result = $api_instance->formatPhoneNumber($phonenumber, $countrycode, $format, $direct_dialing_delimiter, $allowed_delimiters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataMillApi->formatPhoneNumber: ', $e->getMessage(), PHP_EOL;
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

# **getDUNSRating**
> \DataMill\BusinessDataDunsRatingResponse getDUNSRating($duns_number, $reason_code)

Get marketing information by DUNS number

Get marketing information about a company (credit rating, PAYDEX score, demographic information, ...) based on the company's D-U-N-S number. In order to get the marketing information each request requires a reason.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APISecurity
DataMill\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
DataMill\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new DataMill\Api\DataMillApi();
$duns_number = "duns_number_example"; // string | The D-U-N-S number you are looking for detailed information
$reason_code = "reason_code_example"; // string | Unique code describing the reason why you like to get detailed information about the specified company. Possible codes are:  * **1**: Credit decisions  * **2**: Credit check (intended business connection)  * **3**: Credit check (ongoing business connection)  * **4**: Debt collections  * **5**: Commercial credit insurance  * **6**: Insurance contract  * **7**: Leasing agreement  * **8**: Rental agreement

try {
    $result = $api_instance->getDUNSRating($duns_number, $reason_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataMillApi->getDUNSRating: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **duns_number** | **string**| The D-U-N-S number you are looking for detailed information |
 **reason_code** | **string**| Unique code describing the reason why you like to get detailed information about the specified company. Possible codes are:  * **1**: Credit decisions  * **2**: Credit check (intended business connection)  * **3**: Credit check (ongoing business connection)  * **4**: Debt collections  * **5**: Commercial credit insurance  * **6**: Insurance contract  * **7**: Leasing agreement  * **8**: Rental agreement |

### Return type

[**\DataMill\BusinessDataDunsRatingResponse**](../Model/BusinessDataDunsRatingResponse.md)

### Authorization

[APISecurity](../../README.md#APISecurity)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFirstNames**
> \DataMill\FirstNameGetResponse getFirstNames($name)

Recognize and extract first names

Detects all first names in a given sting (e.g. a person's name) and extracts them. (Works only with common first names in Germany, Austria and Switzerland)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APISecurity
DataMill\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
DataMill\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new DataMill\Api\DataMillApi();
$name = "name_example"; // string | Full name to detect all first names and extract them

try {
    $result = $api_instance->getFirstNames($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataMillApi->getFirstNames: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Full name to detect all first names and extract them |

### Return type

[**\DataMill\FirstNameGetResponse**](../Model/FirstNameGetResponse.md)

### Authorization

[APISecurity](../../README.md#APISecurity)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGender**
> \DataMill\GenderGetResponse getGender($firstname)

Recognize gender by first name

Recognizes the gender of a given first name. (Works only with common first names in Germany, Austria and Switzerland)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APISecurity
DataMill\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
DataMill\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new DataMill\Api\DataMillApi();
$firstname = "firstname_example"; // string | First name to recognize gender.

try {
    $result = $api_instance->getGender($firstname);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataMillApi->getGender: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **firstname** | **string**| First name to recognize gender. |

### Return type

[**\DataMill\GenderGetResponse**](../Model/GenderGetResponse.md)

### Authorization

[APISecurity](../../README.md#APISecurity)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGenderExtended**
> \DataMill\GenderExtendedGetResponse getGenderExtended($firstname, $countrycode)

Recognize gender by first name (advanced)

Recognizes the gender of a given first name considering country specific peculiarities.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APISecurity
DataMill\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
DataMill\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new DataMill\Api\DataMillApi();
$firstname = "firstname_example"; // string | First name to recognize gender.
$countrycode = "countrycode_example"; // string | ISO 3166-1 alpha-2 country code e.g. 'US'. Please see https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2 for further information.

try {
    $result = $api_instance->getGenderExtended($firstname, $countrycode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataMillApi->getGenderExtended: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **firstname** | **string**| First name to recognize gender. |
 **countrycode** | **string**| ISO 3166-1 alpha-2 country code e.g. &#39;US&#39;. Please see https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2 for further information. |

### Return type

[**\DataMill\GenderExtendedGetResponse**](../Model/GenderExtendedGetResponse.md)

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

$api_instance = new DataMill\Api\DataMillApi();
$countrycode = "countrycode_example"; // string | ISO 3166-1 alpha-2 country code e.g. 'US'. Please see https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2 for further information.

try {
    $result = $api_instance->getPhoneCountryCode($countrycode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataMillApi->getPhoneCountryCode: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new DataMill\Api\DataMillApi();
$text = "text_example"; // string | The text which should be converted. Each word will be converted separatly and generate a single entry in the result.
$phonetic_algorithm = 56; // int | The phonetic algorithm which should be applied. If no algorithm code will be provided **Soundex** will be used. Codes:  * 1 = Soundex  * 2 = Colcogne Phonetic  * 3 = Metaphon

try {
    $result = $api_instance->getPhoneticCode($text, $phonetic_algorithm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataMillApi->getPhoneticCode: ', $e->getMessage(), PHP_EOL;
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

# **getSocialMediaActivities**
> \DataMill\SocialMediaActivitiesGetResponse getSocialMediaActivities($email)

Retrieve social media data by email address

Get the number of followers and account information of multiple social media platforms from individual email addresses. If the social media information for a specific email address aren't fetched yet the request will be queued and the data will be available within the next 12 hours. Please consider that the response of a social media platform may be empty because of restricted access (privacy setting of the person being checked). The following social media platforms are currently checked:  * **LinkedIn**  * **XING**  * **Facebook**  * **Twitter**  * **Pinterest**  * **Instagram**  * **Youtube**  * **Google Plus**  * **Klout**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APISecurity
DataMill\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
DataMill\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new DataMill\Api\DataMillApi();
$email = "email_example"; // string | The person's email address being checked on mentioned social media plattforms

try {
    $result = $api_instance->getSocialMediaActivities($email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataMillApi->getSocialMediaActivities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| The person&#39;s email address being checked on mentioned social media plattforms |

### Return type

[**\DataMill\SocialMediaActivitiesGetResponse**](../Model/SocialMediaActivitiesGetResponse.md)

### Authorization

[APISecurity](../../README.md#APISecurity)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **locateAddress**
> \DataMill\AddressSearchResponse locateAddress($latitude, $longitude, $locale)

Reverse address lookup

Resolve an address corresponding to a given geo-coordinate. The result is a single record which matches the given latitude and longitude.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APISecurity
DataMill\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
DataMill\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new DataMill\Api\DataMillApi();
$latitude = "latitude_example"; // string | Latitude of the address (use a dot as decimal point)
$longitude = "longitude_example"; // string | Longitude of the address (use a dot as decimal point)
$locale = "locale_example"; // string | The preferred language of address elements in the result. The locale must be provided according to RFC 4647 standard (language code).

try {
    $result = $api_instance->locateAddress($latitude, $longitude, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataMillApi->locateAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **latitude** | **string**| Latitude of the address (use a dot as decimal point) |
 **longitude** | **string**| Longitude of the address (use a dot as decimal point) |
 **locale** | **string**| The preferred language of address elements in the result. The locale must be provided according to RFC 4647 standard (language code). | [optional]

### Return type

[**\DataMill\AddressSearchResponse**](../Model/AddressSearchResponse.md)

### Authorization

[APISecurity](../../README.md#APISecurity)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resolveDUNS**
> \DataMill\BusinessDataDunsResolveResponse resolveDUNS($duns_number, $reason_code)

Resolve company information by DUNS number

Resolves company information (official name, postal address, annual turnover, number of employees, ...) based on  the company's D-U-N-S number. In order to get the company information each request requires a reason.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APISecurity
DataMill\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
DataMill\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new DataMill\Api\DataMillApi();
$duns_number = "duns_number_example"; // string | The D-U-N-S number you are looking for detailed information
$reason_code = "reason_code_example"; // string | Unique code describing the reason why you like to get detailed information about the specified company. Possible codes are:  * **1**: Credit decisions  * **2**: Credit check (intended business connection)  * **3**: Credit check (ongoing business connection)  * **4**: Debt collections  * **5**: Commercial credit insurance  * **6**: Insurance contract  * **7**: Leasing agreement  * **8**: Rental agreement

try {
    $result = $api_instance->resolveDUNS($duns_number, $reason_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataMillApi->resolveDUNS: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **duns_number** | **string**| The D-U-N-S number you are looking for detailed information |
 **reason_code** | **string**| Unique code describing the reason why you like to get detailed information about the specified company. Possible codes are:  * **1**: Credit decisions  * **2**: Credit check (intended business connection)  * **3**: Credit check (ongoing business connection)  * **4**: Debt collections  * **5**: Commercial credit insurance  * **6**: Insurance contract  * **7**: Leasing agreement  * **8**: Rental agreement |

### Return type

[**\DataMill\BusinessDataDunsResolveResponse**](../Model/BusinessDataDunsResolveResponse.md)

### Authorization

[APISecurity](../../README.md#APISecurity)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resolveVAT**
> \DataMill\VatResolveResponse resolveVAT($vatnumber, $locale)

Try to resolve VAT number to company information

Resolves company information (company name and postal address) based on the company's VAT (Value Added Tax) identification number. Only VAT numbers of companies within the European Union can be verified and resolved. Some countries have access restrictions and may not deliver the full company information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APISecurity
DataMill\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
DataMill\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new DataMill\Api\DataMillApi();
$vatnumber = "vatnumber_example"; // string | The VAT number of a company within the European Union
$locale = "locale_example"; // string | The preferred language of address elements in the result. The locale must be provided according to RFC 4647 standard (language code).

try {
    $result = $api_instance->resolveVAT($vatnumber, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataMillApi->resolveVAT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vatnumber** | **string**| The VAT number of a company within the European Union |
 **locale** | **string**| The preferred language of address elements in the result. The locale must be provided according to RFC 4647 standard (language code). | [optional]

### Return type

[**\DataMill\VatResolveResponse**](../Model/VatResolveResponse.md)

### Authorization

[APISecurity](../../README.md#APISecurity)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchAddress**
> \DataMill\AddressSearchResponse searchAddress($address, $country, $state, $county, $city, $zip, $district, $street, $housenumber, $locale)

Lookup physical postal address

Find geo-location based on unstructured (single-line entry, un-qualified) or based on structured (qualified) address information. The result is a single record which matches the given geo-location. The response depends on the data quality of the request. If the request contains too many typos the response keys may be empty.  The unstructured query determines each address part by its own and afterwards finds the closest geo-location. It should only be used if you do not know which address information fits in which query parameter. The structured query provides an additional logic for specific countries to improve the result of the determined geo-location. Please consider that if you do not provide a country name/code the result may end in a different country because the same city + street combination may exist in multiple countries.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APISecurity
DataMill\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
DataMill\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new DataMill\Api\DataMillApi();
$address = "address_example"; // string | Unstructured query parameter. Free-form text containing address elements (e.g. city, postal code, street, house number). Each element is separated using a whitespace. The order of the elements does not matter. You can specify the 'address' parameter by itself or you can specify it with other parameters to narrow your search.
$country = "country_example"; // string | Specify the country using the country code (ISO 3166-1 alpha-3) or the country name.
$state = "state_example"; // string | First subdivision level below the country. Specify the state using full or abbreviated notation.
$county = "county_example"; // string | Second subdivision level below the country. Depending on the admin hierarchy in a country this level might not be applicable.
$city = "city_example"; // string | The city name.
$zip = "zip_example"; // string | Postal code defined by the government of the country.
$district = "district_example"; // string | Subdivision level below the city. Depending on the admin hierarchy in a country this level might not be applicable.
$street = "street_example"; // string | The street name.
$housenumber = "housenumber_example"; // string | The house number or building name.
$locale = "locale_example"; // string | The preferred language of address elements in the result. The locale must be provided according to RFC 4647 standard (language code).

try {
    $result = $api_instance->searchAddress($address, $country, $state, $county, $city, $zip, $district, $street, $housenumber, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataMillApi->searchAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Unstructured query parameter. Free-form text containing address elements (e.g. city, postal code, street, house number). Each element is separated using a whitespace. The order of the elements does not matter. You can specify the &#39;address&#39; parameter by itself or you can specify it with other parameters to narrow your search. | [optional]
 **country** | **string**| Specify the country using the country code (ISO 3166-1 alpha-3) or the country name. | [optional]
 **state** | **string**| First subdivision level below the country. Specify the state using full or abbreviated notation. | [optional]
 **county** | **string**| Second subdivision level below the country. Depending on the admin hierarchy in a country this level might not be applicable. | [optional]
 **city** | **string**| The city name. | [optional]
 **zip** | **string**| Postal code defined by the government of the country. | [optional]
 **district** | **string**| Subdivision level below the city. Depending on the admin hierarchy in a country this level might not be applicable. | [optional]
 **street** | **string**| The street name. | [optional]
 **housenumber** | **string**| The house number or building name. | [optional]
 **locale** | **string**| The preferred language of address elements in the result. The locale must be provided according to RFC 4647 standard (language code). | [optional]

### Return type

[**\DataMill\AddressSearchResponse**](../Model/AddressSearchResponse.md)

### Authorization

[APISecurity](../../README.md#APISecurity)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchAddressMultiple**
> \DataMill\AddressSearchMultipleResponse searchAddressMultiple($address, $locale)

Address lookup with multiple possible results

Find multiple geo-locations based on unstructured (single-line entry, un-qualified) address information. The result is a set of records which matches the given geo-location. The response depends on the data quality of the request. If the request contains too many typo errors the response keys may be empty.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APISecurity
DataMill\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
DataMill\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new DataMill\Api\DataMillApi();
$address = "address_example"; // string | Free-form text containing address elements (e.g. city, postal code, street, house number). Each element is separated using a whitespace. The order of the elements does not matter.
$locale = "locale_example"; // string | The preferred language of address elements in the result. The locale must be provided according to RFC 4647 standard (language code).

try {
    $result = $api_instance->searchAddressMultiple($address, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataMillApi->searchAddressMultiple: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Free-form text containing address elements (e.g. city, postal code, street, house number). Each element is separated using a whitespace. The order of the elements does not matter. |
 **locale** | **string**| The preferred language of address elements in the result. The locale must be provided according to RFC 4647 standard (language code). | [optional]

### Return type

[**\DataMill\AddressSearchMultipleResponse**](../Model/AddressSearchMultipleResponse.md)

### Authorization

[APISecurity](../../README.md#APISecurity)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchDUNS**
> \DataMill\BusinessDataDunsSearchResponse searchDUNS($country_code, $company_name, $duns_number, $state, $city, $zip, $street)

Find DUNS number and company information by name

Finds the D-U-N-S number and additional company information by the company's name. Optionally a filter for the headquarters location can be added to get a more accurate response.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APISecurity
DataMill\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
DataMill\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new DataMill\Api\DataMillApi();
$country_code = "country_code_example"; // string | ISO 3166-1 alpha-2 country code e.g. 'US'. Please see https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2 for further information.
$company_name = "company_name_example"; // string | The company name you are looking for or relevant parts of it (may be empty if the duns_number is set)
$duns_number = "duns_number_example"; // string | The D-U-N-S number you are looking for detailed information (may be empty if the company_name and country_code are set)
$state = "state_example"; // string | Filter to get only companies which matches the specified state (required for United States)
$city = "city_example"; // string | Filter to get only companies which matches the specified city
$zip = "zip_example"; // string | Filter to get only companies which matches the specified postal code
$street = "street_example"; // string | Filter to get only companies which matches the specified street

try {
    $result = $api_instance->searchDUNS($country_code, $company_name, $duns_number, $state, $city, $zip, $street);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataMillApi->searchDUNS: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code** | **string**| ISO 3166-1 alpha-2 country code e.g. &#39;US&#39;. Please see https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2 for further information. |
 **company_name** | **string**| The company name you are looking for or relevant parts of it (may be empty if the duns_number is set) | [optional]
 **duns_number** | **string**| The D-U-N-S number you are looking for detailed information (may be empty if the company_name and country_code are set) | [optional]
 **state** | **string**| Filter to get only companies which matches the specified state (required for United States) | [optional]
 **city** | **string**| Filter to get only companies which matches the specified city | [optional]
 **zip** | **string**| Filter to get only companies which matches the specified postal code | [optional]
 **street** | **string**| Filter to get only companies which matches the specified street | [optional]

### Return type

[**\DataMill\BusinessDataDunsSearchResponse**](../Model/BusinessDataDunsSearchResponse.md)

### Authorization

[APISecurity](../../README.md#APISecurity)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchUndeliverableContact**
> \DataMill\BusinessDataUndeliverableContactsResponse searchUndeliverableContact($first_name, $last_name, $country_code, $zip, $street, $reason)

Find moved and deceased contacts

Checks if the postal address of a person identified by its full name is invalid (moved to a new address or deceased). This function does NOT verify/check if a known postal address is still valid, instead it only checks if the person is moved to another address or is deceased and therefore a mail will result in an undeliverable state.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APISecurity
DataMill\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
DataMill\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new DataMill\Api\DataMillApi();
$first_name = "first_name_example"; // string | The person's first name
$last_name = "last_name_example"; // string | The person's last name
$country_code = "country_code_example"; // string | ISO 3166-1 alpha-2 country code e.g. 'US'. Please see https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2 for further information.
$zip = "zip_example"; // string | Last known postal code the person lives in
$street = "street_example"; // string | Last known street name the person lives in
$reason = "reason_example"; // string | Free-form text written in english why you submit the query.

try {
    $result = $api_instance->searchUndeliverableContact($first_name, $last_name, $country_code, $zip, $street, $reason);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataMillApi->searchUndeliverableContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **first_name** | **string**| The person&#39;s first name |
 **last_name** | **string**| The person&#39;s last name |
 **country_code** | **string**| ISO 3166-1 alpha-2 country code e.g. &#39;US&#39;. Please see https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2 for further information. |
 **zip** | **string**| Last known postal code the person lives in |
 **street** | **string**| Last known street name the person lives in |
 **reason** | **string**| Free-form text written in english why you submit the query. |

### Return type

[**\DataMill\BusinessDataUndeliverableContactsResponse**](../Model/BusinessDataUndeliverableContactsResponse.md)

### Authorization

[APISecurity](../../README.md#APISecurity)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchVAT**
> \DataMill\VatSearchResponse searchVAT($company, $city, $country_code, $limit, $min_score)

Find VAT number and company information by name

Finds the VAT number and additional company information by the company's name and headquarters location. The function returns multiple results if similar companies are found in the same city.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APISecurity
DataMill\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
DataMill\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new DataMill\Api\DataMillApi();
$company = "company_example"; // string | The name of an company. You may enter the fully qualified name or only partial information.
$city = "city_example"; // string | The city where the company's headquarters is located.
$country_code = "country_code_example"; // string | ISO 3166-1 alpha-2 country code to specify in which country to look for. Possible countries are: **AT, BE, CZ, DK, FI, GB, GR, HU, IT, LU, MT, SI**
$limit = "10"; // string | The maximum amount of results returned if multiple companies are found. Default value is **10**.
$min_score = "0.8"; // string | Threshold to set the minimum score rate of results being returned. Default: **0.8**

try {
    $result = $api_instance->searchVAT($company, $city, $country_code, $limit, $min_score);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataMillApi->searchVAT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company** | **string**| The name of an company. You may enter the fully qualified name or only partial information. |
 **city** | **string**| The city where the company&#39;s headquarters is located. | [optional]
 **country_code** | **string**| ISO 3166-1 alpha-2 country code to specify in which country to look for. Possible countries are: **AT, BE, CZ, DK, FI, GB, GR, HU, IT, LU, MT, SI** | [optional]
 **limit** | **string**| The maximum amount of results returned if multiple companies are found. Default value is **10**. | [optional] [default to 10]
 **min_score** | **string**| Threshold to set the minimum score rate of results being returned. Default: **0.8** | [optional] [default to 0.8]

### Return type

[**\DataMill\VatSearchResponse**](../Model/VatSearchResponse.md)

### Authorization

[APISecurity](../../README.md#APISecurity)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

