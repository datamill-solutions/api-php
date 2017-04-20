<?php
/**
 * EmailExtendedCheckResponse
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

namespace ;

use \ArrayAccess;

/**
 * EmailExtendedCheckResponse Class Doc Comment
 *
 * @category    Class */
 // @description Response of successful transformation request for /email/extended/check
/**
 * @package     DataMill
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class EmailExtendedCheckResponse implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'EmailExtendedCheckResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'valid' => 'string',
        'description' => 'string',
        'statusCode' => 'string'
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
        'description' => 'description',
        'statusCode' => 'status_code'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'valid' => 'setValid',
        'description' => 'setDescription',
        'statusCode' => 'setStatusCode'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'valid' => 'getValid',
        'description' => 'getDescription',
        'statusCode' => 'getStatusCode'
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
    const VALID_UNKNOWN = 'unknown';
    const DESCRIPTION_SYNTAX = 'syntax';
    const DESCRIPTION_DOMAIN = 'domain';
    const DESCRIPTION_DISPOSABLE = 'disposable';
    const DESCRIPTION_MAIL_SERVER_CURRENTLY_UNAVAILABLE = 'mail server currently unavailable';
    const DESCRIPTION_MAILBOX = 'mailbox';
    const DESCRIPTION_GREYLISTED = 'greylisted';
    const DESCRIPTION_CATCH_ALL = 'catch all';
    const DESCRIPTION_ = '';
    const STATUS_CODE__1 = '1';
    const STATUS_CODE__10 = '10';
    const STATUS_CODE__20 = '20';
    const STATUS_CODE__21 = '21';
    const STATUS_CODE__30 = '30';
    const STATUS_CODE__31 = '31';
    const STATUS_CODE__32 = '32';
    const STATUS_CODE__33 = '33';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getValidAllowableValues()
    {
        return [
            self::VALID__0,
            self::VALID__1,
            self::VALID_UNKNOWN,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getDescriptionAllowableValues()
    {
        return [
            self::DESCRIPTION_SYNTAX,
            self::DESCRIPTION_DOMAIN,
            self::DESCRIPTION_DISPOSABLE,
            self::DESCRIPTION_MAIL_SERVER_CURRENTLY_UNAVAILABLE,
            self::DESCRIPTION_MAILBOX,
            self::DESCRIPTION_GREYLISTED,
            self::DESCRIPTION_CATCH_ALL,
            self::DESCRIPTION_,
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
            self::STATUS_CODE__20,
            self::STATUS_CODE__21,
            self::STATUS_CODE__30,
            self::STATUS_CODE__31,
            self::STATUS_CODE__32,
            self::STATUS_CODE__33,
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['statusCode'] = isset($data['statusCode']) ? $data['statusCode'] : null;
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
        $allowed_values = ["0", "1", "unknown"];
        if (!in_array($this->container['valid'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'valid', must be one of '0', '1', 'unknown'.";
        }

        if ($this->container['description'] === null) {
            $invalid_properties[] = "'description' can't be null";
        }
        $allowed_values = ["syntax", "domain", "disposable", "mail server currently unavailable", "mailbox", "greylisted", "catch all", ""];
        if (!in_array($this->container['description'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'description', must be one of 'syntax', 'domain', 'disposable', 'mail server currently unavailable', 'mailbox', 'greylisted', 'catch all', ''.";
        }

        if ($this->container['statusCode'] === null) {
            $invalid_properties[] = "'statusCode' can't be null";
        }
        $allowed_values = ["1", "10", "20", "21", "30", "31", "32", "33"];
        if (!in_array($this->container['statusCode'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'statusCode', must be one of '1', '10', '20', '21', '30', '31', '32', '33'.";
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
        $allowed_values = ["0", "1", "unknown"];
        if (!in_array($this->container['valid'], $allowed_values)) {
            return false;
        }
        if ($this->container['description'] === null) {
            return false;
        }
        $allowed_values = ["syntax", "domain", "disposable", "mail server currently unavailable", "mailbox", "greylisted", "catch all", ""];
        if (!in_array($this->container['description'], $allowed_values)) {
            return false;
        }
        if ($this->container['statusCode'] === null) {
            return false;
        }
        $allowed_values = ["1", "10", "20", "21", "30", "31", "32", "33"];
        if (!in_array($this->container['statusCode'], $allowed_values)) {
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
     * @param string $valid Flag if the email address is valid or not. '0' for invalid and '1' for valid email address. 'unknown' if mail server could not be verified.
     * @return $this
     */
    public function setValid($valid)
    {
        $allowed_values = array('0', '1', 'unknown');
        if ((!in_array($valid, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'valid', must be one of '0', '1', 'unknown'");
        }
        $this->container['valid'] = $valid;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description Error description if syntax or mail server are invalid. Empty value means no error.  * **syntax**: Typo error in email address  * **domain**: No MX record found for domain part  * **disposable**: Known provider for disposable email addresses  * **mail server currently unavailable**: Connection to mail server could not be established  * **mailbox**: The mail server rejects emails for the given mailbox  * **greylisted**: The request was blocked by the mail server  * **catch all**: The mail server accepts mails for all email addresses
     * @return $this
     */
    public function setDescription($description)
    {
        $allowed_values = array('syntax', 'domain', 'disposable', 'mail server currently unavailable', 'mailbox', 'greylisted', 'catch all', '');
        if ((!in_array($description, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'description', must be one of 'syntax', 'domain', 'disposable', 'mail server currently unavailable', 'mailbox', 'greylisted', 'catch all', ''");
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets statusCode
     * @return string
     */
    public function getStatusCode()
    {
        return $this->container['statusCode'];
    }

    /**
     * Sets statusCode
     * @param string $statusCode Unique status code for each possible validation state.  * **1**: The email address has a valid syntax, a MX record exists, it's not disposable and the mailbox exists.  * **10**: Typo error in email address  * **20**: No MX record found for domain part  * **21**: Known provider for disposable email addresses  * **30**: The mail server rejects emails for the given mailbox  * **31**: Connection to mail server could not be established  * **32**: The request was blocked by the mail server (greylisted)  * **33**: The mail server accepts mails for all email addresses
     * @return $this
     */
    public function setStatusCode($statusCode)
    {
        $allowed_values = array('1', '10', '20', '21', '30', '31', '32', '33');
        if ((!in_array($statusCode, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'statusCode', must be one of '1', '10', '20', '21', '30', '31', '32', '33'");
        }
        $this->container['statusCode'] = $statusCode;

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
