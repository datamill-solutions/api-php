# DataMill\DeliveryInformationApi

All URIs are relative to *https://api.methis.at*

Method | HTTP request | Description
------------- | ------------- | -------------
[**searchUndeliverableContact**](DeliveryInformationApi.md#searchUndeliverableContact) | **POST** /business-data/undeliverable-contacts/search | Find moved and deceased contacts


# **searchUndeliverableContact**
> \DataMill\BusinessDataUndeliverableContactsResponse searchUndeliverableContact($first_name, $last_name, $country_code, $zip, $street, $reason)

Find moved and deceased contacts

Checks if the postal address of a person identified by its full name is invalid (moved to a new address or deceased). This function does NOT verify/check if a known postal address is still valid, instead it only checks if the person is moved to another address or is deceased and therefore a mail will result in an undeliverable state.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APISecurity
DataMill\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
DataMill\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new DataMill\Api\DeliveryInformationApi();
$first_name = "first_name_example"; // string | The person's first name
$last_name = "last_name_example"; // string | The person's last name
$country_code = "country_code_example"; // string | ISO 3166-1 alpha-2 country code e.g. 'US'. Please see https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2 for further information.
$zip = "zip_example"; // string | Last known postal code the person lives in
$street = "street_example"; // string | Last known street name the person lives in
$reason = "reason_example"; // string | Free-form text written in english why you submit the query.

try {
    $result = $api_instance->searchUndeliverableContact($first_name, $last_name, $country_code, $zip, $street, $reason);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryInformationApi->searchUndeliverableContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **first_name** | **string**| The person&#39;s first name |
 **last_name** | **string**| The person&#39;s last name |
 **country_code** | **string**| ISO 3166-1 alpha-2 country code e.g. &#39;US&#39;. Please see https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2 for further information. |
 **zip** | **string**| Last known postal code the person lives in |
 **street** | **string**| Last known street name the person lives in |
 **reason** | **string**| Free-form text written in english why you submit the query. |

### Return type

[**\DataMill\BusinessDataUndeliverableContactsResponse**](../Model/BusinessDataUndeliverableContactsResponse.md)

### Authorization

[APISecurity](../../README.md#APISecurity)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

