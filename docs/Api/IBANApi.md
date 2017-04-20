# DataMill\IBANApi

All URIs are relative to *https://api.methis.at*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkIBAN**](IBANApi.md#checkIBAN) | **POST** /iban/check | Check IBAN for spelling


# **checkIBAN**
> \\IbanCheckResponse checkIBAN($license, $guid, $iban)

Check IBAN for spelling

Checks the spelling, country code and checksum of an IBAN (International Bank Account Number). The IBAN is an internationally agreed system of identifying bank accounts across national borders. The function does not verify if the IBAN really exists, instead the format is checked for validity only.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new DataMill\Api\IBANApi();
$license = "license_example"; // string | The license key is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request.
$guid = "guid_example"; // string | The guid is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request.
$iban = "iban_example"; // string | IBAN to be checked.

try {
    $result = $api_instance->checkIBAN($license, $guid, $iban);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IBANApi->checkIBAN: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **license** | **string**| The license key is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. |
 **guid** | **string**| The guid is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. |
 **iban** | **string**| IBAN to be checked. |

### Return type

[**\\IbanCheckResponse**](../Model/IbanCheckResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

