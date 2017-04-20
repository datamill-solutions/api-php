<?php
/**
 * EmailApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * /data.mill for applications
 *
 * **&#47;data.mill for applications** is the most versatile and powerful API for all aspects of data quality in your business application.  Use **&#47;data.mill** to check, correct and enrich personal data and business information. The internationally applicable functions can be integrated easily into existing applications, whether desktop, online or mobile and thus enable you to professionally improve your customer or supplier database, directly in your system. Due to **&#47;data.mill**'s pay-per-use credit model there are no setup fees or fixed monthly subscription fees.  **&#47;data.mill** is constantly evolving and upgraded with the latest technology and data services available on the market.
 *
 * OpenAPI spec version: 1.6.4
 * Contact: info@datamill.solutions
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\Configuration;
use \Swagger\Client\ObjectSerializer;

/**
 * EmailApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EmailApi
{
    /**
     * API Client
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://api.methis.at');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return EmailApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation checkEmailDomain
     *
     * Check email syntax and mail server domain
     *
     * @param string $license The license key is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. (required)
     * @param string $guid The guid is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. (required)
     * @param string $email The email address to be checked (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\EmailDomainCheckResponse
     */
    public function checkEmailDomain($license, $guid, $email)
    {
        list($response) = $this->checkEmailDomainWithHttpInfo($license, $guid, $email);
        return $response;
    }

    /**
     * Operation checkEmailDomainWithHttpInfo
     *
     * Check email syntax and mail server domain
     *
     * @param string $license The license key is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. (required)
     * @param string $guid The guid is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. (required)
     * @param string $email The email address to be checked (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\EmailDomainCheckResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function checkEmailDomainWithHttpInfo($license, $guid, $email)
    {
        // verify the required parameter 'license' is set
        if ($license === null) {
            throw new \InvalidArgumentException('Missing the required parameter $license when calling checkEmailDomain');
        }
        if ((strlen($license) > 29)) {
            throw new \InvalidArgumentException('invalid length for "$license" when calling EmailApi.checkEmailDomain, must be smaller than or equal to 29.');
        }
        if ((strlen($license) < 29)) {
            throw new \InvalidArgumentException('invalid length for "$license" when calling EmailApi.checkEmailDomain, must be bigger than or equal to 29.');
        }

        // verify the required parameter 'guid' is set
        if ($guid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $guid when calling checkEmailDomain');
        }
        if ((strlen($guid) < 30)) {
            throw new \InvalidArgumentException('invalid length for "$guid" when calling EmailApi.checkEmailDomain, must be bigger than or equal to 30.');
        }

        // verify the required parameter 'email' is set
        if ($email === null) {
            throw new \InvalidArgumentException('Missing the required parameter $email when calling checkEmailDomain');
        }
        if ((strlen($email) > 320)) {
            throw new \InvalidArgumentException('invalid length for "$email" when calling EmailApi.checkEmailDomain, must be smaller than or equal to 320.');
        }
        if ((strlen($email) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$email" when calling EmailApi.checkEmailDomain, must be bigger than or equal to 1.');
        }

        // parse inputs
        $resourcePath = "/email/domain/check";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['multipart/form-data']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($license !== null) {
            $formParams['license'] = $this->apiClient->getSerializer()->toFormValue($license);
        }
        // form params
        if ($guid !== null) {
            $formParams['guid'] = $this->apiClient->getSerializer()->toFormValue($guid);
        }
        // form params
        if ($email !== null) {
            $formParams['email'] = $this->apiClient->getSerializer()->toFormValue($email);
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\EmailDomainCheckResponse',
                '/email/domain/check'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\EmailDomainCheckResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\EmailDomainCheckResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorUnauthorized', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 402:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorQuotaExceeded', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorForbidden', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorNotFound', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 405:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorNotAllowed', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 412:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorIncorrectParameters', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 428:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorMissingParameters', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorInternalError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorServiceUnavailable', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation checkEmailMailbox
     *
     * Check email syntax, mail server domain and mailbox itself
     *
     * @param string $license The license key is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. (required)
     * @param string $guid The guid is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. (required)
     * @param string $email The email address to be checked (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\EmailExtendedCheckResponse
     */
    public function checkEmailMailbox($license, $guid, $email)
    {
        list($response) = $this->checkEmailMailboxWithHttpInfo($license, $guid, $email);
        return $response;
    }

    /**
     * Operation checkEmailMailboxWithHttpInfo
     *
     * Check email syntax, mail server domain and mailbox itself
     *
     * @param string $license The license key is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. (required)
     * @param string $guid The guid is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. (required)
     * @param string $email The email address to be checked (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\EmailExtendedCheckResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function checkEmailMailboxWithHttpInfo($license, $guid, $email)
    {
        // verify the required parameter 'license' is set
        if ($license === null) {
            throw new \InvalidArgumentException('Missing the required parameter $license when calling checkEmailMailbox');
        }
        if ((strlen($license) > 29)) {
            throw new \InvalidArgumentException('invalid length for "$license" when calling EmailApi.checkEmailMailbox, must be smaller than or equal to 29.');
        }
        if ((strlen($license) < 29)) {
            throw new \InvalidArgumentException('invalid length for "$license" when calling EmailApi.checkEmailMailbox, must be bigger than or equal to 29.');
        }

        // verify the required parameter 'guid' is set
        if ($guid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $guid when calling checkEmailMailbox');
        }
        if ((strlen($guid) < 30)) {
            throw new \InvalidArgumentException('invalid length for "$guid" when calling EmailApi.checkEmailMailbox, must be bigger than or equal to 30.');
        }

        // verify the required parameter 'email' is set
        if ($email === null) {
            throw new \InvalidArgumentException('Missing the required parameter $email when calling checkEmailMailbox');
        }
        if ((strlen($email) > 320)) {
            throw new \InvalidArgumentException('invalid length for "$email" when calling EmailApi.checkEmailMailbox, must be smaller than or equal to 320.');
        }
        if ((strlen($email) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$email" when calling EmailApi.checkEmailMailbox, must be bigger than or equal to 1.');
        }

        // parse inputs
        $resourcePath = "/email/extended/check";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['multipart/form-data']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($license !== null) {
            $formParams['license'] = $this->apiClient->getSerializer()->toFormValue($license);
        }
        // form params
        if ($guid !== null) {
            $formParams['guid'] = $this->apiClient->getSerializer()->toFormValue($guid);
        }
        // form params
        if ($email !== null) {
            $formParams['email'] = $this->apiClient->getSerializer()->toFormValue($email);
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\EmailExtendedCheckResponse',
                '/email/extended/check'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\EmailExtendedCheckResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\EmailExtendedCheckResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorUnauthorized', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 402:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorQuotaExceeded', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorForbidden', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorNotFound', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 405:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorNotAllowed', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 412:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorIncorrectParameters', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 428:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorMissingParameters', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorInternalError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorServiceUnavailable', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation checkEmailSyntax
     *
     * Check email syntax
     *
     * @param string $license The license key is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. (required)
     * @param string $guid The guid is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. (required)
     * @param string $email The email address to be checked (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\EmailSyntaxCheckResponse
     */
    public function checkEmailSyntax($license, $guid, $email)
    {
        list($response) = $this->checkEmailSyntaxWithHttpInfo($license, $guid, $email);
        return $response;
    }

    /**
     * Operation checkEmailSyntaxWithHttpInfo
     *
     * Check email syntax
     *
     * @param string $license The license key is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. (required)
     * @param string $guid The guid is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. (required)
     * @param string $email The email address to be checked (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\EmailSyntaxCheckResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function checkEmailSyntaxWithHttpInfo($license, $guid, $email)
    {
        // verify the required parameter 'license' is set
        if ($license === null) {
            throw new \InvalidArgumentException('Missing the required parameter $license when calling checkEmailSyntax');
        }
        if ((strlen($license) > 29)) {
            throw new \InvalidArgumentException('invalid length for "$license" when calling EmailApi.checkEmailSyntax, must be smaller than or equal to 29.');
        }
        if ((strlen($license) < 29)) {
            throw new \InvalidArgumentException('invalid length for "$license" when calling EmailApi.checkEmailSyntax, must be bigger than or equal to 29.');
        }

        // verify the required parameter 'guid' is set
        if ($guid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $guid when calling checkEmailSyntax');
        }
        if ((strlen($guid) < 30)) {
            throw new \InvalidArgumentException('invalid length for "$guid" when calling EmailApi.checkEmailSyntax, must be bigger than or equal to 30.');
        }

        // verify the required parameter 'email' is set
        if ($email === null) {
            throw new \InvalidArgumentException('Missing the required parameter $email when calling checkEmailSyntax');
        }
        if ((strlen($email) > 320)) {
            throw new \InvalidArgumentException('invalid length for "$email" when calling EmailApi.checkEmailSyntax, must be smaller than or equal to 320.');
        }
        if ((strlen($email) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$email" when calling EmailApi.checkEmailSyntax, must be bigger than or equal to 1.');
        }

        // parse inputs
        $resourcePath = "/email/syntax/check";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['multipart/form-data']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($license !== null) {
            $formParams['license'] = $this->apiClient->getSerializer()->toFormValue($license);
        }
        // form params
        if ($guid !== null) {
            $formParams['guid'] = $this->apiClient->getSerializer()->toFormValue($guid);
        }
        // form params
        if ($email !== null) {
            $formParams['email'] = $this->apiClient->getSerializer()->toFormValue($email);
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\EmailSyntaxCheckResponse',
                '/email/syntax/check'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\EmailSyntaxCheckResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\EmailSyntaxCheckResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorUnauthorized', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 402:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorQuotaExceeded', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorForbidden', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorNotFound', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 405:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorNotAllowed', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 412:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorIncorrectParameters', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 428:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorMissingParameters', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorInternalError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorServiceUnavailable', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
