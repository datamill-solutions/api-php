# DataMill\GenderApi

All URIs are relative to *https://api.methis.at*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getGender**](GenderApi.md#getGender) | **POST** /gender/get | Recognize gender by first name
[**getGenderExtended**](GenderApi.md#getGenderExtended) | **POST** /gender/extended/get | Recognize gender by first name (advanced)


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

$api_instance = new DataMill\Api\GenderApi();
$firstname = "firstname_example"; // string | First name to recognize gender.

try {
    $result = $api_instance->getGender($firstname);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GenderApi->getGender: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new DataMill\Api\GenderApi();
$firstname = "firstname_example"; // string | First name to recognize gender.
$countrycode = "countrycode_example"; // string | ISO 3166-1 alpha-2 country code e.g. 'US'. Please see https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2 for further information.

try {
    $result = $api_instance->getGenderExtended($firstname, $countrycode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GenderApi->getGenderExtended: ', $e->getMessage(), PHP_EOL;
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

