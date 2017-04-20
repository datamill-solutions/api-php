<?php
/**
 * AddressHouseNumberExtractResponse
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

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * AddressHouseNumberExtractResponse Class Doc Comment
 *
 * @category    Class */
 // @description Response of successful transformation request for /address/housenumber/extract
/**
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AddressHouseNumberExtractResponse implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'AddressHouseNumberExtractResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'street' => 'string',
        'housenumber' => 'string',
        'housenumber_only' => 'string',
        'housenumber_addition' => 'string'
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
        'street' => 'street',
        'housenumber' => 'housenumber',
        'housenumber_only' => 'housenumber_only',
        'housenumber_addition' => 'housenumber_addition'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'street' => 'setStreet',
        'housenumber' => 'setHousenumber',
        'housenumber_only' => 'setHousenumberOnly',
        'housenumber_addition' => 'setHousenumberAddition'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'street' => 'getStreet',
        'housenumber' => 'getHousenumber',
        'housenumber_only' => 'getHousenumberOnly',
        'housenumber_addition' => 'getHousenumberAddition'
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
        $this->container['street'] = isset($data['street']) ? $data['street'] : null;
        $this->container['housenumber'] = isset($data['housenumber']) ? $data['housenumber'] : null;
        $this->container['housenumber_only'] = isset($data['housenumber_only']) ? $data['housenumber_only'] : null;
        $this->container['housenumber_addition'] = isset($data['housenumber_addition']) ? $data['housenumber_addition'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['street'] === null) {
            $invalid_properties[] = "'street' can't be null";
        }
        if ($this->container['housenumber'] === null) {
            $invalid_properties[] = "'housenumber' can't be null";
        }
        if ($this->container['housenumber_only'] === null) {
            $invalid_properties[] = "'housenumber_only' can't be null";
        }
        if ($this->container['housenumber_addition'] === null) {
            $invalid_properties[] = "'housenumber_addition' can't be null";
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
        if ($this->container['street'] === null) {
            return false;
        }
        if ($this->container['housenumber'] === null) {
            return false;
        }
        if ($this->container['housenumber_only'] === null) {
            return false;
        }
        if ($this->container['housenumber_addition'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets street
     * @return string
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     * @param string $street
     * @return $this
     */
    public function setStreet($street)
    {
        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets housenumber
     * @return string
     */
    public function getHousenumber()
    {
        return $this->container['housenumber'];
    }

    /**
     * Sets housenumber
     * @param string $housenumber
     * @return $this
     */
    public function setHousenumber($housenumber)
    {
        $this->container['housenumber'] = $housenumber;

        return $this;
    }

    /**
     * Gets housenumber_only
     * @return string
     */
    public function getHousenumberOnly()
    {
        return $this->container['housenumber_only'];
    }

    /**
     * Sets housenumber_only
     * @param string $housenumber_only
     * @return $this
     */
    public function setHousenumberOnly($housenumber_only)
    {
        $this->container['housenumber_only'] = $housenumber_only;

        return $this;
    }

    /**
     * Gets housenumber_addition
     * @return string
     */
    public function getHousenumberAddition()
    {
        return $this->container['housenumber_addition'];
    }

    /**
     * Sets housenumber_addition
     * @param string $housenumber_addition
     * @return $this
     */
    public function setHousenumberAddition($housenumber_addition)
    {
        $this->container['housenumber_addition'] = $housenumber_addition;

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
