<?php
/**
 * EmailSyntaxCheckResponse
 *
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

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * EmailSyntaxCheckResponse Class Doc Comment
 *
 * @category    Class */
 // @description Response of successful transformation request for /email/syntax/check
/**
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class EmailSyntaxCheckResponse implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'EmailSyntaxCheckResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'valid' => 'string',
        'status_code' => 'string'
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
        'status_code' => 'status_code'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'valid' => 'setValid',
        'status_code' => 'setStatusCode'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'valid' => 'getValid',
        'status_code' => 'getStatusCode'
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

    const VALID__0 = '0';
    const VALID__1 = '1';
    const STATUS_CODE__1 = '1';
    const STATUS_CODE__10 = '10';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getValidAllowableValues()
    {
        return [
            self::VALID__0,
            self::VALID__1,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusCodeAllowableValues()
    {
        return [
            self::STATUS_CODE__1,
            self::STATUS_CODE__10,
        ];
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
        $this->container['status_code'] = isset($data['status_code']) ? $data['status_code'] : null;
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
        $allowed_values = ["0", "1"];
        if (!in_array($this->container['valid'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'valid', must be one of '0', '1'.";
        }

        if ($this->container['status_code'] === null) {
            $invalid_properties[] = "'status_code' can't be null";
        }
        $allowed_values = ["1", "10"];
        if (!in_array($this->container['status_code'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'status_code', must be one of '1', '10'.";
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
        $allowed_values = ["0", "1"];
        if (!in_array($this->container['valid'], $allowed_values)) {
            return false;
        }
        if ($this->container['status_code'] === null) {
            return false;
        }
        $allowed_values = ["1", "10"];
        if (!in_array($this->container['status_code'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets valid
     * @return string
     */
    public function getValid()
    {
        return $this->container['valid'];
    }

    /**
     * Sets valid
     * @param string $valid Flag if the spelling is valid or not. '0' for invalid and '1' for valid syntax.
     * @return $this
     */
    public function setValid($valid)
    {
        $allowed_values = array('0', '1');
        if ((!in_array($valid, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'valid', must be one of '0', '1'");
        }
        $this->container['valid'] = $valid;

        return $this;
    }

    /**
     * Gets status_code
     * @return string
     */
    public function getStatusCode()
    {
        return $this->container['status_code'];
    }

    /**
     * Sets status_code
     * @param string $status_code Unique status code for each possible validation state. '10' for invalid and '1' for valid syntax.
     * @return $this
     */
    public function setStatusCode($status_code)
    {
        $allowed_values = array('1', '10');
        if ((!in_array($status_code, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'status_code', must be one of '1', '10'");
        }
        $this->container['status_code'] = $status_code;

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
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}
