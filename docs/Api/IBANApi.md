# DataMill\IBANApi

All URIs are relative to *https://api.methis.at*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkIBAN**](IBANApi.md#checkIBAN) | **POST** /iban/check | Check IBAN for spelling


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

$api_instance = new DataMill\Api\IBANApi();
$iban = "iban_example"; // string | IBAN to be checked.

try {
    $result = $api_instance->checkIBAN($iban);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IBANApi->checkIBAN: ', $e->getMessage(), PHP_EOL;
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

