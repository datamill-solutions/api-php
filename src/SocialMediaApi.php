<?php
/**
 * SocialMediaApi
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
 * **&#47;data.mill for applications** is the most versatile and powerful API for all aspects of data quality in your business application.  Use **&#47;data.mill** to check, correct and enrich personal data and business information. The internationally applicable functions can be integrated easily into existing applications, whether desktop, online or mobile and thus enable you to professionally improve your customer or supplier database, directly in your system. Due to **&#47;data.mill**'s pay-per-use credit model there are no setup fees or fixed monthly subscription fees.  **&#47;data.mill** is constantly evolving and upgraded with the latest technology and data services available on the market.  GitHub for SDKs: https://github.com/datamill-solutions
 *
 * OpenAPI spec version: 1.6.5
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
 * SocialMediaApi Class Doc Comment
 *
 * @category Class
 * @package  DataMill
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SocialMediaApi
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
     * @return SocialMediaApi
     */
    public function setApiClient(\DataMill\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getSocialMediaActivities
     *
     * Retrieve social media data by email address
     *
     * @param string $email The person&#39;s email address being checked on mentioned social media plattforms (required)
     * @throws \DataMill\ApiException on non-2xx response
     * @return \DataMill\SocialMediaActivitiesGetResponse
     */
    public function getSocialMediaActivities($email)
    {
        list($response) = $this->getSocialMediaActivitiesWithHttpInfo($email);
        return $response;
    }

    /**
     * Operation getSocialMediaActivitiesWithHttpInfo
     *
     * Retrieve social media data by email address
     *
     * @param string $email The person&#39;s email address being checked on mentioned social media plattforms (required)
     * @throws \DataMill\ApiException on non-2xx response
     * @return array of \DataMill\SocialMediaActivitiesGetResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getSocialMediaActivitiesWithHttpInfo($email)
    {
        // verify the required parameter 'email' is set
        if ($email === null) {
            throw new \InvalidArgumentException('Missing the required parameter $email when calling getSocialMediaActivities');
        }
        if ((strlen($email) > 320)) {
            throw new \InvalidArgumentException('invalid length for "$email" when calling SocialMediaApi.getSocialMediaActivities, must be smaller than or equal to 320.');
        }
        if ((strlen($email) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$email" when calling SocialMediaApi.getSocialMediaActivities, must be bigger than or equal to 1.');
        }

        // parse inputs
        $resourcePath = "/social-media/activities/get";
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
        if ($email !== null) {
            $formParams['email'] = $this->apiClient->getSerializer()->toFormValue($email);
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\DataMill\SocialMediaActivitiesGetResponse',
                '/social-media/activities/get'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\DataMill\SocialMediaActivitiesGetResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DataMill\SocialMediaActivitiesGetResponse', $e->getResponseHeaders());
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
