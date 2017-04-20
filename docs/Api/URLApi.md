# DataMill\URLApi

All URIs are relative to *https://api.methis.at*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkUrl**](URLApi.md#checkUrl) | **POST** /url/check | Information about web resources


# **checkUrl**
> \\UrlCheckResponse checkUrl($license, $guid, $url, $maxRedirects)

Information about web resources

Fetches the resource of a given url and checks if it is available. Only websites using HTTP/HTTPS are allowed. IP addresses and ports other than 80/443 are not permitted and will be ignored.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new DataMill\Api\URLApi();
$license = "license_example"; // string | The license key is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request.
$guid = "guid_example"; // string | The guid is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request.
$url = "url_example"; // string | The url to be checked (e.g. any website)
$maxRedirects = "10"; // string | The maximum amount of redirects until the lookup for the root resource will be stopped (default **10**)

try {
    $result = $api_instance->checkUrl($license, $guid, $url, $maxRedirects);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling URLApi->checkUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **license** | **string**| The license key is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. |
 **guid** | **string**| The guid is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. |
 **url** | **string**| The url to be checked (e.g. any website) |
 **maxRedirects** | **string**| The maximum amount of redirects until the lookup for the root resource will be stopped (default **10**) | [optional] [default to 10]

### Return type

[**\\UrlCheckResponse**](../Model/UrlCheckResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

