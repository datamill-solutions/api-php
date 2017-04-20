<?php
/**
 * BusinessDataDunsSearchResult
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
 * BusinessDataDunsSearchResult Class Doc Comment
 *
 * @category    Class */
 // @description Single item for results array within response of successful transformation request for /business-data/duns/search
/**
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BusinessDataDunsSearchResult implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'BusinessDataDunsSearchResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'company_name' => 'string',
        'city' => 'string',
        'zip' => 'string',
        'street' => 'string',
        'house_number' => 'string',
        'duns_number' => 'string',
        'duns_number_hq' => 'string',
        'phone_number' => 'string',
        'branch_code' => 'string',
        'branch_description' => 'string',
        'score' => 'float'
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
        'company_name' => 'company_name',
        'city' => 'city',
        'zip' => 'zip',
        'street' => 'street',
        'house_number' => 'house_number',
        'duns_number' => 'duns_number',
        'duns_number_hq' => 'duns_number_hq',
        'phone_number' => 'phone_number',
        'branch_code' => 'branch_code',
        'branch_description' => 'branch_description',
        'score' => 'score'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'company_name' => 'setCompanyName',
        'city' => 'setCity',
        'zip' => 'setZip',
        'street' => 'setStreet',
        'house_number' => 'setHouseNumber',
        'duns_number' => 'setDunsNumber',
        'duns_number_hq' => 'setDunsNumberHq',
        'phone_number' => 'setPhoneNumber',
        'branch_code' => 'setBranchCode',
        'branch_description' => 'setBranchDescription',
        'score' => 'setScore'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'company_name' => 'getCompanyName',
        'city' => 'getCity',
        'zip' => 'getZip',
        'street' => 'getStreet',
        'house_number' => 'getHouseNumber',
        'duns_number' => 'getDunsNumber',
        'duns_number_hq' => 'getDunsNumberHq',
        'phone_number' => 'getPhoneNumber',
        'branch_code' => 'getBranchCode',
        'branch_description' => 'getBranchDescription',
        'score' => 'getScore'
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

    const BRANCH_CODE_B = 'B';
    const BRANCH_CODE_N = 'N';
    const BRANCH_CODE_H = 'H';
    const BRANCH_CODE_S = 'S';
    const BRANCH_DESCRIPTION_BRANCH = 'branch';
    const BRANCH_DESCRIPTION_NOT_A_BRANCH = 'not a branch';
    const BRANCH_DESCRIPTION_HEADQUARTER = 'headquarter';
    const BRANCH_DESCRIPTION_SINGLE_LOCATION = 'single location';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getBranchCodeAllowableValues()
    {
        return [
            self::BRANCH_CODE_B,
            self::BRANCH_CODE_N,
            self::BRANCH_CODE_H,
            self::BRANCH_CODE_S,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getBranchDescriptionAllowableValues()
    {
        return [
            self::BRANCH_DESCRIPTION_BRANCH,
            self::BRANCH_DESCRIPTION_NOT_A_BRANCH,
            self::BRANCH_DESCRIPTION_HEADQUARTER,
            self::BRANCH_DESCRIPTION_SINGLE_LOCATION,
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
        $this->container['company_name'] = isset($data['company_name']) ? $data['company_name'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['zip'] = isset($data['zip']) ? $data['zip'] : null;
        $this->container['street'] = isset($data['street']) ? $data['street'] : null;
        $this->container['house_number'] = isset($data['house_number']) ? $data['house_number'] : null;
        $this->container['duns_number'] = isset($data['duns_number']) ? $data['duns_number'] : null;
        $this->container['duns_number_hq'] = isset($data['duns_number_hq']) ? $data['duns_number_hq'] : null;
        $this->container['phone_number'] = isset($data['phone_number']) ? $data['phone_number'] : null;
        $this->container['branch_code'] = isset($data['branch_code']) ? $data['branch_code'] : null;
        $this->container['branch_description'] = isset($data['branch_description']) ? $data['branch_description'] : null;
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        $allowed_values = ["B", "N", "H", "S"];
        if (!in_array($this->container['branch_code'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'branch_code', must be one of 'B', 'N', 'H', 'S'.";
        }

        $allowed_values = ["branch", "not a branch", "headquarter", "single location"];
        if (!in_array($this->container['branch_description'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'branch_description', must be one of 'branch', 'not a branch', 'headquarter', 'single location'.";
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
        $allowed_values = ["B", "N", "H", "S"];
        if (!in_array($this->container['branch_code'], $allowed_values)) {
            return false;
        }
        $allowed_values = ["branch", "not a branch", "headquarter", "single location"];
        if (!in_array($this->container['branch_description'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets company_name
     * @return string
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     * @param string $company_name
     * @return $this
     */
    public function setCompanyName($company_name)
    {
        $this->container['company_name'] = $company_name;

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
     * Gets house_number
     * @return string
     */
    public function getHouseNumber()
    {
        return $this->container['house_number'];
    }

    /**
     * Sets house_number
     * @param string $house_number
     * @return $this
     */
    public function setHouseNumber($house_number)
    {
        $this->container['house_number'] = $house_number;

        return $this;
    }

    /**
     * Gets duns_number
     * @return string
     */
    public function getDunsNumber()
    {
        return $this->container['duns_number'];
    }

    /**
     * Sets duns_number
     * @param string $duns_number
     * @return $this
     */
    public function setDunsNumber($duns_number)
    {
        $this->container['duns_number'] = $duns_number;

        return $this;
    }

    /**
     * Gets duns_number_hq
     * @return string
     */
    public function getDunsNumberHq()
    {
        return $this->container['duns_number_hq'];
    }

    /**
     * Sets duns_number_hq
     * @param string $duns_number_hq
     * @return $this
     */
    public function setDunsNumberHq($duns_number_hq)
    {
        $this->container['duns_number_hq'] = $duns_number_hq;

        return $this;
    }

    /**
     * Gets phone_number
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     * @param string $phone_number
     * @return $this
     */
    public function setPhoneNumber($phone_number)
    {
        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets branch_code
     * @return string
     */
    public function getBranchCode()
    {
        return $this->container['branch_code'];
    }

    /**
     * Sets branch_code
     * @param string $branch_code
     * @return $this
     */
    public function setBranchCode($branch_code)
    {
        $allowed_values = array('B', 'N', 'H', 'S');
        if (!is_null($branch_code) && (!in_array($branch_code, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'branch_code', must be one of 'B', 'N', 'H', 'S'");
        }
        $this->container['branch_code'] = $branch_code;

        return $this;
    }

    /**
     * Gets branch_description
     * @return string
     */
    public function getBranchDescription()
    {
        return $this->container['branch_description'];
    }

    /**
     * Sets branch_description
     * @param string $branch_description
     * @return $this
     */
    public function setBranchDescription($branch_description)
    {
        $allowed_values = array('branch', 'not a branch', 'headquarter', 'single location');
        if (!is_null($branch_description) && (!in_array($branch_description, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'branch_description', must be one of 'branch', 'not a branch', 'headquarter', 'single location'");
        }
        $this->container['branch_description'] = $branch_description;

        return $this;
    }

    /**
     * Gets score
     * @return float
     */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
     * Sets score
     * @param float $score
     * @return $this
     */
    public function setScore($score)
    {
        $this->container['score'] = $score;

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
