<?php
/**
 * UrlCheckResponse
 *
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

use \ArrayAccess;

/**
 * UrlCheckResponse Class Doc Comment
 *
 * @category    Class */
 // @description Response of successful transformation request for /url/check
/**
 * @package     DataMill
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UrlCheckResponse implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'UrlCheckResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'valid' => 'int',
        'url' => 'string',
        'http_code' => 'int',
        'total_time' => 'float',
        'namelookup_time' => 'float',
        'connect_time' => 'float',
        'pretransfer_time' => 'float',
        'starttransfer_time' => 'float',
        'primary_ip' => 'string',
        'primary_port' => 'int',
        'download_content_length' => 'int',
        'content_type' => 'string',
        'redirects' => 'object[]',
        'parameters' => 'object[]'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'valid' => 'valid',
        'url' => 'url',
        'http_code' => 'http_code',
        'total_time' => 'total_time',
        'namelookup_time' => 'namelookup_time',
        'connect_time' => 'connect_time',
        'pretransfer_time' => 'pretransfer_time',
        'starttransfer_time' => 'starttransfer_time',
        'primary_ip' => 'primary_ip',
        'primary_port' => 'primary_port',
        'download_content_length' => 'download_content_length',
        'content_type' => 'content_type',
        'redirects' => 'redirects',
        'parameters' => 'parameters'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'valid' => 'setValid',
        'url' => 'setUrl',
        'http_code' => 'setHttpCode',
        'total_time' => 'setTotalTime',
        'namelookup_time' => 'setNamelookupTime',
        'connect_time' => 'setConnectTime',
        'pretransfer_time' => 'setPretransferTime',
        'starttransfer_time' => 'setStarttransferTime',
        'primary_ip' => 'setPrimaryIp',
        'primary_port' => 'setPrimaryPort',
        'download_content_length' => 'setDownloadContentLength',
        'content_type' => 'setContentType',
        'redirects' => 'setRedirects',
        'parameters' => 'setParameters'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'valid' => 'getValid',
        'url' => 'getUrl',
        'http_code' => 'getHttpCode',
        'total_time' => 'getTotalTime',
        'namelookup_time' => 'getNamelookupTime',
        'connect_time' => 'getConnectTime',
        'pretransfer_time' => 'getPretransferTime',
        'starttransfer_time' => 'getStarttransferTime',
        'primary_ip' => 'getPrimaryIp',
        'primary_port' => 'getPrimaryPort',
        'download_content_length' => 'getDownloadContentLength',
        'content_type' => 'getContentType',
        'redirects' => 'getRedirects',
        'parameters' => 'getParameters'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['valid'] = isset($data['valid']) ? $data['valid'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['http_code'] = isset($data['http_code']) ? $data['http_code'] : null;
        $this->container['total_time'] = isset($data['total_time']) ? $data['total_time'] : null;
        $this->container['namelookup_time'] = isset($data['namelookup_time']) ? $data['namelookup_time'] : null;
        $this->container['connect_time'] = isset($data['connect_time']) ? $data['connect_time'] : null;
        $this->container['pretransfer_time'] = isset($data['pretransfer_time']) ? $data['pretransfer_time'] : null;
        $this->container['starttransfer_time'] = isset($data['starttransfer_time']) ? $data['starttransfer_time'] : null;
        $this->container['primary_ip'] = isset($data['primary_ip']) ? $data['primary_ip'] : null;
        $this->container['primary_port'] = isset($data['primary_port']) ? $data['primary_port'] : null;
        $this->container['download_content_length'] = isset($data['download_content_length']) ? $data['download_content_length'] : null;
        $this->container['content_type'] = isset($data['content_type']) ? $data['content_type'] : null;
        $this->container['redirects'] = isset($data['redirects']) ? $data['redirects'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['valid'] === null) {
            $invalid_properties[] = "'valid' can't be null";
        }
        if ($this->container['url'] === null) {
            $invalid_properties[] = "'url' can't be null";
        }
        if ($this->container['http_code'] === null) {
            $invalid_properties[] = "'http_code' can't be null";
        }
        if ($this->container['total_time'] === null) {
            $invalid_properties[] = "'total_time' can't be null";
        }
        if ($this->container['namelookup_time'] === null) {
            $invalid_properties[] = "'namelookup_time' can't be null";
        }
        if ($this->container['connect_time'] === null) {
            $invalid_properties[] = "'connect_time' can't be null";
        }
        if ($this->container['pretransfer_time'] === null) {
            $invalid_properties[] = "'pretransfer_time' can't be null";
        }
        if ($this->container['starttransfer_time'] === null) {
            $invalid_properties[] = "'starttransfer_time' can't be null";
        }
        if ($this->container['primary_ip'] === null) {
            $invalid_properties[] = "'primary_ip' can't be null";
        }
        if ($this->container['primary_port'] === null) {
            $invalid_properties[] = "'primary_port' can't be null";
        }
        if ($this->container['download_content_length'] === null) {
            $invalid_properties[] = "'download_content_length' can't be null";
        }
        if ($this->container['content_type'] === null) {
            $invalid_properties[] = "'content_type' can't be null";
        }
        if ($this->container['redirects'] === null) {
            $invalid_properties[] = "'redirects' can't be null";
        }
        if ($this->container['parameters'] === null) {
            $invalid_properties[] = "'parameters' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['valid'] === null) {
            return false;
        }
        if ($this->container['url'] === null) {
            return false;
        }
        if ($this->container['http_code'] === null) {
            return false;
        }
        if ($this->container['total_time'] === null) {
            return false;
        }
        if ($this->container['namelookup_time'] === null) {
            return false;
        }
        if ($this->container['connect_time'] === null) {
            return false;
        }
        if ($this->container['pretransfer_time'] === null) {
            return false;
        }
        if ($this->container['starttransfer_time'] === null) {
            return false;
        }
        if ($this->container['primary_ip'] === null) {
            return false;
        }
        if ($this->container['primary_port'] === null) {
            return false;
        }
        if ($this->container['download_content_length'] === null) {
            return false;
        }
        if ($this->container['content_type'] === null) {
            return false;
        }
        if ($this->container['redirects'] === null) {
            return false;
        }
        if ($this->container['parameters'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets valid
     * @return int
     */
    public function getValid()
    {
        return $this->container['valid'];
    }

    /**
     * Sets valid
     * @param int $valid Flag if the root resource (website) is valid or not [0, 1]
     * @return $this
     */
    public function setValid($valid)
    {
        $this->container['valid'] = $valid;

        return $this;
    }

    /**
     * Gets url
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     * @param string $url The final url of the resource
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets http_code
     * @return int
     */
    public function getHttpCode()
    {
        return $this->container['http_code'];
    }

    /**
     * Sets http_code
     * @param int $http_code The HTTP status code according to https://en.wikipedia.org/wiki/List_of_HTTP_status_codes
     * @return $this
     */
    public function setHttpCode($http_code)
    {
        $this->container['http_code'] = $http_code;

        return $this;
    }

    /**
     * Gets total_time
     * @return float
     */
    public function getTotalTime()
    {
        return $this->container['total_time'];
    }

    /**
     * Sets total_time
     * @param float $total_time Total time of the request in seconds
     * @return $this
     */
    public function setTotalTime($total_time)
    {
        $this->container['total_time'] = $total_time;

        return $this;
    }

    /**
     * Gets namelookup_time
     * @return float
     */
    public function getNamelookupTime()
    {
        return $this->container['namelookup_time'];
    }

    /**
     * Sets namelookup_time
     * @param float $namelookup_time Time until host name resolved in seconds
     * @return $this
     */
    public function setNamelookupTime($namelookup_time)
    {
        $this->container['namelookup_time'] = $namelookup_time;

        return $this;
    }

    /**
     * Gets connect_time
     * @return float
     */
    public function getConnectTime()
    {
        return $this->container['connect_time'];
    }

    /**
     * Sets connect_time
     * @param float $connect_time Time until connection established in seconds
     * @return $this
     */
    public function setConnectTime($connect_time)
    {
        $this->container['connect_time'] = $connect_time;

        return $this;
    }

    /**
     * Gets pretransfer_time
     * @return float
     */
    public function getPretransferTime()
    {
        return $this->container['pretransfer_time'];
    }

    /**
     * Sets pretransfer_time
     * @param float $pretransfer_time Time until file transfer began in seconds
     * @return $this
     */
    public function setPretransferTime($pretransfer_time)
    {
        $this->container['pretransfer_time'] = $pretransfer_time;

        return $this;
    }

    /**
     * Gets starttransfer_time
     * @return float
     */
    public function getStarttransferTime()
    {
        return $this->container['starttransfer_time'];
    }

    /**
     * Sets starttransfer_time
     * @param float $starttransfer_time Time to first byte in seconds
     * @return $this
     */
    public function setStarttransferTime($starttransfer_time)
    {
        $this->container['starttransfer_time'] = $starttransfer_time;

        return $this;
    }

    /**
     * Gets primary_ip
     * @return string
     */
    public function getPrimaryIp()
    {
        return $this->container['primary_ip'];
    }

    /**
     * Sets primary_ip
     * @param string $primary_ip IP address of the most recent connection
     * @return $this
     */
    public function setPrimaryIp($primary_ip)
    {
        $this->container['primary_ip'] = $primary_ip;

        return $this;
    }

    /**
     * Gets primary_port
     * @return int
     */
    public function getPrimaryPort()
    {
        return $this->container['primary_port'];
    }

    /**
     * Sets primary_port
     * @param int $primary_port Destination port of the connection
     * @return $this
     */
    public function setPrimaryPort($primary_port)
    {
        $this->container['primary_port'] = $primary_port;

        return $this;
    }

    /**
     * Gets download_content_length
     * @return int
     */
    public function getDownloadContentLength()
    {
        return $this->container['download_content_length'];
    }

    /**
     * Sets download_content_length
     * @param int $download_content_length Number of bytes to download from the resource (-1 means no information available)
     * @return $this
     */
    public function setDownloadContentLength($download_content_length)
    {
        $this->container['download_content_length'] = $download_content_length;

        return $this;
    }

    /**
     * Gets content_type
     * @return string
     */
    public function getContentType()
    {
        return $this->container['content_type'];
    }

    /**
     * Sets content_type
     * @param string $content_type Content type of the requested resource
     * @return $this
     */
    public function setContentType($content_type)
    {
        $this->container['content_type'] = $content_type;

        return $this;
    }

    /**
     * Gets redirects
     * @return object[]
     */
    public function getRedirects()
    {
        return $this->container['redirects'];
    }

    /**
     * Sets redirects
     * @param object[] $redirects Array collection of all urls including redirects
     * @return $this
     */
    public function setRedirects($redirects)
    {
        $this->container['redirects'] = $redirects;

        return $this;
    }

    /**
     * Gets parameters
     * @return object[]
     */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
     * Sets parameters
     * @param object[] $parameters Array collection of all url parameters
     * @return $this
     */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\DataMill\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\DataMill\ObjectSerializer::sanitizeForSerialization($this));
    }
}
