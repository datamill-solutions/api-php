# DataMill\FirstNameApi

All URIs are relative to *https://api.methis.at*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getFirstNames**](FirstNameApi.md#getFirstNames) | **POST** /firstname/get | Recognize and extract first names


# **getFirstNames**
> \\FirstNameGetResponse getFirstNames($license, $guid, $name)

Recognize and extract first names

Detects all first names in a given sting (e.g. a person's name) and extracts them. (Works only with common first names in Germany, Austria and Switzerland)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new DataMill\Api\FirstNameApi();
$license = "license_example"; // string | The license key is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request.
$guid = "guid_example"; // string | The guid is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request.
$name = "name_example"; // string | Full name to detect all first names and extract them

try {
    $result = $api_instance->getFirstNames($license, $guid, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirstNameApi->getFirstNames: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **license** | **string**| The license key is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. |
 **guid** | **string**| The guid is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. |
 **name** | **string**| Full name to detect all first names and extract them |

### Return type

[**\\FirstNameGetResponse**](../Model/FirstNameGetResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

