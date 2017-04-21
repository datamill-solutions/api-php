<?php
/**
 * DUNSApi
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
 * DUNSApi Class Doc Comment
 *
 * @category Class
 * @package  DataMill
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DUNSApi
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
     * @return DUNSApi
     */
    public function setApiClient(\DataMill\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getDUNSRating
     *
     * Get marketing information by DUNS number
     *
     * @param string $license The license key is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. (required)
     * @param string $guid The guid is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. (required)
     * @param string $duns_number The D-U-N-S number you are looking for detailed information (required)
     * @param string $reason_code Unique code describing the reason why you like to get detailed information about the specified company. Possible codes are:  * **1**: Credit decisions  * **2**: Credit check (intended business connection)  * **3**: Credit check (ongoing business connection)  * **4**: Debt collections  * **5**: Commercial credit insurance  * **6**: Insurance contract  * **7**: Leasing agreement  * **8**: Rental agreement (required)
     * @throws \DataMill\ApiException on non-2xx response
     * @return \DataMill\BusinessDataDunsRatingResponse
     */
    public function getDUNSRating($license, $guid, $duns_number, $reason_code)
    {
        list($response) = $this->getDUNSRatingWithHttpInfo($license, $guid, $duns_number, $reason_code);
        return $response;
    }

    /**
     * Operation getDUNSRatingWithHttpInfo
     *
     * Get marketing information by DUNS number
     *
     * @param string $license The license key is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. (required)
     * @param string $guid The guid is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. (required)
     * @param string $duns_number The D-U-N-S number you are looking for detailed information (required)
     * @param string $reason_code Unique code describing the reason why you like to get detailed information about the specified company. Possible codes are:  * **1**: Credit decisions  * **2**: Credit check (intended business connection)  * **3**: Credit check (ongoing business connection)  * **4**: Debt collections  * **5**: Commercial credit insurance  * **6**: Insurance contract  * **7**: Leasing agreement  * **8**: Rental agreement (required)
     * @throws \DataMill\ApiException on non-2xx response
     * @return array of \DataMill\BusinessDataDunsRatingResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getDUNSRatingWithHttpInfo($license, $guid, $duns_number, $reason_code)
    {
        // verify the required parameter 'license' is set
        if ($license === null) {
            throw new \InvalidArgumentException('Missing the required parameter $license when calling getDUNSRating');
        }
        if ((strlen($license) > 29)) {
            throw new \InvalidArgumentException('invalid length for "$license" when calling DUNSApi.getDUNSRating, must be smaller than or equal to 29.');
        }
        if ((strlen($license) < 29)) {
            throw new \InvalidArgumentException('invalid length for "$license" when calling DUNSApi.getDUNSRating, must be bigger than or equal to 29.');
        }

        // verify the required parameter 'guid' is set
        if ($guid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $guid when calling getDUNSRating');
        }
        if ((strlen($guid) < 30)) {
            throw new \InvalidArgumentException('invalid length for "$guid" when calling DUNSApi.getDUNSRating, must be bigger than or equal to 30.');
        }

        // verify the required parameter 'duns_number' is set
        if ($duns_number === null) {
            throw new \InvalidArgumentException('Missing the required parameter $duns_number when calling getDUNSRating');
        }
        if ((strlen($duns_number) > 9)) {
            throw new \InvalidArgumentException('invalid length for "$duns_number" when calling DUNSApi.getDUNSRating, must be smaller than or equal to 9.');
        }
        if ((strlen($duns_number) < 9)) {
            throw new \InvalidArgumentException('invalid length for "$duns_number" when calling DUNSApi.getDUNSRating, must be bigger than or equal to 9.');
        }

        // verify the required parameter 'reason_code' is set
        if ($reason_code === null) {
            throw new \InvalidArgumentException('Missing the required parameter $reason_code when calling getDUNSRating');
        }
        if ((strlen($reason_code) > 1)) {
            throw new \InvalidArgumentException('invalid length for "$reason_code" when calling DUNSApi.getDUNSRating, must be smaller than or equal to 1.');
        }

        // parse inputs
        $resourcePath = "/business-data/duns/rating";
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
        if ($duns_number !== null) {
            $formParams['duns_number'] = $this->apiClient->getSerializer()->toFormValue($duns_number);
        }
        // form params
        if ($reason_code !== null) {
            $formParams['reason_code'] = $this->apiClient->getSerializer()->toFormValue($reason_code);
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
                '\DataMill\BusinessDataDunsRatingResponse',
                '/business-data/duns/rating'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\DataMill\BusinessDataDunsRatingResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DataMill\BusinessDataDunsRatingResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DataMill\ErrorUnauthorized', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 402:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DataMill\ErrorQuotaExceeded', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DataMill\ErrorForbidden', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DataMill\ErrorNotFound', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 405:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DataMill\ErrorNotAllowed', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 412:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DataMill\ErrorIncorrectParameters', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 428:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DataMill\ErrorMissingParameters', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DataMill\ErrorInternalError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DataMill\ErrorServiceUnavailable', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation resolveDUNS
     *
     * Resolve company information by DUNS number
     *
     * @param string $license The license key is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. (required)
     * @param string $guid The guid is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. (required)
     * @param string $duns_number The D-U-N-S number you are looking for detailed information (required)
     * @param string $reason_code Unique code describing the reason why you like to get detailed information about the specified company. Possible codes are:  * **1**: Credit decisions  * **2**: Credit check (intended business connection)  * **3**: Credit check (ongoing business connection)  * **4**: Debt collections  * **5**: Commercial credit insurance  * **6**: Insurance contract  * **7**: Leasing agreement  * **8**: Rental agreement (required)
     * @throws \DataMill\ApiException on non-2xx response
     * @return \DataMill\BusinessDataDunsResolveResponse
     */
    public function resolveDUNS($license, $guid, $duns_number, $reason_code)
    {
        list($response) = $this->resolveDUNSWithHttpInfo($license, $guid, $duns_number, $reason_code);
        return $response;
    }

    /**
     * Operation resolveDUNSWithHttpInfo
     *
     * Resolve company information by DUNS number
     *
     * @param string $license The license key is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. (required)
     * @param string $guid The guid is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. (required)
     * @param string $duns_number The D-U-N-S number you are looking for detailed information (required)
     * @param string $reason_code Unique code describing the reason why you like to get detailed information about the specified company. Possible codes are:  * **1**: Credit decisions  * **2**: Credit check (intended business connection)  * **3**: Credit check (ongoing business connection)  * **4**: Debt collections  * **5**: Commercial credit insurance  * **6**: Insurance contract  * **7**: Leasing agreement  * **8**: Rental agreement (required)
     * @throws \DataMill\ApiException on non-2xx response
     * @return array of \DataMill\BusinessDataDunsResolveResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function resolveDUNSWithHttpInfo($license, $guid, $duns_number, $reason_code)
    {
        // verify the required parameter 'license' is set
        if ($license === null) {
            throw new \InvalidArgumentException('Missing the required parameter $license when calling resolveDUNS');
        }
        if ((strlen($license) > 29)) {
            throw new \InvalidArgumentException('invalid length for "$license" when calling DUNSApi.resolveDUNS, must be smaller than or equal to 29.');
        }
        if ((strlen($license) < 29)) {
            throw new \InvalidArgumentException('invalid length for "$license" when calling DUNSApi.resolveDUNS, must be bigger than or equal to 29.');
        }

        // verify the required parameter 'guid' is set
        if ($guid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $guid when calling resolveDUNS');
        }
        if ((strlen($guid) < 30)) {
            throw new \InvalidArgumentException('invalid length for "$guid" when calling DUNSApi.resolveDUNS, must be bigger than or equal to 30.');
        }

        // verify the required parameter 'duns_number' is set
        if ($duns_number === null) {
            throw new \InvalidArgumentException('Missing the required parameter $duns_number when calling resolveDUNS');
        }
        if ((strlen($duns_number) > 9)) {
            throw new \InvalidArgumentException('invalid length for "$duns_number" when calling DUNSApi.resolveDUNS, must be smaller than or equal to 9.');
        }
        if ((strlen($duns_number) < 9)) {
            throw new \InvalidArgumentException('invalid length for "$duns_number" when calling DUNSApi.resolveDUNS, must be bigger than or equal to 9.');
        }

        // verify the required parameter 'reason_code' is set
        if ($reason_code === null) {
            throw new \InvalidArgumentException('Missing the required parameter $reason_code when calling resolveDUNS');
        }
        if ((strlen($reason_code) > 1)) {
            throw new \InvalidArgumentException('invalid length for "$reason_code" when calling DUNSApi.resolveDUNS, must be smaller than or equal to 1.');
        }

        // parse inputs
        $resourcePath = "/business-data/duns/resolve";
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
        if ($duns_number !== null) {
            $formParams['duns_number'] = $this->apiClient->getSerializer()->toFormValue($duns_number);
        }
        // form params
        if ($reason_code !== null) {
            $formParams['reason_code'] = $this->apiClient->getSerializer()->toFormValue($reason_code);
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
                '\DataMill\BusinessDataDunsResolveResponse',
                '/business-data/duns/resolve'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\DataMill\BusinessDataDunsResolveResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DataMill\BusinessDataDunsResolveResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DataMill\ErrorUnauthorized', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 402:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DataMill\ErrorQuotaExceeded', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DataMill\ErrorForbidden', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DataMill\ErrorNotFound', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 405:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DataMill\ErrorNotAllowed', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 412:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DataMill\ErrorIncorrectParameters', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 428:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DataMill\ErrorMissingParameters', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DataMill\ErrorInternalError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DataMill\ErrorServiceUnavailable', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation searchDUNS
     *
     * Find DUNS number and company information by name
     *
     * @param string $license The license key is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. (required)
     * @param string $guid The guid is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. (required)
     * @param string $company_name The company name you are looking for or relevant parts of it (may be empty if the duns_number is set) (optional)
     * @param string $country_code ISO 3166-1 alpha-2 country code e.g. &#39;US&#39;. Please see https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2 for further information. (required)
     * @param string $duns_number The D-U-N-S number you are looking for detailed information (may be empty if the company_name and country_code are set) (optional)
     * @param string $state Filter to get only companies which matches the specified state (required for United States) (optional)
     * @param string $city Filter to get only companies which matches the specified city (optional)
     * @param string $zip Filter to get only companies which matches the specified postal code (optional)
     * @param string $street Filter to get only companies which matches the specified street (optional)
     * @throws \DataMill\ApiException on non-2xx response
     * @return \DataMill\BusinessDataDunsSearchResponse
     */
    public function searchDUNS($license, $guid, $company_name = null, $country_code, $duns_number = null, $state = null, $city = null, $zip = null, $street = null)
    {
        list($response) = $this->searchDUNSWithHttpInfo($license, $guid, $company_name, $country_code, $duns_number, $state, $city, $zip, $street);
        return $response;
    }

    /**
     * Operation searchDUNSWithHttpInfo
     *
     * Find DUNS number and company information by name
     *
     * @param string $license The license key is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. (required)
     * @param string $guid The guid is part of the authentication key pair consisting of license and guid (global unique identifier). These two keys are used as your personal API keys. Note that every API request requires both keys, so you will need to include them in each request. (required)
     * @param string $company_name The company name you are looking for or relevant parts of it (may be empty if the duns_number is set) (optional)
     * @param string $country_code ISO 3166-1 alpha-2 country code e.g. &#39;US&#39;. Please see https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2 for further information. (required)
     * @param string $duns_number The D-U-N-S number you are looking for detailed information (may be empty if the company_name and country_code are set) (optional)
     * @param string $state Filter to get only companies which matches the specified state (required for United States) (optional)
     * @param string $city Filter to get only companies which matches the specified city (optional)
     * @param string $zip Filter to get only companies which matches the specified postal code (optional)
     * @param string $street Filter to get only companies which matches the specified street (optional)
     * @throws \DataMill\ApiException on non-2xx response
     * @return array of \DataMill\BusinessDataDunsSearchResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function searchDUNSWithHttpInfo($license, $guid, $company_name = null, $country_code, $duns_number = null, $state = null, $city = null, $zip = null, $street = null)
    {
        // verify the required parameter 'license' is set
        if ($license === null) {
            throw new \InvalidArgumentException('Missing the required parameter $license when calling searchDUNS');
        }
        if ((strlen($license) > 29)) {
            throw new \InvalidArgumentException('invalid length for "$license" when calling DUNSApi.searchDUNS, must be smaller than or equal to 29.');
        }
        if ((strlen($license) < 29)) {
            throw new \InvalidArgumentException('invalid length for "$license" when calling DUNSApi.searchDUNS, must be bigger than or equal to 29.');
        }

        // verify the required parameter 'guid' is set
        if ($guid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $guid when calling searchDUNS');
        }
        if ((strlen($guid) < 30)) {
            throw new \InvalidArgumentException('invalid length for "$guid" when calling DUNSApi.searchDUNS, must be bigger than or equal to 30.');
        }

        if (!is_null($company_name) && (strlen($company_name) > 255)) {
            throw new \InvalidArgumentException('invalid length for "$company_name" when calling DUNSApi.searchDUNS, must be smaller than or equal to 255.');
        }
        if (!is_null($company_name) && (strlen($company_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$company_name" when calling DUNSApi.searchDUNS, must be bigger than or equal to 1.');
        }

        // verify the required parameter 'country_code' is set
        if ($country_code === null) {
            throw new \InvalidArgumentException('Missing the required parameter $country_code when calling searchDUNS');
        }
        if ((strlen($country_code) > 2)) {
            throw new \InvalidArgumentException('invalid length for "$country_code" when calling DUNSApi.searchDUNS, must be smaller than or equal to 2.');
        }
        if ((strlen($country_code) < 2)) {
            throw new \InvalidArgumentException('invalid length for "$country_code" when calling DUNSApi.searchDUNS, must be bigger than or equal to 2.');
        }

        if (!is_null($duns_number) && (strlen($duns_number) > 9)) {
            throw new \InvalidArgumentException('invalid length for "$duns_number" when calling DUNSApi.searchDUNS, must be smaller than or equal to 9.');
        }
        if (!is_null($duns_number) && (strlen($duns_number) < 9)) {
            throw new \InvalidArgumentException('invalid length for "$duns_number" when calling DUNSApi.searchDUNS, must be bigger than or equal to 9.');
        }

        if (!is_null($state) && (strlen($state) > 255)) {
            throw new \InvalidArgumentException('invalid length for "$state" when calling DUNSApi.searchDUNS, must be smaller than or equal to 255.');
        }
        if (!is_null($state) && (strlen($state) < 0)) {
            throw new \InvalidArgumentException('invalid length for "$state" when calling DUNSApi.searchDUNS, must be bigger than or equal to 0.');
        }

        if (!is_null($city) && (strlen($city) > 255)) {
            throw new \InvalidArgumentException('invalid length for "$city" when calling DUNSApi.searchDUNS, must be smaller than or equal to 255.');
        }
        if (!is_null($city) && (strlen($city) < 0)) {
            throw new \InvalidArgumentException('invalid length for "$city" when calling DUNSApi.searchDUNS, must be bigger than or equal to 0.');
        }

        if (!is_null($zip) && (strlen($zip) > 255)) {
            throw new \InvalidArgumentException('invalid length for "$zip" when calling DUNSApi.searchDUNS, must be smaller than or equal to 255.');
        }
        if (!is_null($zip) && (strlen($zip) < 0)) {
            throw new \InvalidArgumentException('invalid length for "$zip" when calling DUNSApi.searchDUNS, must be bigger than or equal to 0.');
        }

        if (!is_null($street) && (strlen($street) > 255)) {
            throw new \InvalidArgumentException('invalid length for "$street" when calling DUNSApi.searchDUNS, must be smaller than or equal to 255.');
        }
        if (!is_null($street) && (strlen($street) < 0)) {
            throw new \InvalidArgumentException('invalid length for "$street" when calling DUNSApi.searchDUNS, must be bigger than or equal to 0.');
        }

        // parse inputs
        $resourcePath = "/business-data/duns/search";
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
        if ($company_name !== null) {
            $formParams['company_name'] = $this->apiClient->getSerializer()->toFormValue($company_name);
        }
        // form params
        if ($country_code !== null) {
            $formParams['country_code'] = $this->apiClient->getSerializer()->toFormValue($country_code);
        }
        // form params
        if ($duns_number !== null) {
            $formParams['duns_number'] = $this->apiClient->getSerializer()->toFormValue($duns_number);
        }
        // form params
        if ($state !== null) {
            $formParams['state'] = $this->apiClient->getSerializer()->toFormValue($state);
        }
        // form params
        if ($city !== null) {
            $formParams['city'] = $this->apiClient->getSerializer()->toFormValue($city);
        }
        // form params
        if ($zip !== null) {
            $formParams['zip'] = $this->apiClient->getSerializer()->toFormValue($zip);
        }
        // form params
        if ($street !== null) {
            $formParams['street'] = $this->apiClient->getSerializer()->toFormValue($street);
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
                '\DataMill\BusinessDataDunsSearchResponse',
                '/business-data/duns/search'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\DataMill\BusinessDataDunsSearchResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DataMill\BusinessDataDunsSearchResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DataMill\ErrorUnauthorized', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 402:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DataMill\ErrorQuotaExceeded', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DataMill\ErrorForbidden', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DataMill\ErrorNotFound', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 405:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DataMill\ErrorNotAllowed', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 412:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DataMill\ErrorIncorrectParameters', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 428:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DataMill\ErrorMissingParameters', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DataMill\ErrorInternalError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DataMill\ErrorServiceUnavailable', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
