# DataMill\VATApi

All URIs are relative to *https://api.methis.at*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkVAT**](VATApi.md#checkVAT) | **POST** /vat/check | Check vat number for correctness
[**resolveVAT**](VATApi.md#resolveVAT) | **POST** /vat/resolve | Try to resolve VAT number to company information
[**searchVAT**](VATApi.md#searchVAT) | **POST** /vat/search | Find VAT number and company information by name


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

$api_instance = new DataMill\Api\VATApi();
$vatnumber = "vatnumber_example"; // string | The VAT number of a company within the European Union

try {
    $result = $api_instance->checkVAT($vatnumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VATApi->checkVAT: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new DataMill\Api\VATApi();
$vatnumber = "vatnumber_example"; // string | The VAT number of a company within the European Union
$locale = "locale_example"; // string | The preferred language of address elements in the result. The locale must be provided according to RFC 4647 standard (language code).

try {
    $result = $api_instance->resolveVAT($vatnumber, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VATApi->resolveVAT: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new DataMill\Api\VATApi();
$company = "company_example"; // string | The name of an company. You may enter the fully qualified name or only partial information.
$city = "city_example"; // string | The city where the company's headquarters is located.
$country_code = "country_code_example"; // string | ISO 3166-1 alpha-2 country code to specify in which country to look for. Possible countries are: **AT, BE, CZ, DK, FI, GB, GR, HU, IT, LU, MT, SI**
$limit = "10"; // string | The maximum amount of results returned if multiple companies are found. Default value is **10**.
$min_score = "0.8"; // string | Threshold to set the minimum score rate of results being returned. Default: **0.8**

try {
    $result = $api_instance->searchVAT($company, $city, $country_code, $limit, $min_score);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VATApi->searchVAT: ', $e->getMessage(), PHP_EOL;
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

