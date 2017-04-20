# DataMill\DeliveryInformationApi

All URIs are relative to *https://api.methis.at*

Method | HTTP request | Description
------------- | ------------- | -------------
[**searchUndeliverableContact**](DeliveryInformationApi.md#searchUndeliverableContact) | **POST** /business-data/undeliverable-contacts/search | Find moved and deceased contacts


# **searchUndeliverableContact**
> \\BusinessDataUndeliverableContactsResponse searchUndeliverableContact($license, $guid, $firstName, $lastName, $countryCode, $zip, $street, $reason)

Find moved and deceased contacts

Checks if the postal address of a person identified by its full name is invalid (moved to a new address or deceased). This function does NOT verify/check if a known postal address is still valid, instead it only checks if the person is moved to another address or is deceased and therefore a mail will result in an undeliverable state.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new DataMill\Api\DeliveryInformationApi();
$license = "license_example"; // string | The license key is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request.
$guid = "guid_example"; // string | The guid is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request.
$firstName = "firstName_example"; // string | The person's first name
$lastName = "lastName_example"; // string | The person's last name
$countryCode = "countryCode_example"; // string | ISO 3166-1 alpha-2 country code e.g. 'US'. Please see https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2 for further information.
$zip = "zip_example"; // string | Last known postal code the person lives in
$street = "street_example"; // string | Last known street name the person lives in
$reason = "reason_example"; // string | Free-form text written in english why you submit the query.

try {
    $result = $api_instance->searchUndeliverableContact($license, $guid, $firstName, $lastName, $countryCode, $zip, $street, $reason);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryInformationApi->searchUndeliverableContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **license** | **string**| The license key is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. |
 **guid** | **string**| The guid is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. |
 **firstName** | **string**| The person&#39;s first name |
 **lastName** | **string**| The person&#39;s last name |
 **countryCode** | **string**| ISO 3166-1 alpha-2 country code e.g. &#39;US&#39;. Please see https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2 for further information. |
 **zip** | **string**| Last known postal code the person lives in |
 **street** | **string**| Last known street name the person lives in |
 **reason** | **string**| Free-form text written in english why you submit the query. |

### Return type

[**\\BusinessDataUndeliverableContactsResponse**](../Model/BusinessDataUndeliverableContactsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

