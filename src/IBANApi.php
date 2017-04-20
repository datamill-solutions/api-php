<?php
/**
 * IBANApi
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
 * IBANApi Class Doc Comment
 *
 * @category Class
 * @package  DataMill
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IBANApi
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
     * @return IBANApi
     */
    public function setApiClient(\DataMill\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation checkIBAN
     *
     * Check IBAN for spelling
     *
     * @param string $license The license key is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. (required)
     * @param string $guid The guid is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. (required)
     * @param string $iban IBAN to be checked. (required)
     * @throws \DataMill\ApiException on non-2xx response
     * @return \\IbanCheckResponse
     */
    public function checkIBAN($license, $guid, $iban)
    {
        list($response) = $this->checkIBANWithHttpInfo($license, $guid, $iban);
        return $response;
    }

    /**
     * Operation checkIBANWithHttpInfo
     *
     * Check IBAN for spelling
     *
     * @param string $license The license key is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. (required)
     * @param string $guid The guid is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. (required)
     * @param string $iban IBAN to be checked. (required)
     * @throws \DataMill\ApiException on non-2xx response
     * @return array of \\IbanCheckResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function checkIBANWithHttpInfo($license, $guid, $iban)
    {
        // verify the required parameter 'license' is set
        if ($license === null) {
            throw new \InvalidArgumentException('Missing the required parameter $license when calling checkIBAN');
        }
        if ((strlen($license) > 29)) {
            throw new \InvalidArgumentException('invalid length for "$license" when calling IBANApi.checkIBAN, must be smaller than or equal to 29.');
        }
        if ((strlen($license) < 29)) {
            throw new \InvalidArgumentException('invalid length for "$license" when calling IBANApi.checkIBAN, must be bigger than or equal to 29.');
        }

        // verify the required parameter 'guid' is set
        if ($guid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $guid when calling checkIBAN');
        }
        if ((strlen($guid) < 30)) {
            throw new \InvalidArgumentException('invalid length for "$guid" when calling IBANApi.checkIBAN, must be bigger than or equal to 30.');
        }

        // verify the required parameter 'iban' is set
        if ($iban === null) {
            throw new \InvalidArgumentException('Missing the required parameter $iban when calling checkIBAN');
        }
        if ((strlen($iban) > 255)) {
            throw new \InvalidArgumentException('invalid length for "$iban" when calling IBANApi.checkIBAN, must be smaller than or equal to 255.');
        }
        if ((strlen($iban) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$iban" when calling IBANApi.checkIBAN, must be bigger than or equal to 1.');
        }

        // parse inputs
        $resourcePath = "/iban/check";
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
        if ($iban !== null) {
            $formParams['iban'] = $this->apiClient->getSerializer()->toFormValue($iban);
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
                '\\IbanCheckResponse',
                '/iban/check'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\\IbanCheckResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\\IbanCheckResponse', $e->getResponseHeaders());
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
