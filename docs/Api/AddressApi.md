# DataMill\AddressApi

All URIs are relative to *https://api.methis.at*

Method | HTTP request | Description
------------- | ------------- | -------------
[**extractHouseNumber**](AddressApi.md#extractHouseNumber) | **POST** /address/housenumber/extract | Try to extract house number from street information
[**locateAddress**](AddressApi.md#locateAddress) | **POST** /address/locate | Reverse address lookup
[**searchAddress**](AddressApi.md#searchAddress) | **POST** /address/search | Lookup physical postal address
[**searchAddressMultiple**](AddressApi.md#searchAddressMultiple) | **POST** /address/search/multiple | Address lookup with multiple possible results


# **extractHouseNumber**
> \DataMill\AddressHouseNumberExtractResponse extractHouseNumber($license, $guid, $street, $housenumber)

Try to extract house number from street information

Find and extract the house number based on partial address information. The result is an extracted street name, house number and additional house number information (e.g. Apartment, Floor, Room).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new DataMill\Api\AddressApi();
$license = "license_example"; // string | The license key is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request.
$guid = "guid_example"; // string | The guid is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request.
$street = "street_example"; // string | Free-form text containing the street name and optional the house number including additional house number information. The key is required if housenumber is empty or unset.
$housenumber = "housenumber_example"; // string | Free-form text containing the house number including additional house number information and optional the street name. The key is required if street is empty or unset.

try {
    $result = $api_instance->extractHouseNumber($license, $guid, $street, $housenumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->extractHouseNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **license** | **string**| The license key is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. |
 **guid** | **string**| The guid is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. |
 **street** | **string**| Free-form text containing the street name and optional the house number including additional house number information. The key is required if housenumber is empty or unset. | [optional]
 **housenumber** | **string**| Free-form text containing the house number including additional house number information and optional the street name. The key is required if street is empty or unset. | [optional]

### Return type

[**\DataMill\AddressHouseNumberExtractResponse**](../Model/AddressHouseNumberExtractResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **locateAddress**
> \DataMill\AddressSearchResponse locateAddress($license, $guid, $latitude, $longitude, $locale)

Reverse address lookup

Resolve an address corresponding to a given geo-coordinate. The result is a single record which matches the given latitude and longitude.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new DataMill\Api\AddressApi();
$license = "license_example"; // string | The license key is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request.
$guid = "guid_example"; // string | The guid is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request.
$latitude = "latitude_example"; // string | Latitude of the address (use a dot as decimal point)
$longitude = "longitude_example"; // string | Longitude of the address (use a dot as decimal point)
$locale = "locale_example"; // string | The preferred language of address elements in the result. The locale must be provided according to RFC 4647 standard (language code).

try {
    $result = $api_instance->locateAddress($license, $guid, $latitude, $longitude, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->locateAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **license** | **string**| The license key is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. |
 **guid** | **string**| The guid is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. |
 **latitude** | **string**| Latitude of the address (use a dot as decimal point) |
 **longitude** | **string**| Longitude of the address (use a dot as decimal point) |
 **locale** | **string**| The preferred language of address elements in the result. The locale must be provided according to RFC 4647 standard (language code). | [optional]

### Return type

[**\DataMill\AddressSearchResponse**](../Model/AddressSearchResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchAddress**
> \DataMill\AddressSearchResponse searchAddress($license, $guid, $address, $country, $state, $county, $city, $zip, $district, $street, $housenumber, $locale)

Lookup physical postal address

Find geo-location based on unstructured (single-line entry, un-qualified) or based on structured (qualified) address information. The result is a single record which matches the given geo-location. The response depends on the data quality of the request. If the request contains too many typos the response keys may be empty.  The unstructured query determines each address part by its own and afterwards finds the closest geo-location. It should only be used if you do not know which address information fits in which query parameter. The structured query provides an additional logic for specific countries to improve the result of the determined geo-location. Please consider that if you do not provide a country name/code the result may end in a different country because the same city + street combination may exist in multiple countries.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new DataMill\Api\AddressApi();
$license = "license_example"; // string | The license key is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request.
$guid = "guid_example"; // string | The guid is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request.
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
    $result = $api_instance->searchAddress($license, $guid, $address, $country, $state, $county, $city, $zip, $district, $street, $housenumber, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->searchAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **license** | **string**| The license key is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. |
 **guid** | **string**| The guid is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. |
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

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchAddressMultiple**
> \DataMill\AddressSearchMultipleResponse searchAddressMultiple($license, $guid, $address, $locale)

Address lookup with multiple possible results

Find multiple geo-locations based on unstructured (single-line entry, un-qualified) address information. The result is a set of records which matches the given geo-location. The response depends on the data quality of the request. If the request contains too many typo errors the response keys may be empty.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new DataMill\Api\AddressApi();
$license = "license_example"; // string | The license key is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request.
$guid = "guid_example"; // string | The guid is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request.
$address = "address_example"; // string | Free-form text containing address elements (e.g. city, postal code, street, house number). Each element is separated using a whitespace. The order of the elements does not matter.
$locale = "locale_example"; // string | The preferred language of address elements in the result. The locale must be provided according to RFC 4647 standard (language code).

try {
    $result = $api_instance->searchAddressMultiple($license, $guid, $address, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->searchAddressMultiple: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **license** | **string**| The license key is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. |
 **guid** | **string**| The guid is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. |
 **address** | **string**| Free-form text containing address elements (e.g. city, postal code, street, house number). Each element is separated using a whitespace. The order of the elements does not matter. |
 **locale** | **string**| The preferred language of address elements in the result. The locale must be provided according to RFC 4647 standard (language code). | [optional]

### Return type

[**\DataMill\AddressSearchMultipleResponse**](../Model/AddressSearchMultipleResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

