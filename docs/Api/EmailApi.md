# DataMill\EmailApi

All URIs are relative to *https://api-beta.methis.at*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkEmailDomain**](EmailApi.md#checkEmailDomain) | **POST** /email/domain/check | Check email syntax and mail server domain
[**checkEmailMailbox**](EmailApi.md#checkEmailMailbox) | **POST** /email/extended/check | Check email syntax, mail server domain and mailbox itself
[**checkEmailSyntax**](EmailApi.md#checkEmailSyntax) | **POST** /email/syntax/check | Check email syntax


# **checkEmailDomain**
> \DataMill\EmailDomainCheckResponse checkEmailDomain($email)

Check email syntax and mail server domain

Checks the spelling of an email address to detect typos and spelling errors. In addition if the email address has a valid syntax its mail server is determined and checked for existence. The mail server itself will be compared with a list of disposable providers to detect addresses with a short lifetime.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APISecurity
DataMill\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
DataMill\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new DataMill\Api\EmailApi();
$email = "email_example"; // string | The email address to be checked

try {
    $result = $api_instance->checkEmailDomain($email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->checkEmailDomain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| The email address to be checked |

### Return type

[**\DataMill\EmailDomainCheckResponse**](../Model/EmailDomainCheckResponse.md)

### Authorization

[APISecurity](../../README.md#APISecurity)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkEmailMailbox**
> \DataMill\EmailExtendedCheckResponse checkEmailMailbox($email)

Check email syntax, mail server domain and mailbox itself

Checks the spelling of an email address to detect typos and spelling errors. If the email address has a valid syntax its mail server is determined and checked for existence. The mail server itself will be compared with a list of disposable providers to detect addresses with a short lifetime. Additionally the mail server will be checked if an email for the given mailbox can be received.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APISecurity
DataMill\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
DataMill\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new DataMill\Api\EmailApi();
$email = "email_example"; // string | The email address to be checked

try {
    $result = $api_instance->checkEmailMailbox($email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->checkEmailMailbox: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| The email address to be checked |

### Return type

[**\DataMill\EmailExtendedCheckResponse**](../Model/EmailExtendedCheckResponse.md)

### Authorization

[APISecurity](../../README.md#APISecurity)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkEmailSyntax**
> \DataMill\EmailSyntaxCheckResponse checkEmailSyntax($email)

Check email syntax

Checks the spelling of an email address to detect typos and spelling errors.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APISecurity
DataMill\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
DataMill\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new DataMill\Api\EmailApi();
$email = "email_example"; // string | The email address to be checked

try {
    $result = $api_instance->checkEmailSyntax($email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->checkEmailSyntax: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| The email address to be checked |

### Return type

[**\DataMill\EmailSyntaxCheckResponse**](../Model/EmailSyntaxCheckResponse.md)

### Authorization

[APISecurity](../../README.md#APISecurity)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

