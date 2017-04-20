<?php
/**
 * BusinessDataUndeliverableContactsResponse
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
 * **_/data.mill for applications** is the most versatile and powerful API for all aspects of data quality in your business application.  Use **_/data.mill** to check, correct and enrich personal data and business information. The internationally applicable functions can be integrated easily into existing applications, whether desktop, online or mobile and thus enable you to professionally improve your customer or supplier database, directly in your system. Due to **_/data.mill**'s pay-per-use credit model there are no setup fees or fixed monthly subscription fees.  **_/data.mill** is constantly evolving and upgraded with the latest technology and data services available on the market.
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
 * BusinessDataUndeliverableContactsResponse Class Doc Comment
 *
 * @category    Class */
 // @description Response of successful transformation request for /business-data/undeliverable-contacts/search
/**
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BusinessDataUndeliverableContactsResponse implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'BusinessDataUndeliverableContactsResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'undeliverable' => 'string',
        'deceased' => 'string',
        'moved' => 'string',
        'new_address_available' => 'string',
        'contact' => '\Swagger\Client\Model\BusinessDataUndeliverableContactsSearchContact'
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
        'undeliverable' => 'undeliverable',
        'deceased' => 'deceased',
        'moved' => 'moved',
        'new_address_available' => 'new_address_available',
        'contact' => 'contact'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'undeliverable' => 'setUndeliverable',
        'deceased' => 'setDeceased',
        'moved' => 'setMoved',
        'new_address_available' => 'setNewAddressAvailable',
        'contact' => 'setContact'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'undeliverable' => 'getUndeliverable',
        'deceased' => 'getDeceased',
        'moved' => 'getMoved',
        'new_address_available' => 'getNewAddressAvailable',
        'contact' => 'getContact'
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

    const UNDELIVERABLE__0 = '0';
    const UNDELIVERABLE__1 = '1';
    const DECEASED__0 = '0';
    const DECEASED__1 = '1';
    const MOVED__0 = '0';
    const MOVED__1 = '1';
    const NEW_ADDRESS_AVAILABLE__0 = '0';
    const NEW_ADDRESS_AVAILABLE__1 = '1';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getUndeliverableAllowableValues()
    {
        return [
            self::UNDELIVERABLE__0,
            self::UNDELIVERABLE__1,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getDeceasedAllowableValues()
    {
        return [
            self::DECEASED__0,
            self::DECEASED__1,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getMovedAllowableValues()
    {
        return [
            self::MOVED__0,
            self::MOVED__1,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getNewAddressAvailableAllowableValues()
    {
        return [
            self::NEW_ADDRESS_AVAILABLE__0,
            self::NEW_ADDRESS_AVAILABLE__1,
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
        $this->container['undeliverable'] = isset($data['undeliverable']) ? $data['undeliverable'] : null;
        $this->container['deceased'] = isset($data['deceased']) ? $data['deceased'] : null;
        $this->container['moved'] = isset($data['moved']) ? $data['moved'] : null;
        $this->container['new_address_available'] = isset($data['new_address_available']) ? $data['new_address_available'] : null;
        $this->container['contact'] = isset($data['contact']) ? $data['contact'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['undeliverable'] === null) {
            $invalid_properties[] = "'undeliverable' can't be null";
        }
        $allowed_values = ["0", "1"];
        if (!in_array($this->container['undeliverable'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'undeliverable', must be one of '0', '1'.";
        }

        if ($this->container['deceased'] === null) {
            $invalid_properties[] = "'deceased' can't be null";
        }
        $allowed_values = ["0", "1"];
        if (!in_array($this->container['deceased'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'deceased', must be one of '0', '1'.";
        }

        if ($this->container['moved'] === null) {
            $invalid_properties[] = "'moved' can't be null";
        }
        $allowed_values = ["0", "1"];
        if (!in_array($this->container['moved'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'moved', must be one of '0', '1'.";
        }

        if ($this->container['new_address_available'] === null) {
            $invalid_properties[] = "'new_address_available' can't be null";
        }
        $allowed_values = ["0", "1"];
        if (!in_array($this->container['new_address_available'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'new_address_available', must be one of '0', '1'.";
        }

        if ($this->container['contact'] === null) {
            $invalid_properties[] = "'contact' can't be null";
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
        if ($this->container['undeliverable'] === null) {
            return false;
        }
        $allowed_values = ["0", "1"];
        if (!in_array($this->container['undeliverable'], $allowed_values)) {
            return false;
        }
        if ($this->container['deceased'] === null) {
            return false;
        }
        $allowed_values = ["0", "1"];
        if (!in_array($this->container['deceased'], $allowed_values)) {
            return false;
        }
        if ($this->container['moved'] === null) {
            return false;
        }
        $allowed_values = ["0", "1"];
        if (!in_array($this->container['moved'], $allowed_values)) {
            return false;
        }
        if ($this->container['new_address_available'] === null) {
            return false;
        }
        $allowed_values = ["0", "1"];
        if (!in_array($this->container['new_address_available'], $allowed_values)) {
            return false;
        }
        if ($this->container['contact'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets undeliverable
     * @return string
     */
    public function getUndeliverable()
    {
        return $this->container['undeliverable'];
    }

    /**
     * Sets undeliverable
     * @param string $undeliverable
     * @return $this
     */
    public function setUndeliverable($undeliverable)
    {
        $allowed_values = array('0', '1');
        if ((!in_array($undeliverable, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'undeliverable', must be one of '0', '1'");
        }
        $this->container['undeliverable'] = $undeliverable;

        return $this;
    }

    /**
     * Gets deceased
     * @return string
     */
    public function getDeceased()
    {
        return $this->container['deceased'];
    }

    /**
     * Sets deceased
     * @param string $deceased
     * @return $this
     */
    public function setDeceased($deceased)
    {
        $allowed_values = array('0', '1');
        if ((!in_array($deceased, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'deceased', must be one of '0', '1'");
        }
        $this->container['deceased'] = $deceased;

        return $this;
    }

    /**
     * Gets moved
     * @return string
     */
    public function getMoved()
    {
        return $this->container['moved'];
    }

    /**
     * Sets moved
     * @param string $moved
     * @return $this
     */
    public function setMoved($moved)
    {
        $allowed_values = array('0', '1');
        if ((!in_array($moved, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'moved', must be one of '0', '1'");
        }
        $this->container['moved'] = $moved;

        return $this;
    }

    /**
     * Gets new_address_available
     * @return string
     */
    public function getNewAddressAvailable()
    {
        return $this->container['new_address_available'];
    }

    /**
     * Sets new_address_available
     * @param string $new_address_available
     * @return $this
     */
    public function setNewAddressAvailable($new_address_available)
    {
        $allowed_values = array('0', '1');
        if ((!in_array($new_address_available, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'new_address_available', must be one of '0', '1'");
        }
        $this->container['new_address_available'] = $new_address_available;

        return $this;
    }

    /**
     * Gets contact
     * @return \Swagger\Client\Model\BusinessDataUndeliverableContactsSearchContact
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     * @param \Swagger\Client\Model\BusinessDataUndeliverableContactsSearchContact $contact
     * @return $this
     */
    public function setContact($contact)
    {
        $this->container['contact'] = $contact;

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
