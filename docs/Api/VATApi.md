# DataMill\VATApi

All URIs are relative to *https://api.methis.at*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkVAT**](VATApi.md#checkVAT) | **POST** /vat/check | Check vat number for correctness
[**resolveVAT**](VATApi.md#resolveVAT) | **POST** /vat/resolve | Try to resolve VAT number to company information
[**searchVAT**](VATApi.md#searchVAT) | **POST** /vat/search | Find VAT number and company information by name


# **checkVAT**
> \\VatCheckResponse checkVAT($license, $guid, $vatnumber)

Check vat number for correctness

Checks if a given VAT (Value Added Tax) identification number is valid or not. Only VAT numbers of companies within the European Union can be verified.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new DataMill\Api\VATApi();
$license = "license_example"; // string | The license key is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request.
$guid = "guid_example"; // string | The guid is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request.
$vatnumber = "vatnumber_example"; // string | The VAT number of a company within the European Union

try {
    $result = $api_instance->checkVAT($license, $guid, $vatnumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VATApi->checkVAT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **license** | **string**| The license key is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. |
 **guid** | **string**| The guid is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. |
 **vatnumber** | **string**| The VAT number of a company within the European Union |

### Return type

[**\\VatCheckResponse**](../Model/VatCheckResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resolveVAT**
> \\VatResolveResponse resolveVAT($license, $guid, $vatnumber, $locale)

Try to resolve VAT number to company information

Resolves company information (company name and postal address) based on the company's VAT (Value Added Tax) identification number. Only VAT numbers of companies within the European Union can be verified and resolved. Some countries have access restrictions and may not deliver the full company information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new DataMill\Api\VATApi();
$license = "license_example"; // string | The license key is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request.
$guid = "guid_example"; // string | The guid is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request.
$vatnumber = "vatnumber_example"; // string | The VAT number of a company within the European Union
$locale = "locale_example"; // string | The preferred language of address elements in the result. The locale must be provided according to RFC 4647 standard (language code).

try {
    $result = $api_instance->resolveVAT($license, $guid, $vatnumber, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VATApi->resolveVAT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **license** | **string**| The license key is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. |
 **guid** | **string**| The guid is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. |
 **vatnumber** | **string**| The VAT number of a company within the European Union |
 **locale** | **string**| The preferred language of address elements in the result. The locale must be provided according to RFC 4647 standard (language code). | [optional]

### Return type

[**\\VatResolveResponse**](../Model/VatResolveResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchVAT**
> \\VatSearchResponse searchVAT($license, $guid, $company, $city, $countryCode, $limit, $minScore)

Find VAT number and company information by name

Finds the VAT number and additional company information by the company's name and headquarters location. The function returns multiple results if similar companies are found in the same city.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new DataMill\Api\VATApi();
$license = "license_example"; // string | The license key is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request.
$guid = "guid_example"; // string | The guid is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request.
$company = "company_example"; // string | The name of an company. You may enter the fully qualified name or only partial information.
$city = "city_example"; // string | The city where the company's headquarters is located.
$countryCode = "countryCode_example"; // string | ISO 3166-1 alpha-2 country code to specify in which country to look for. Possible countries are: **AT, BE, CZ, DK, FI, GB, GR, HU, IT, LU, MT, SI**
$limit = "10"; // string | The maximum amount of results returned if multiple companies are found. Default value is **10**.
$minScore = "0.8"; // string | Threshold to set the minimum score rate of results being returned. Default: **0.8**

try {
    $result = $api_instance->searchVAT($license, $guid, $company, $city, $countryCode, $limit, $minScore);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VATApi->searchVAT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **license** | **string**| The license key is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. |
 **guid** | **string**| The guid is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. |
 **company** | **string**| The name of an company. You may enter the fully qualified name or only partial information. |
 **city** | **string**| The city where the company&#39;s headquarters is located. | [optional]
 **countryCode** | **string**| ISO 3166-1 alpha-2 country code to specify in which country to look for. Possible countries are: **AT, BE, CZ, DK, FI, GB, GR, HU, IT, LU, MT, SI** | [optional]
 **limit** | **string**| The maximum amount of results returned if multiple companies are found. Default value is **10**. | [optional] [default to 10]
 **minScore** | **string**| Threshold to set the minimum score rate of results being returned. Default: **0.8** | [optional] [default to 0.8]

### Return type

[**\\VatSearchResponse**](../Model/VatSearchResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

