<?php
/**
 * PhoneNumberApi
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
 * **data.mill for applications** is the most versatile and powerful API for all aspects of data quality in your business application.  Use **data.mill** to check, correct and enrich personal data and business information. The internationally applicable functions can be integrated easily into existing applications, whether desktop, online or mobile and thus enable you to professionally improve your customer or supplier database, directly in your system. Due to **&#47;data.mill**'s pay-per-use credit model there are no setup fees or fixed monthly subscription fees.  **data.mill** is constantly evolving and upgraded with the latest technology and data services available on the market.
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
 * PhoneNumberApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PhoneNumberApi
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
     * @return PhoneNumberApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation checkMobilePhone
     *
     * Verify mobile phone number
     *
     * @param string $license The license key is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. (required)
     * @param string $guid The guid is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. (required)
     * @param string $phonenumber Mobile phone number to be verified. (required)
     * @param string $countrycode ISO 3166-1 alpha-2 country code e.g. &#39;US&#39;. Please see https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2 for further information. (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\PhoneMobileCheckResponse
     */
    public function checkMobilePhone($license, $guid, $phonenumber, $countrycode)
    {
        list($response) = $this->checkMobilePhoneWithHttpInfo($license, $guid, $phonenumber, $countrycode);
        return $response;
    }

    /**
     * Operation checkMobilePhoneWithHttpInfo
     *
     * Verify mobile phone number
     *
     * @param string $license The license key is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. (required)
     * @param string $guid The guid is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. (required)
     * @param string $phonenumber Mobile phone number to be verified. (required)
     * @param string $countrycode ISO 3166-1 alpha-2 country code e.g. &#39;US&#39;. Please see https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2 for further information. (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\PhoneMobileCheckResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function checkMobilePhoneWithHttpInfo($license, $guid, $phonenumber, $countrycode)
    {
        // verify the required parameter 'license' is set
        if ($license === null) {
            throw new \InvalidArgumentException('Missing the required parameter $license when calling checkMobilePhone');
        }
        if ((strlen($license) > 29)) {
            throw new \InvalidArgumentException('invalid length for "$license" when calling PhoneNumberApi.checkMobilePhone, must be smaller than or equal to 29.');
        }
        if ((strlen($license) < 29)) {
            throw new \InvalidArgumentException('invalid length for "$license" when calling PhoneNumberApi.checkMobilePhone, must be bigger than or equal to 29.');
        }

        // verify the required parameter 'guid' is set
        if ($guid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $guid when calling checkMobilePhone');
        }
        if ((strlen($guid) < 30)) {
            throw new \InvalidArgumentException('invalid length for "$guid" when calling PhoneNumberApi.checkMobilePhone, must be bigger than or equal to 30.');
        }

        // verify the required parameter 'phonenumber' is set
        if ($phonenumber === null) {
            throw new \InvalidArgumentException('Missing the required parameter $phonenumber when calling checkMobilePhone');
        }
        if ((strlen($phonenumber) > 128)) {
            throw new \InvalidArgumentException('invalid length for "$phonenumber" when calling PhoneNumberApi.checkMobilePhone, must be smaller than or equal to 128.');
        }
        if ((strlen($phonenumber) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$phonenumber" when calling PhoneNumberApi.checkMobilePhone, must be bigger than or equal to 1.');
        }

        // verify the required parameter 'countrycode' is set
        if ($countrycode === null) {
            throw new \InvalidArgumentException('Missing the required parameter $countrycode when calling checkMobilePhone');
        }
        if ((strlen($countrycode) > 2)) {
            throw new \InvalidArgumentException('invalid length for "$countrycode" when calling PhoneNumberApi.checkMobilePhone, must be smaller than or equal to 2.');
        }
        if ((strlen($countrycode) < 2)) {
            throw new \InvalidArgumentException('invalid length for "$countrycode" when calling PhoneNumberApi.checkMobilePhone, must be bigger than or equal to 2.');
        }

        // parse inputs
        $resourcePath = "/phone/mobile/check";
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
        if ($phonenumber !== null) {
            $formParams['phonenumber'] = $this->apiClient->getSerializer()->toFormValue($phonenumber);
        }
        // form params
        if ($countrycode !== null) {
            $formParams['countrycode'] = $this->apiClient->getSerializer()->toFormValue($countrycode);
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
                '\Swagger\Client\Model\PhoneMobileCheckResponse',
                '/phone/mobile/check'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\PhoneMobileCheckResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\PhoneMobileCheckResponse', $e->getResponseHeaders());
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
     * Operation formatPhoneNumber
     *
     * Parse, format and validate phone numbers
     *
     * @param string $license The license key is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. (required)
     * @param string $guid The guid is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. (required)
     * @param string $phonenumber Phone number to be formatted and validated (required)
     * @param string $countrycode ISO 3166-1 alpha-2 country code e.g. &#39;US&#39;. Please see https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2 for further information. (required)
     * @param string $format The custom format of the returning phone number if valid. The format is a combination of the following placeholders:  * **{countrycode}**: The international dial prefix for the country without leading zero or the \\\&quot;+\\\&quot; sign  * **{nationalcode}**: The regional dial prefix  * **{phonenumber}**: The phone number including the extension and without the international and regional prefix  * **{national_prefix}**: The national dial prefix including the leading zero  * **{international_prefix}**: The international dial prefix including leading zeros.  If no custom format is specified the following combination is used: **+{countrycode} {nationalcode} {phonenumber}** (canonical format) (optional)
     * @param string $direct_dialing_delimiter Optional define a special character (e.g. -) as delimiter between the phone number and the extension. (optional)
     * @param string $allowed_delimiters Optional collection of characters inside the specified phone number which are allowed for delimiter. The collection must be provided as **JSON** formatted string. (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\PhoneFormatResponse
     */
    public function formatPhoneNumber($license, $guid, $phonenumber, $countrycode, $format = null, $direct_dialing_delimiter = null, $allowed_delimiters = null)
    {
        list($response) = $this->formatPhoneNumberWithHttpInfo($license, $guid, $phonenumber, $countrycode, $format, $direct_dialing_delimiter, $allowed_delimiters);
        return $response;
    }

    /**
     * Operation formatPhoneNumberWithHttpInfo
     *
     * Parse, format and validate phone numbers
     *
     * @param string $license The license key is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. (required)
     * @param string $guid The guid is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. (required)
     * @param string $phonenumber Phone number to be formatted and validated (required)
     * @param string $countrycode ISO 3166-1 alpha-2 country code e.g. &#39;US&#39;. Please see https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2 for further information. (required)
     * @param string $format The custom format of the returning phone number if valid. The format is a combination of the following placeholders:  * **{countrycode}**: The international dial prefix for the country without leading zero or the \\\&quot;+\\\&quot; sign  * **{nationalcode}**: The regional dial prefix  * **{phonenumber}**: The phone number including the extension and without the international and regional prefix  * **{national_prefix}**: The national dial prefix including the leading zero  * **{international_prefix}**: The international dial prefix including leading zeros.  If no custom format is specified the following combination is used: **+{countrycode} {nationalcode} {phonenumber}** (canonical format) (optional)
     * @param string $direct_dialing_delimiter Optional define a special character (e.g. -) as delimiter between the phone number and the extension. (optional)
     * @param string $allowed_delimiters Optional collection of characters inside the specified phone number which are allowed for delimiter. The collection must be provided as **JSON** formatted string. (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\PhoneFormatResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function formatPhoneNumberWithHttpInfo($license, $guid, $phonenumber, $countrycode, $format = null, $direct_dialing_delimiter = null, $allowed_delimiters = null)
    {
        // verify the required parameter 'license' is set
        if ($license === null) {
            throw new \InvalidArgumentException('Missing the required parameter $license when calling formatPhoneNumber');
        }
        if ((strlen($license) > 29)) {
            throw new \InvalidArgumentException('invalid length for "$license" when calling PhoneNumberApi.formatPhoneNumber, must be smaller than or equal to 29.');
        }
        if ((strlen($license) < 29)) {
            throw new \InvalidArgumentException('invalid length for "$license" when calling PhoneNumberApi.formatPhoneNumber, must be bigger than or equal to 29.');
        }

        // verify the required parameter 'guid' is set
        if ($guid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $guid when calling formatPhoneNumber');
        }
        if ((strlen($guid) < 30)) {
            throw new \InvalidArgumentException('invalid length for "$guid" when calling PhoneNumberApi.formatPhoneNumber, must be bigger than or equal to 30.');
        }

        // verify the required parameter 'phonenumber' is set
        if ($phonenumber === null) {
            throw new \InvalidArgumentException('Missing the required parameter $phonenumber when calling formatPhoneNumber');
        }
        if ((strlen($phonenumber) > 128)) {
            throw new \InvalidArgumentException('invalid length for "$phonenumber" when calling PhoneNumberApi.formatPhoneNumber, must be smaller than or equal to 128.');
        }
        if ((strlen($phonenumber) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$phonenumber" when calling PhoneNumberApi.formatPhoneNumber, must be bigger than or equal to 1.');
        }

        // verify the required parameter 'countrycode' is set
        if ($countrycode === null) {
            throw new \InvalidArgumentException('Missing the required parameter $countrycode when calling formatPhoneNumber');
        }
        if ((strlen($countrycode) > 2)) {
            throw new \InvalidArgumentException('invalid length for "$countrycode" when calling PhoneNumberApi.formatPhoneNumber, must be smaller than or equal to 2.');
        }
        if ((strlen($countrycode) < 2)) {
            throw new \InvalidArgumentException('invalid length for "$countrycode" when calling PhoneNumberApi.formatPhoneNumber, must be bigger than or equal to 2.');
        }

        if (!is_null($format) && (strlen($format) > 100)) {
            throw new \InvalidArgumentException('invalid length for "$format" when calling PhoneNumberApi.formatPhoneNumber, must be smaller than or equal to 100.');
        }
        if (!is_null($format) && (strlen($format) < 0)) {
            throw new \InvalidArgumentException('invalid length for "$format" when calling PhoneNumberApi.formatPhoneNumber, must be bigger than or equal to 0.');
        }

        if (!is_null($direct_dialing_delimiter) && (strlen($direct_dialing_delimiter) > 10)) {
            throw new \InvalidArgumentException('invalid length for "$direct_dialing_delimiter" when calling PhoneNumberApi.formatPhoneNumber, must be smaller than or equal to 10.');
        }
        if (!is_null($direct_dialing_delimiter) && (strlen($direct_dialing_delimiter) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$direct_dialing_delimiter" when calling PhoneNumberApi.formatPhoneNumber, must be bigger than or equal to 1.');
        }

        if (!is_null($allowed_delimiters) && (strlen($allowed_delimiters) > 255)) {
            throw new \InvalidArgumentException('invalid length for "$allowed_delimiters" when calling PhoneNumberApi.formatPhoneNumber, must be smaller than or equal to 255.');
        }
        if (!is_null($allowed_delimiters) && (strlen($allowed_delimiters) < 0)) {
            throw new \InvalidArgumentException('invalid length for "$allowed_delimiters" when calling PhoneNumberApi.formatPhoneNumber, must be bigger than or equal to 0.');
        }

        // parse inputs
        $resourcePath = "/phone/format";
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
        if ($phonenumber !== null) {
            $formParams['phonenumber'] = $this->apiClient->getSerializer()->toFormValue($phonenumber);
        }
        // form params
        if ($countrycode !== null) {
            $formParams['countrycode'] = $this->apiClient->getSerializer()->toFormValue($countrycode);
        }
        // form params
        if ($format !== null) {
            $formParams['format'] = $this->apiClient->getSerializer()->toFormValue($format);
        }
        // form params
        if ($direct_dialing_delimiter !== null) {
            $formParams['direct_dialing_delimiter'] = $this->apiClient->getSerializer()->toFormValue($direct_dialing_delimiter);
        }
        // form params
        if ($allowed_delimiters !== null) {
            $formParams['allowed_delimiters'] = $this->apiClient->getSerializer()->toFormValue($allowed_delimiters);
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
                '\Swagger\Client\Model\PhoneFormatResponse',
                '/phone/format'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\PhoneFormatResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\PhoneFormatResponse', $e->getResponseHeaders());
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
     * Operation getPhoneCountryCode
     *
     * International and national dial prefix
     *
     * @param string $license The license key is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. (required)
     * @param string $guid The guid is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. (required)
     * @param string $countrycode ISO 3166-1 alpha-2 country code e.g. &#39;US&#39;. Please see https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2 for further information. (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\PhoneCountryCodeGetResponse
     */
    public function getPhoneCountryCode($license, $guid, $countrycode)
    {
        list($response) = $this->getPhoneCountryCodeWithHttpInfo($license, $guid, $countrycode);
        return $response;
    }

    /**
     * Operation getPhoneCountryCodeWithHttpInfo
     *
     * International and national dial prefix
     *
     * @param string $license The license key is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. (required)
     * @param string $guid The guid is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. (required)
     * @param string $countrycode ISO 3166-1 alpha-2 country code e.g. &#39;US&#39;. Please see https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2 for further information. (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\PhoneCountryCodeGetResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPhoneCountryCodeWithHttpInfo($license, $guid, $countrycode)
    {
        // verify the required parameter 'license' is set
        if ($license === null) {
            throw new \InvalidArgumentException('Missing the required parameter $license when calling getPhoneCountryCode');
        }
        if ((strlen($license) > 29)) {
            throw new \InvalidArgumentException('invalid length for "$license" when calling PhoneNumberApi.getPhoneCountryCode, must be smaller than or equal to 29.');
        }
        if ((strlen($license) < 29)) {
            throw new \InvalidArgumentException('invalid length for "$license" when calling PhoneNumberApi.getPhoneCountryCode, must be bigger than or equal to 29.');
        }

        // verify the required parameter 'guid' is set
        if ($guid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $guid when calling getPhoneCountryCode');
        }
        if ((strlen($guid) < 30)) {
            throw new \InvalidArgumentException('invalid length for "$guid" when calling PhoneNumberApi.getPhoneCountryCode, must be bigger than or equal to 30.');
        }

        // verify the required parameter 'countrycode' is set
        if ($countrycode === null) {
            throw new \InvalidArgumentException('Missing the required parameter $countrycode when calling getPhoneCountryCode');
        }
        if ((strlen($countrycode) > 2)) {
            throw new \InvalidArgumentException('invalid length for "$countrycode" when calling PhoneNumberApi.getPhoneCountryCode, must be smaller than or equal to 2.');
        }
        if ((strlen($countrycode) < 2)) {
            throw new \InvalidArgumentException('invalid length for "$countrycode" when calling PhoneNumberApi.getPhoneCountryCode, must be bigger than or equal to 2.');
        }

        // parse inputs
        $resourcePath = "/phone/countrycode/get";
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
        if ($countrycode !== null) {
            $formParams['countrycode'] = $this->apiClient->getSerializer()->toFormValue($countrycode);
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
                '\Swagger\Client\Model\PhoneCountryCodeGetResponse',
                '/phone/countrycode/get'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\PhoneCountryCodeGetResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\PhoneCountryCodeGetResponse', $e->getResponseHeaders());
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
