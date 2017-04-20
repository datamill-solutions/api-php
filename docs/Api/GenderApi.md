# DataMill\GenderApi

All URIs are relative to *https://api.methis.at*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getGender**](GenderApi.md#getGender) | **POST** /gender/get | Recognize gender by first name
[**getGenderExtended**](GenderApi.md#getGenderExtended) | **POST** /gender/extended/get | Recognize gender by first name (advanced)


# **getGender**
> \DataMill\GenderGetResponse getGender($license, $guid, $firstname)

Recognize gender by first name

Recognizes the gender of a given first name. (Works only with common first names in Germany, Austria and Switzerland)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new DataMill\Api\GenderApi();
$license = "license_example"; // string | The license key is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request.
$guid = "guid_example"; // string | The guid is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request.
$firstname = "firstname_example"; // string | First name to recognize gender.

try {
    $result = $api_instance->getGender($license, $guid, $firstname);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GenderApi->getGender: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **license** | **string**| The license key is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. |
 **guid** | **string**| The guid is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. |
 **firstname** | **string**| First name to recognize gender. |

### Return type

[**\DataMill\GenderGetResponse**](../Model/GenderGetResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGenderExtended**
> \DataMill\GenderExtendedGetResponse getGenderExtended($license, $guid, $firstname, $countrycode)

Recognize gender by first name (advanced)

Recognizes the gender of a given first name considering country specific peculiarities.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new DataMill\Api\GenderApi();
$license = "license_example"; // string | The license key is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request.
$guid = "guid_example"; // string | The guid is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request.
$firstname = "firstname_example"; // string | First name to recognize gender.
$countrycode = "countrycode_example"; // string | ISO 3166-1 alpha-2 country code e.g. 'US'. Please see https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2 for further information.

try {
    $result = $api_instance->getGenderExtended($license, $guid, $firstname, $countrycode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GenderApi->getGenderExtended: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **license** | **string**| The license key is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. |
 **guid** | **string**| The guid is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. |
 **firstname** | **string**| First name to recognize gender. |
 **countrycode** | **string**| ISO 3166-1 alpha-2 country code e.g. &#39;US&#39;. Please see https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2 for further information. |

### Return type

[**\DataMill\GenderExtendedGetResponse**](../Model/GenderExtendedGetResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

