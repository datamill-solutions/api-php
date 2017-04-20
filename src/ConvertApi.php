<?php
/**
 * ConvertApi
 * PHP version 5
 *
 * @category Class
 * @package  DataMill
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

namespace DataMill;

use \DataMill\ApiClient;
use \DataMill\ApiException;
use \DataMill\Configuration;
use \DataMill\ObjectSerializer;

/**
 * ConvertApi Class Doc Comment
 *
 * @category Class
 * @package  DataMill
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConvertApi
{
    /**
     * API Client
     *
     * @var \DataMill\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \DataMill\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\DataMill\ApiClient $apiClient = null)
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
     * @return \DataMill\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \DataMill\ApiClient $apiClient set the API client
     *
     * @return ConvertApi
     */
    public function setApiClient(\DataMill\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation convertCapitalFirst
     *
     * Convert any string to capitalize words
     *
     * @param string $license The license key is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. (required)
     * @param string $guid The guid is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. (required)
     * @param string $text Free-form text to be converted. (required)
     * @throws \DataMill\ApiException on non-2xx response
     * @return \\ConvertCapitalFirstResponse
     */
    public function convertCapitalFirst($license, $guid, $text)
    {
        list($response) = $this->convertCapitalFirstWithHttpInfo($license, $guid, $text);
        return $response;
    }

    /**
     * Operation convertCapitalFirstWithHttpInfo
     *
     * Convert any string to capitalize words
     *
     * @param string $license The license key is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. (required)
     * @param string $guid The guid is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. (required)
     * @param string $text Free-form text to be converted. (required)
     * @throws \DataMill\ApiException on non-2xx response
     * @return array of \\ConvertCapitalFirstResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function convertCapitalFirstWithHttpInfo($license, $guid, $text)
    {
        // verify the required parameter 'license' is set
        if ($license === null) {
            throw new \InvalidArgumentException('Missing the required parameter $license when calling convertCapitalFirst');
        }
        if ((strlen($license) > 29)) {
            throw new \InvalidArgumentException('invalid length for "$license" when calling ConvertApi.convertCapitalFirst, must be smaller than or equal to 29.');
        }
        if ((strlen($license) < 29)) {
            throw new \InvalidArgumentException('invalid length for "$license" when calling ConvertApi.convertCapitalFirst, must be bigger than or equal to 29.');
        }

        // verify the required parameter 'guid' is set
        if ($guid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $guid when calling convertCapitalFirst');
        }
        if ((strlen($guid) < 30)) {
            throw new \InvalidArgumentException('invalid length for "$guid" when calling ConvertApi.convertCapitalFirst, must be bigger than or equal to 30.');
        }

        // verify the required parameter 'text' is set
        if ($text === null) {
            throw new \InvalidArgumentException('Missing the required parameter $text when calling convertCapitalFirst');
        }
        if ((strlen($text) > 2048)) {
            throw new \InvalidArgumentException('invalid length for "$text" when calling ConvertApi.convertCapitalFirst, must be smaller than or equal to 2048.');
        }
        if ((strlen($text) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$text" when calling ConvertApi.convertCapitalFirst, must be bigger than or equal to 1.');
        }

        // parse inputs
        $resourcePath = "/convert/capitalfirst";
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
        if ($text !== null) {
            $formParams['text'] = $this->apiClient->getSerializer()->toFormValue($text);
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
                '\\ConvertCapitalFirstResponse',
                '/convert/capitalfirst'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\\ConvertCapitalFirstResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\\ConvertCapitalFirstResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\\ErrorUnauthorized', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 402:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\\ErrorQuotaExceeded', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\\ErrorForbidden', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\\ErrorNotFound', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 405:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\\ErrorNotAllowed', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 412:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\\ErrorIncorrectParameters', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 428:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\\ErrorMissingParameters', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\\ErrorInternalError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\\ErrorServiceUnavailable', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation convertLowerCase
     *
     * Convert any string to lower case
     *
     * @param string $license The license key is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. (required)
     * @param string $guid The guid is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. (required)
     * @param string $text Free-form text to be converted. (required)
     * @throws \DataMill\ApiException on non-2xx response
     * @return \\ConvertLowerCaseResponse
     */
    public function convertLowerCase($license, $guid, $text)
    {
        list($response) = $this->convertLowerCaseWithHttpInfo($license, $guid, $text);
        return $response;
    }

    /**
     * Operation convertLowerCaseWithHttpInfo
     *
     * Convert any string to lower case
     *
     * @param string $license The license key is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. (required)
     * @param string $guid The guid is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. (required)
     * @param string $text Free-form text to be converted. (required)
     * @throws \DataMill\ApiException on non-2xx response
     * @return array of \\ConvertLowerCaseResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function convertLowerCaseWithHttpInfo($license, $guid, $text)
    {
        // verify the required parameter 'license' is set
        if ($license === null) {
            throw new \InvalidArgumentException('Missing the required parameter $license when calling convertLowerCase');
        }
        if ((strlen($license) > 29)) {
            throw new \InvalidArgumentException('invalid length for "$license" when calling ConvertApi.convertLowerCase, must be smaller than or equal to 29.');
        }
        if ((strlen($license) < 29)) {
            throw new \InvalidArgumentException('invalid length for "$license" when calling ConvertApi.convertLowerCase, must be bigger than or equal to 29.');
        }

        // verify the required parameter 'guid' is set
        if ($guid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $guid when calling convertLowerCase');
        }
        if ((strlen($guid) < 30)) {
            throw new \InvalidArgumentException('invalid length for "$guid" when calling ConvertApi.convertLowerCase, must be bigger than or equal to 30.');
        }

        // verify the required parameter 'text' is set
        if ($text === null) {
            throw new \InvalidArgumentException('Missing the required parameter $text when calling convertLowerCase');
        }
        if ((strlen($text) > 2048)) {
            throw new \InvalidArgumentException('invalid length for "$text" when calling ConvertApi.convertLowerCase, must be smaller than or equal to 2048.');
        }
        if ((strlen($text) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$text" when calling ConvertApi.convertLowerCase, must be bigger than or equal to 1.');
        }

        // parse inputs
        $resourcePath = "/convert/lowercase";
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
        if ($text !== null) {
            $formParams['text'] = $this->apiClient->getSerializer()->toFormValue($text);
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
                '\\ConvertLowerCaseResponse',
                '/convert/lowercase'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\\ConvertLowerCaseResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\\ConvertLowerCaseResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\\ErrorUnauthorized', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 402:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\\ErrorQuotaExceeded', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\\ErrorForbidden', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\\ErrorNotFound', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 405:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\\ErrorNotAllowed', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 412:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\\ErrorIncorrectParameters', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 428:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\\ErrorMissingParameters', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\\ErrorInternalError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\\ErrorServiceUnavailable', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation convertUpperCase
     *
     * Convert any string to upper case
     *
     * @param string $license The license key is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. (required)
     * @param string $guid The guid is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. (required)
     * @param string $text Free-form text to be converted. (required)
     * @throws \DataMill\ApiException on non-2xx response
     * @return \\ConvertUpperCaseResponse
     */
    public function convertUpperCase($license, $guid, $text)
    {
        list($response) = $this->convertUpperCaseWithHttpInfo($license, $guid, $text);
        return $response;
    }

    /**
     * Operation convertUpperCaseWithHttpInfo
     *
     * Convert any string to upper case
     *
     * @param string $license The license key is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. (required)
     * @param string $guid The guid is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. (required)
     * @param string $text Free-form text to be converted. (required)
     * @throws \DataMill\ApiException on non-2xx response
     * @return array of \\ConvertUpperCaseResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function convertUpperCaseWithHttpInfo($license, $guid, $text)
    {
        // verify the required parameter 'license' is set
        if ($license === null) {
            throw new \InvalidArgumentException('Missing the required parameter $license when calling convertUpperCase');
        }
        if ((strlen($license) > 29)) {
            throw new \InvalidArgumentException('invalid length for "$license" when calling ConvertApi.convertUpperCase, must be smaller than or equal to 29.');
        }
        if ((strlen($license) < 29)) {
            throw new \InvalidArgumentException('invalid length for "$license" when calling ConvertApi.convertUpperCase, must be bigger than or equal to 29.');
        }

        // verify the required parameter 'guid' is set
        if ($guid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $guid when calling convertUpperCase');
        }
        if ((strlen($guid) < 30)) {
            throw new \InvalidArgumentException('invalid length for "$guid" when calling ConvertApi.convertUpperCase, must be bigger than or equal to 30.');
        }

        // verify the required parameter 'text' is set
        if ($text === null) {
            throw new \InvalidArgumentException('Missing the required parameter $text when calling convertUpperCase');
        }
        if ((strlen($text) > 2048)) {
            throw new \InvalidArgumentException('invalid length for "$text" when calling ConvertApi.convertUpperCase, must be smaller than or equal to 2048.');
        }
        if ((strlen($text) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$text" when calling ConvertApi.convertUpperCase, must be bigger than or equal to 1.');
        }

        // parse inputs
        $resourcePath = "/convert/uppercase";
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
        if ($text !== null) {
            $formParams['text'] = $this->apiClient->getSerializer()->toFormValue($text);
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
                '\\ConvertUpperCaseResponse',
                '/convert/uppercase'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\\ConvertUpperCaseResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\\ConvertUpperCaseResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\\ErrorUnauthorized', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 402:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\\ErrorQuotaExceeded', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\\ErrorForbidden', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\\ErrorNotFound', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 405:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\\ErrorNotAllowed', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 412:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\\ErrorIncorrectParameters', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 428:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\\ErrorMissingParameters', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\\ErrorInternalError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\\ErrorServiceUnavailable', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation convertWrap
     *
     * Wrap text
     *
     * @param string $license The license key is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. (required)
     * @param string $guid The guid is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. (required)
     * @param string $text Fre-form text to be wrapped. (required)
     * @param int $limit The number of characters a linefeed will be inserted after (maximum character length per line). (required)
     * @param string $mode The mode how the linefeed will be inserted. Either before (default) the current word, after the current word or exactly after the character. Possible values are **before** to break before last word, **after** to break after last word, **exact** to break at limit. (optional)
     * @param string $linebreak Defines which line separator should be used. Possible values are **full** for *\\r\\n*, **single** for *\\n*, **html** for *&amp;lt;br&amp;gt;* (optional)
     * @throws \DataMill\ApiException on non-2xx response
     * @return \\ConvertWrapResponse
     */
    public function convertWrap($license, $guid, $text, $limit, $mode = null, $linebreak = null)
    {
        list($response) = $this->convertWrapWithHttpInfo($license, $guid, $text, $limit, $mode, $linebreak);
        return $response;
    }

    /**
     * Operation convertWrapWithHttpInfo
     *
     * Wrap text
     *
     * @param string $license The license key is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. (required)
     * @param string $guid The guid is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. (required)
     * @param string $text Fre-form text to be wrapped. (required)
     * @param int $limit The number of characters a linefeed will be inserted after (maximum character length per line). (required)
     * @param string $mode The mode how the linefeed will be inserted. Either before (default) the current word, after the current word or exactly after the character. Possible values are **before** to break before last word, **after** to break after last word, **exact** to break at limit. (optional)
     * @param string $linebreak Defines which line separator should be used. Possible values are **full** for *\\r\\n*, **single** for *\\n*, **html** for *&amp;lt;br&amp;gt;* (optional)
     * @throws \DataMill\ApiException on non-2xx response
     * @return array of \\ConvertWrapResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function convertWrapWithHttpInfo($license, $guid, $text, $limit, $mode = null, $linebreak = null)
    {
        // verify the required parameter 'license' is set
        if ($license === null) {
            throw new \InvalidArgumentException('Missing the required parameter $license when calling convertWrap');
        }
        if ((strlen($license) > 29)) {
            throw new \InvalidArgumentException('invalid length for "$license" when calling ConvertApi.convertWrap, must be smaller than or equal to 29.');
        }
        if ((strlen($license) < 29)) {
            throw new \InvalidArgumentException('invalid length for "$license" when calling ConvertApi.convertWrap, must be bigger than or equal to 29.');
        }

        // verify the required parameter 'guid' is set
        if ($guid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $guid when calling convertWrap');
        }
        if ((strlen($guid) < 30)) {
            throw new \InvalidArgumentException('invalid length for "$guid" when calling ConvertApi.convertWrap, must be bigger than or equal to 30.');
        }

        // verify the required parameter 'text' is set
        if ($text === null) {
            throw new \InvalidArgumentException('Missing the required parameter $text when calling convertWrap');
        }
        if ((strlen($text) > 102400)) {
            throw new \InvalidArgumentException('invalid length for "$text" when calling ConvertApi.convertWrap, must be smaller than or equal to 102400.');
        }
        if ((strlen($text) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$text" when calling ConvertApi.convertWrap, must be bigger than or equal to 1.');
        }

        // verify the required parameter 'limit' is set
        if ($limit === null) {
            throw new \InvalidArgumentException('Missing the required parameter $limit when calling convertWrap');
        }
        if ((strlen($limit) > 102400)) {
            throw new \InvalidArgumentException('invalid length for "$limit" when calling ConvertApi.convertWrap, must be smaller than or equal to 102400.');
        }
        if ((strlen($limit) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$limit" when calling ConvertApi.convertWrap, must be bigger than or equal to 1.');
        }

        if (!is_null($mode) && (strlen($mode) > 6)) {
            throw new \InvalidArgumentException('invalid length for "$mode" when calling ConvertApi.convertWrap, must be smaller than or equal to 6.');
        }
        if (!is_null($mode) && (strlen($mode) < 5)) {
            throw new \InvalidArgumentException('invalid length for "$mode" when calling ConvertApi.convertWrap, must be bigger than or equal to 5.');
        }

        if (!is_null($linebreak) && (strlen($linebreak) > 6)) {
            throw new \InvalidArgumentException('invalid length for "$linebreak" when calling ConvertApi.convertWrap, must be smaller than or equal to 6.');
        }
        if (!is_null($linebreak) && (strlen($linebreak) < 4)) {
            throw new \InvalidArgumentException('invalid length for "$linebreak" when calling ConvertApi.convertWrap, must be bigger than or equal to 4.');
        }

        // parse inputs
        $resourcePath = "/convert/wrap";
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
        if ($text !== null) {
            $formParams['text'] = $this->apiClient->getSerializer()->toFormValue($text);
        }
        // form params
        if ($limit !== null) {
            $formParams['limit'] = $this->apiClient->getSerializer()->toFormValue($limit);
        }
        // form params
        if ($mode !== null) {
            $formParams['mode'] = $this->apiClient->getSerializer()->toFormValue($mode);
        }
        // form params
        if ($linebreak !== null) {
            $formParams['linebreak'] = $this->apiClient->getSerializer()->toFormValue($linebreak);
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
                '\\ConvertWrapResponse',
                '/convert/wrap'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\\ConvertWrapResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\\ConvertWrapResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\\ErrorUnauthorized', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 402:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\\ErrorQuotaExceeded', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\\ErrorForbidden', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\\ErrorNotFound', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 405:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\\ErrorNotAllowed', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 412:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\\ErrorIncorrectParameters', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 428:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\\ErrorMissingParameters', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\\ErrorInternalError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\\ErrorServiceUnavailable', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
