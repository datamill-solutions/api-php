# DataMill\SocialMediaApi

All URIs are relative to *https://api-beta.methis.at*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSocialMediaActivities**](SocialMediaApi.md#getSocialMediaActivities) | **POST** /social-media/activities/get | Retrieve social media data by email address


# **getSocialMediaActivities**
> \DataMill\SocialMediaActivitiesGetResponse getSocialMediaActivities($email)

Retrieve social media data by email address

Get the number of followers and account information of multiple social media platforms from individual email addresses. If the social media information for a specific email address aren't fetched yet the request will be queued and the data will be available within the next 12 hours. Please consider that the response of a social media platform may be empty because of restricted access (privacy setting of the person being checked). The following social media platforms are currently checked:  * **LinkedIn**  * **XING**  * **Facebook**  * **Twitter**  * **Pinterest**  * **Instagram**  * **Youtube**  * **Google Plus**  * **Klout**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APISecurity
DataMill\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
DataMill\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new DataMill\Api\SocialMediaApi();
$email = "email_example"; // string | The person's email address being checked on mentioned social media plattforms

try {
    $result = $api_instance->getSocialMediaActivities($email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialMediaApi->getSocialMediaActivities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| The person&#39;s email address being checked on mentioned social media plattforms |

### Return type

[**\DataMill\SocialMediaActivitiesGetResponse**](../Model/SocialMediaActivitiesGetResponse.md)

### Authorization

[APISecurity](../../README.md#APISecurity)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

