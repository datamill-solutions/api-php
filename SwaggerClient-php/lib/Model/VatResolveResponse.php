<?php
/**
 * VatResolveResponse
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
 * VatResolveResponse Class Doc Comment
 *
 * @category    Class */
 // @description Response of successful transformation request for /vat/resolve
/**
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class VatResolveResponse implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'VatResolveResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'valid' => 'string',
        'countrycode' => 'string',
        'vatnumber' => 'string',
        'name' => 'string',
        'countryname' => 'string',
        'state' => 'string',
        'county' => 'string',
        'city' => 'string',
        'zip' => 'string',
        'street' => 'string',
        'housenumber' => 'string',
        'additional_data' => 'string',
        'raw_address' => 'string',
        'countrycode_iso_3' => 'string',
        'relevance' => 'string',
        'latitude' => 'string',
        'longitude' => 'string',
        'matchlevel' => 'string'
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
        'countrycode' => 'countrycode',
        'vatnumber' => 'vatnumber',
        'name' => 'name',
        'countryname' => 'countryname',
        'state' => 'state',
        'county' => 'county',
        'city' => 'city',
        'zip' => 'zip',
        'street' => 'street',
        'housenumber' => 'housenumber',
        'additional_data' => 'additional_data',
        'raw_address' => 'raw_address',
        'countrycode_iso_3' => 'countrycode_iso_3',
        'relevance' => 'relevance',
        'latitude' => 'latitude',
        'longitude' => 'longitude',
        'matchlevel' => 'matchlevel'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'valid' => 'setValid',
        'countrycode' => 'setCountrycode',
        'vatnumber' => 'setVatnumber',
        'name' => 'setName',
        'countryname' => 'setCountryname',
        'state' => 'setState',
        'county' => 'setCounty',
        'city' => 'setCity',
        'zip' => 'setZip',
        'street' => 'setStreet',
        'housenumber' => 'setHousenumber',
        'additional_data' => 'setAdditionalData',
        'raw_address' => 'setRawAddress',
        'countrycode_iso_3' => 'setCountrycodeIso3',
        'relevance' => 'setRelevance',
        'latitude' => 'setLatitude',
        'longitude' => 'setLongitude',
        'matchlevel' => 'setMatchlevel'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'valid' => 'getValid',
        'countrycode' => 'getCountrycode',
        'vatnumber' => 'getVatnumber',
        'name' => 'getName',
        'countryname' => 'getCountryname',
        'state' => 'getState',
        'county' => 'getCounty',
        'city' => 'getCity',
        'zip' => 'getZip',
        'street' => 'getStreet',
        'housenumber' => 'getHousenumber',
        'additional_data' => 'getAdditionalData',
        'raw_address' => 'getRawAddress',
        'countrycode_iso_3' => 'getCountrycodeIso3',
        'relevance' => 'getRelevance',
        'latitude' => 'getLatitude',
        'longitude' => 'getLongitude',
        'matchlevel' => 'getMatchlevel'
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
        $this->container['countrycode'] = isset($data['countrycode']) ? $data['countrycode'] : null;
        $this->container['vatnumber'] = isset($data['vatnumber']) ? $data['vatnumber'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['countryname'] = isset($data['countryname']) ? $data['countryname'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['county'] = isset($data['county']) ? $data['county'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['zip'] = isset($data['zip']) ? $data['zip'] : null;
        $this->container['street'] = isset($data['street']) ? $data['street'] : null;
        $this->container['housenumber'] = isset($data['housenumber']) ? $data['housenumber'] : null;
        $this->container['additional_data'] = isset($data['additional_data']) ? $data['additional_data'] : null;
        $this->container['raw_address'] = isset($data['raw_address']) ? $data['raw_address'] : null;
        $this->container['countrycode_iso_3'] = isset($data['countrycode_iso_3']) ? $data['countrycode_iso_3'] : null;
        $this->container['relevance'] = isset($data['relevance']) ? $data['relevance'] : null;
        $this->container['latitude'] = isset($data['latitude']) ? $data['latitude'] : null;
        $this->container['longitude'] = isset($data['longitude']) ? $data['longitude'] : null;
        $this->container['matchlevel'] = isset($data['matchlevel']) ? $data['matchlevel'] : null;
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
        if ($this->container['countrycode'] === null) {
            $invalid_properties[] = "'countrycode' can't be null";
        }
        if ($this->container['vatnumber'] === null) {
            $invalid_properties[] = "'vatnumber' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['countryname'] === null) {
            $invalid_properties[] = "'countryname' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalid_properties[] = "'state' can't be null";
        }
        if ($this->container['county'] === null) {
            $invalid_properties[] = "'county' can't be null";
        }
        if ($this->container['city'] === null) {
            $invalid_properties[] = "'city' can't be null";
        }
        if ($this->container['zip'] === null) {
            $invalid_properties[] = "'zip' can't be null";
        }
        if ($this->container['street'] === null) {
            $invalid_properties[] = "'street' can't be null";
        }
        if ($this->container['housenumber'] === null) {
            $invalid_properties[] = "'housenumber' can't be null";
        }
        if ($this->container['additional_data'] === null) {
            $invalid_properties[] = "'additional_data' can't be null";
        }
        if ($this->container['raw_address'] === null) {
            $invalid_properties[] = "'raw_address' can't be null";
        }
        if ($this->container['countrycode_iso_3'] === null) {
            $invalid_properties[] = "'countrycode_iso_3' can't be null";
        }
        if ($this->container['relevance'] === null) {
            $invalid_properties[] = "'relevance' can't be null";
        }
        if ($this->container['latitude'] === null) {
            $invalid_properties[] = "'latitude' can't be null";
        }
        if ($this->container['longitude'] === null) {
            $invalid_properties[] = "'longitude' can't be null";
        }
        if ($this->container['matchlevel'] === null) {
            $invalid_properties[] = "'matchlevel' can't be null";
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
        if ($this->container['countrycode'] === null) {
            return false;
        }
        if ($this->container['vatnumber'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['countryname'] === null) {
            return false;
        }
        if ($this->container['state'] === null) {
            return false;
        }
        if ($this->container['county'] === null) {
            return false;
        }
        if ($this->container['city'] === null) {
            return false;
        }
        if ($this->container['zip'] === null) {
            return false;
        }
        if ($this->container['street'] === null) {
            return false;
        }
        if ($this->container['housenumber'] === null) {
            return false;
        }
        if ($this->container['additional_data'] === null) {
            return false;
        }
        if ($this->container['raw_address'] === null) {
            return false;
        }
        if ($this->container['countrycode_iso_3'] === null) {
            return false;
        }
        if ($this->container['relevance'] === null) {
            return false;
        }
        if ($this->container['latitude'] === null) {
            return false;
        }
        if ($this->container['longitude'] === null) {
            return false;
        }
        if ($this->container['matchlevel'] === null) {
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
     * @param string $valid
     * @return $this
     */
    public function setValid($valid)
    {
        $this->container['valid'] = $valid;

        return $this;
    }

    /**
     * Gets countrycode
     * @return string
     */
    public function getCountrycode()
    {
        return $this->container['countrycode'];
    }

    /**
     * Sets countrycode
     * @param string $countrycode
     * @return $this
     */
    public function setCountrycode($countrycode)
    {
        $this->container['countrycode'] = $countrycode;

        return $this;
    }

    /**
     * Gets vatnumber
     * @return string
     */
    public function getVatnumber()
    {
        return $this->container['vatnumber'];
    }

    /**
     * Sets vatnumber
     * @param string $vatnumber
     * @return $this
     */
    public function setVatnumber($vatnumber)
    {
        $this->container['vatnumber'] = $vatnumber;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets countryname
     * @return string
     */
    public function getCountryname()
    {
        return $this->container['countryname'];
    }

    /**
     * Sets countryname
     * @param string $countryname
     * @return $this
     */
    public function setCountryname($countryname)
    {
        $this->container['countryname'] = $countryname;

        return $this;
    }

    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     * @param string $state
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets county
     * @return string
     */
    public function getCounty()
    {
        return $this->container['county'];
    }

    /**
     * Sets county
     * @param string $county
     * @return $this
     */
    public function setCounty($county)
    {
        $this->container['county'] = $county;

        return $this;
    }

    /**
     * Gets city
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     * @param string $city
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets zip
     * @return string
     */
    public function getZip()
    {
        return $this->container['zip'];
    }

    /**
     * Sets zip
     * @param string $zip
     * @return $this
     */
    public function setZip($zip)
    {
        $this->container['zip'] = $zip;

        return $this;
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
     * Gets additional_data
     * @return string
     */
    public function getAdditionalData()
    {
        return $this->container['additional_data'];
    }

    /**
     * Sets additional_data
     * @param string $additional_data
     * @return $this
     */
    public function setAdditionalData($additional_data)
    {
        $this->container['additional_data'] = $additional_data;

        return $this;
    }

    /**
     * Gets raw_address
     * @return string
     */
    public function getRawAddress()
    {
        return $this->container['raw_address'];
    }

    /**
     * Sets raw_address
     * @param string $raw_address
     * @return $this
     */
    public function setRawAddress($raw_address)
    {
        $this->container['raw_address'] = $raw_address;

        return $this;
    }

    /**
     * Gets countrycode_iso_3
     * @return string
     */
    public function getCountrycodeIso3()
    {
        return $this->container['countrycode_iso_3'];
    }

    /**
     * Sets countrycode_iso_3
     * @param string $countrycode_iso_3
     * @return $this
     */
    public function setCountrycodeIso3($countrycode_iso_3)
    {
        $this->container['countrycode_iso_3'] = $countrycode_iso_3;

        return $this;
    }

    /**
     * Gets relevance
     * @return string
     */
    public function getRelevance()
    {
        return $this->container['relevance'];
    }

    /**
     * Sets relevance
     * @param string $relevance
     * @return $this
     */
    public function setRelevance($relevance)
    {
        $this->container['relevance'] = $relevance;

        return $this;
    }

    /**
     * Gets latitude
     * @return string
     */
    public function getLatitude()
    {
        return $this->container['latitude'];
    }

    /**
     * Sets latitude
     * @param string $latitude
     * @return $this
     */
    public function setLatitude($latitude)
    {
        $this->container['latitude'] = $latitude;

        return $this;
    }

    /**
     * Gets longitude
     * @return string
     */
    public function getLongitude()
    {
        return $this->container['longitude'];
    }

    /**
     * Sets longitude
     * @param string $longitude
     * @return $this
     */
    public function setLongitude($longitude)
    {
        $this->container['longitude'] = $longitude;

        return $this;
    }

    /**
     * Gets matchlevel
     * @return string
     */
    public function getMatchlevel()
    {
        return $this->container['matchlevel'];
    }

    /**
     * Sets matchlevel
     * @param string $matchlevel
     * @return $this
     */
    public function setMatchlevel($matchlevel)
    {
        $this->container['matchlevel'] = $matchlevel;

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