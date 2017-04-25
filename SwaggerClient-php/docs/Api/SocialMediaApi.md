# DataMill\SocialMediaApi

All URIs are relative to *https://api.methis.at*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSocialMediaActivities**](SocialMediaApi.md#getSocialMediaActivities) | **POST** /social-media/activities/get | Retrieve social media data by email address


# **getSocialMediaActivities**
> \DataMill\SocialMediaActivitiesGetResponse getSocialMediaActivities($license, $guid, $email)

Retrieve social media data by email address

Get the number of followers and account information of multiple social media platforms from individual email addresses. If the social media information for a specific email address aren't fetched yet the request will be queued and the data will be available within the next 12 hours. Please consider that the response of a social media platform may be empty because of restricted access (privacy setting of the person being checked). The following social media platforms are currently checked:  * **LinkedIn**  * **XING**  * **Facebook**  * **Twitter**  * **Pinterest**  * **Instagram**  * **Youtube**  * **Google Plus**  * **Klout**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new DataMill\Api\SocialMediaApi();
$license = "license_example"; // string | The license key is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request.
$guid = "guid_example"; // string | The guid is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request.
$email = "email_example"; // string | The person's email address being checked on mentioned social media plattforms

try {
    $result = $api_instance->getSocialMediaActivities($license, $guid, $email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialMediaApi->getSocialMediaActivities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **license** | **string**| The license key is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. |
 **guid** | **string**| The guid is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. |
 **email** | **string**| The person&#39;s email address being checked on mentioned social media plattforms |

### Return type

[**\DataMill\SocialMediaActivitiesGetResponse**](../Model/SocialMediaActivitiesGetResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

