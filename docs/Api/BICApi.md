# DataMill\BICApi

All URIs are relative to *https://api.methis.at*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkBIC**](BICApi.md#checkBIC) | **POST** /bic/check | Check BIC for spelling


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

$api_instance = new DataMill\Api\BICApi();
$bic = "bic_example"; // string | BIC to be checked

try {
    $result = $api_instance->checkBIC($bic);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BICApi->checkBIC: ', $e->getMessage(), PHP_EOL;
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

