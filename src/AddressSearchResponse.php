<?php
/**
 * AddressSearchResponse
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
 * AddressSearchResponse Class Doc Comment
 *
 * @category    Class */
 // @description Response of successful transformation request for /address/_*
/**
 * @package     DataMill
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AddressSearchResponse implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'AddressSearchResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'country_iso_2' => 'string',
        'country_iso_3' => 'string',
        'country' => 'string',
        'state' => 'string',
        'state_name' => 'string',
        'state_code' => 'string',
        'county' => 'string',
        'district' => 'string',
        'zip' => 'string',
        'city' => 'string',
        'street' => 'string',
        'housenumber' => 'string',
        'additional_data' => 'string',
        'relevance' => 'string',
        'latitude' => 'string',
        'longitude' => 'string',
        'navigation_latitude' => 'string',
        'navigation_longitude' => 'string',
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
        'country_iso_2' => 'country_iso_2',
        'country_iso_3' => 'country_iso_3',
        'country' => 'country',
        'state' => 'state',
        'state_name' => 'state_name',
        'state_code' => 'state_code',
        'county' => 'county',
        'district' => 'district',
        'zip' => 'zip',
        'city' => 'city',
        'street' => 'street',
        'housenumber' => 'housenumber',
        'additional_data' => 'additional_data',
        'relevance' => 'relevance',
        'latitude' => 'latitude',
        'longitude' => 'longitude',
        'navigation_latitude' => 'navigation_latitude',
        'navigation_longitude' => 'navigation_longitude',
        'matchlevel' => 'matchlevel'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'country_iso_2' => 'setCountryIso2',
        'country_iso_3' => 'setCountryIso3',
        'country' => 'setCountry',
        'state' => 'setState',
        'state_name' => 'setStateName',
        'state_code' => 'setStateCode',
        'county' => 'setCounty',
        'district' => 'setDistrict',
        'zip' => 'setZip',
        'city' => 'setCity',
        'street' => 'setStreet',
        'housenumber' => 'setHousenumber',
        'additional_data' => 'setAdditionalData',
        'relevance' => 'setRelevance',
        'latitude' => 'setLatitude',
        'longitude' => 'setLongitude',
        'navigation_latitude' => 'setNavigationLatitude',
        'navigation_longitude' => 'setNavigationLongitude',
        'matchlevel' => 'setMatchlevel'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'country_iso_2' => 'getCountryIso2',
        'country_iso_3' => 'getCountryIso3',
        'country' => 'getCountry',
        'state' => 'getState',
        'state_name' => 'getStateName',
        'state_code' => 'getStateCode',
        'county' => 'getCounty',
        'district' => 'getDistrict',
        'zip' => 'getZip',
        'city' => 'getCity',
        'street' => 'getStreet',
        'housenumber' => 'getHousenumber',
        'additional_data' => 'getAdditionalData',
        'relevance' => 'getRelevance',
        'latitude' => 'getLatitude',
        'longitude' => 'getLongitude',
        'navigation_latitude' => 'getNavigationLatitude',
        'navigation_longitude' => 'getNavigationLongitude',
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

    const MATCHLEVEL_HOUSENUMBER = 'housenumber';
    const MATCHLEVEL_STREET = 'street';
    const MATCHLEVEL_GENERAL = 'general';
    const MATCHLEVEL_ = '';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getMatchlevelAllowableValues()
    {
        return [
            self::MATCHLEVEL_HOUSENUMBER,
            self::MATCHLEVEL_STREET,
            self::MATCHLEVEL_GENERAL,
            self::MATCHLEVEL_,
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
        $this->container['country_iso_2'] = isset($data['country_iso_2']) ? $data['country_iso_2'] : null;
        $this->container['country_iso_3'] = isset($data['country_iso_3']) ? $data['country_iso_3'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['state_name'] = isset($data['state_name']) ? $data['state_name'] : null;
        $this->container['state_code'] = isset($data['state_code']) ? $data['state_code'] : null;
        $this->container['county'] = isset($data['county']) ? $data['county'] : null;
        $this->container['district'] = isset($data['district']) ? $data['district'] : null;
        $this->container['zip'] = isset($data['zip']) ? $data['zip'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['street'] = isset($data['street']) ? $data['street'] : null;
        $this->container['housenumber'] = isset($data['housenumber']) ? $data['housenumber'] : null;
        $this->container['additional_data'] = isset($data['additional_data']) ? $data['additional_data'] : null;
        $this->container['relevance'] = isset($data['relevance']) ? $data['relevance'] : null;
        $this->container['latitude'] = isset($data['latitude']) ? $data['latitude'] : null;
        $this->container['longitude'] = isset($data['longitude']) ? $data['longitude'] : null;
        $this->container['navigation_latitude'] = isset($data['navigation_latitude']) ? $data['navigation_latitude'] : null;
        $this->container['navigation_longitude'] = isset($data['navigation_longitude']) ? $data['navigation_longitude'] : null;
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
        if ($this->container['country_iso_2'] === null) {
            $invalid_properties[] = "'country_iso_2' can't be null";
        }
        if ($this->container['country_iso_3'] === null) {
            $invalid_properties[] = "'country_iso_3' can't be null";
        }
        if ($this->container['country'] === null) {
            $invalid_properties[] = "'country' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalid_properties[] = "'state' can't be null";
        }
        if ($this->container['state_name'] === null) {
            $invalid_properties[] = "'state_name' can't be null";
        }
        if ($this->container['state_code'] === null) {
            $invalid_properties[] = "'state_code' can't be null";
        }
        if ($this->container['county'] === null) {
            $invalid_properties[] = "'county' can't be null";
        }
        if ($this->container['district'] === null) {
            $invalid_properties[] = "'district' can't be null";
        }
        if ($this->container['zip'] === null) {
            $invalid_properties[] = "'zip' can't be null";
        }
        if ($this->container['city'] === null) {
            $invalid_properties[] = "'city' can't be null";
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
        if ($this->container['relevance'] === null) {
            $invalid_properties[] = "'relevance' can't be null";
        }
        if ($this->container['latitude'] === null) {
            $invalid_properties[] = "'latitude' can't be null";
        }
        if ($this->container['longitude'] === null) {
            $invalid_properties[] = "'longitude' can't be null";
        }
        if ($this->container['navigation_latitude'] === null) {
            $invalid_properties[] = "'navigation_latitude' can't be null";
        }
        if ($this->container['navigation_longitude'] === null) {
            $invalid_properties[] = "'navigation_longitude' can't be null";
        }
        if ($this->container['matchlevel'] === null) {
            $invalid_properties[] = "'matchlevel' can't be null";
        }
        $allowed_values = ["housenumber", "street", "general", ""];
        if (!in_array($this->container['matchlevel'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'matchlevel', must be one of 'housenumber', 'street', 'general', ''.";
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
        if ($this->container['country_iso_2'] === null) {
            return false;
        }
        if ($this->container['country_iso_3'] === null) {
            return false;
        }
        if ($this->container['country'] === null) {
            return false;
        }
        if ($this->container['state'] === null) {
            return false;
        }
        if ($this->container['state_name'] === null) {
            return false;
        }
        if ($this->container['state_code'] === null) {
            return false;
        }
        if ($this->container['county'] === null) {
            return false;
        }
        if ($this->container['district'] === null) {
            return false;
        }
        if ($this->container['zip'] === null) {
            return false;
        }
        if ($this->container['city'] === null) {
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
        if ($this->container['relevance'] === null) {
            return false;
        }
        if ($this->container['latitude'] === null) {
            return false;
        }
        if ($this->container['longitude'] === null) {
            return false;
        }
        if ($this->container['navigation_latitude'] === null) {
            return false;
        }
        if ($this->container['navigation_longitude'] === null) {
            return false;
        }
        if ($this->container['matchlevel'] === null) {
            return false;
        }
        $allowed_values = ["housenumber", "street", "general", ""];
        if (!in_array($this->container['matchlevel'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets country_iso_2
     * @return string
     */
    public function getCountryIso2()
    {
        return $this->container['country_iso_2'];
    }

    /**
     * Sets country_iso_2
     * @param string $country_iso_2
     * @return $this
     */
    public function setCountryIso2($country_iso_2)
    {
        $this->container['country_iso_2'] = $country_iso_2;

        return $this;
    }

    /**
     * Gets country_iso_3
     * @return string
     */
    public function getCountryIso3()
    {
        return $this->container['country_iso_3'];
    }

    /**
     * Sets country_iso_3
     * @param string $country_iso_3
     * @return $this
     */
    public function setCountryIso3($country_iso_3)
    {
        $this->container['country_iso_3'] = $country_iso_3;

        return $this;
    }

    /**
     * Gets country
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     * @param string $country
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

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
     * Gets state_name
     * @return string
     */
    public function getStateName()
    {
        return $this->container['state_name'];
    }

    /**
     * Sets state_name
     * @param string $state_name
     * @return $this
     */
    public function setStateName($state_name)
    {
        $this->container['state_name'] = $state_name;

        return $this;
    }

    /**
     * Gets state_code
     * @return string
     */
    public function getStateCode()
    {
        return $this->container['state_code'];
    }

    /**
     * Sets state_code
     * @param string $state_code
     * @return $this
     */
    public function setStateCode($state_code)
    {
        $this->container['state_code'] = $state_code;

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
     * Gets district
     * @return string
     */
    public function getDistrict()
    {
        return $this->container['district'];
    }

    /**
     * Sets district
     * @param string $district
     * @return $this
     */
    public function setDistrict($district)
    {
        $this->container['district'] = $district;

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
     * Gets navigation_latitude
     * @return string
     */
    public function getNavigationLatitude()
    {
        return $this->container['navigation_latitude'];
    }

    /**
     * Sets navigation_latitude
     * @param string $navigation_latitude
     * @return $this
     */
    public function setNavigationLatitude($navigation_latitude)
    {
        $this->container['navigation_latitude'] = $navigation_latitude;

        return $this;
    }

    /**
     * Gets navigation_longitude
     * @return string
     */
    public function getNavigationLongitude()
    {
        return $this->container['navigation_longitude'];
    }

    /**
     * Sets navigation_longitude
     * @param string $navigation_longitude
     * @return $this
     */
    public function setNavigationLongitude($navigation_longitude)
    {
        $this->container['navigation_longitude'] = $navigation_longitude;

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
        $allowed_values = array('housenumber', 'street', 'general', '');
        if ((!in_array($matchlevel, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'matchlevel', must be one of 'housenumber', 'street', 'general', ''");
        }
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
            return json_encode(\DataMill\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\DataMill\ObjectSerializer::sanitizeForSerialization($this));
    }
}
