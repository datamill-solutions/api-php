# DataMill\FirstNameApi

All URIs are relative to *https://api-beta.methis.at*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getFirstNames**](FirstNameApi.md#getFirstNames) | **POST** /firstname/get | Recognize and extract first names


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

$api_instance = new DataMill\Api\FirstNameApi();
$name = "name_example"; // string | Full name to detect all first names and extract them

try {
    $result = $api_instance->getFirstNames($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirstNameApi->getFirstNames: ', $e->getMessage(), PHP_EOL;
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

