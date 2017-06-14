# DataMill\URLApi

All URIs are relative to *https://api-beta.methis.at*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkUrl**](URLApi.md#checkUrl) | **POST** /url/check | Information about web resources


# **checkUrl**
> \DataMill\UrlCheckResponse checkUrl($url, $max_redirects)

Information about web resources

Fetches the resource of a given url and checks if it is available. Only websites using HTTP/HTTPS are allowed. IP addresses and ports other than 80/443 are not permitted and will be ignored.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APISecurity
DataMill\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
DataMill\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new DataMill\Api\URLApi();
$url = "url_example"; // string | The url to be checked (e.g. any website)
$max_redirects = "10"; // string | The maximum amount of redirects until the lookup for the root resource will be stopped (default **10**)

try {
    $result = $api_instance->checkUrl($url, $max_redirects);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling URLApi->checkUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **url** | **string**| The url to be checked (e.g. any website) |
 **max_redirects** | **string**| The maximum amount of redirects until the lookup for the root resource will be stopped (default **10**) | [optional] [default to 10]

### Return type

[**\DataMill\UrlCheckResponse**](../Model/UrlCheckResponse.md)

### Authorization

[APISecurity](../../README.md#APISecurity)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

