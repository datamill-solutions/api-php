# DataMill\DUNSApi

All URIs are relative to *https://api.methis.at*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDUNSRating**](DUNSApi.md#getDUNSRating) | **POST** /business-data/duns/rating | Get marketing information by DUNS number
[**resolveDUNS**](DUNSApi.md#resolveDUNS) | **POST** /business-data/duns/resolve | Resolve company information by DUNS number
[**searchDUNS**](DUNSApi.md#searchDUNS) | **POST** /business-data/duns/search | Find DUNS number and company information by name


# **getDUNSRating**
> \\BusinessDataDunsRatingResponse getDUNSRating($license, $guid, $dunsNumber, $reasonCode)

Get marketing information by DUNS number

Get marketing information about a company (credit rating, PAYDEX score, demographic information, ...) based on the company's D-U-N-S number. In order to get the marketing information each request requires a reason.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new DataMill\Api\DUNSApi();
$license = "license_example"; // string | The license key is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request.
$guid = "guid_example"; // string | The guid is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request.
$dunsNumber = "dunsNumber_example"; // string | The D-U-N-S number you are looking for detailed information
$reasonCode = "reasonCode_example"; // string | Unique code describing the reason why you like to get detailed information about the specified company. Possible codes are:  * **1**: Credit decisions  * **2**: Credit check (intended business connection)  * **3**: Credit check (ongoing business connection)  * **4**: Debt collections  * **5**: Commercial credit insurance  * **6**: Insurance contract  * **7**: Leasing agreement  * **8**: Rental agreement

try {
    $result = $api_instance->getDUNSRating($license, $guid, $dunsNumber, $reasonCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DUNSApi->getDUNSRating: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **license** | **string**| The license key is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. |
 **guid** | **string**| The guid is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. |
 **dunsNumber** | **string**| The D-U-N-S number you are looking for detailed information |
 **reasonCode** | **string**| Unique code describing the reason why you like to get detailed information about the specified company. Possible codes are:  * **1**: Credit decisions  * **2**: Credit check (intended business connection)  * **3**: Credit check (ongoing business connection)  * **4**: Debt collections  * **5**: Commercial credit insurance  * **6**: Insurance contract  * **7**: Leasing agreement  * **8**: Rental agreement |

### Return type

[**\\BusinessDataDunsRatingResponse**](../Model/BusinessDataDunsRatingResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resolveDUNS**
> \\BusinessDataDunsResolveResponse resolveDUNS($license, $guid, $dunsNumber, $reasonCode)

Resolve company information by DUNS number

Resolves company information (official name, postal address, annual turnover, number of employees, ...) based on  the company's D-U-N-S number. In order to get the company information each request requires a reason.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new DataMill\Api\DUNSApi();
$license = "license_example"; // string | The license key is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request.
$guid = "guid_example"; // string | The guid is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request.
$dunsNumber = "dunsNumber_example"; // string | The D-U-N-S number you are looking for detailed information
$reasonCode = "reasonCode_example"; // string | Unique code describing the reason why you like to get detailed information about the specified company. Possible codes are:  * **1**: Credit decisions  * **2**: Credit check (intended business connection)  * **3**: Credit check (ongoing business connection)  * **4**: Debt collections  * **5**: Commercial credit insurance  * **6**: Insurance contract  * **7**: Leasing agreement  * **8**: Rental agreement

try {
    $result = $api_instance->resolveDUNS($license, $guid, $dunsNumber, $reasonCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DUNSApi->resolveDUNS: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **license** | **string**| The license key is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. |
 **guid** | **string**| The guid is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. |
 **dunsNumber** | **string**| The D-U-N-S number you are looking for detailed information |
 **reasonCode** | **string**| Unique code describing the reason why you like to get detailed information about the specified company. Possible codes are:  * **1**: Credit decisions  * **2**: Credit check (intended business connection)  * **3**: Credit check (ongoing business connection)  * **4**: Debt collections  * **5**: Commercial credit insurance  * **6**: Insurance contract  * **7**: Leasing agreement  * **8**: Rental agreement |

### Return type

[**\\BusinessDataDunsResolveResponse**](../Model/BusinessDataDunsResolveResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchDUNS**
> \\BusinessDataDunsSearchResponse searchDUNS($license, $guid, $countryCode, $companyName, $dunsNumber, $state, $city, $zip, $street)

Find DUNS number and company information by name

Finds the D-U-N-S number and additional company information by the company's name. Optionally a filter for the headquarters location can be added to get a more accurate response.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new DataMill\Api\DUNSApi();
$license = "license_example"; // string | The license key is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request.
$guid = "guid_example"; // string | The guid is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request.
$countryCode = "countryCode_example"; // string | ISO 3166-1 alpha-2 country code e.g. 'US'. Please see https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2 for further information.
$companyName = "companyName_example"; // string | The company name you are looking for or relevant parts of it (may be empty if the duns_number is set)
$dunsNumber = "dunsNumber_example"; // string | The D-U-N-S number you are looking for detailed information (may be empty if the company_name and country_code are set)
$state = "state_example"; // string | Filter to get only companies which matches the specified state (required for United States)
$city = "city_example"; // string | Filter to get only companies which matches the specified city
$zip = "zip_example"; // string | Filter to get only companies which matches the specified postal code
$street = "street_example"; // string | Filter to get only companies which matches the specified street

try {
    $result = $api_instance->searchDUNS($license, $guid, $countryCode, $companyName, $dunsNumber, $state, $city, $zip, $street);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DUNSApi->searchDUNS: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **license** | **string**| The license key is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. |
 **guid** | **string**| The guid is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. |
 **countryCode** | **string**| ISO 3166-1 alpha-2 country code e.g. &#39;US&#39;. Please see https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2 for further information. |
 **companyName** | **string**| The company name you are looking for or relevant parts of it (may be empty if the duns_number is set) | [optional]
 **dunsNumber** | **string**| The D-U-N-S number you are looking for detailed information (may be empty if the company_name and country_code are set) | [optional]
 **state** | **string**| Filter to get only companies which matches the specified state (required for United States) | [optional]
 **city** | **string**| Filter to get only companies which matches the specified city | [optional]
 **zip** | **string**| Filter to get only companies which matches the specified postal code | [optional]
 **street** | **string**| Filter to get only companies which matches the specified street | [optional]

### Return type

[**\\BusinessDataDunsSearchResponse**](../Model/BusinessDataDunsSearchResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

