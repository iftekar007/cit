<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * Address Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 */
class Address implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'address_line_1' => 'string',
        'address_line_2' => 'string',
        'address_line_3' => 'string',
        'locality' => 'string',
        'sublocality' => 'string',
        'sublocality_2' => 'string',
        'sublocality_3' => 'string',
        'administrative_district_level_1' => 'string',
        'administrative_district_level_2' => 'string',
        'administrative_district_level_3' => 'string',
        'postal_code' => 'string',
        'country' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'organization' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'address_line_1' => 'address_line_1',
        'address_line_2' => 'address_line_2',
        'address_line_3' => 'address_line_3',
        'locality' => 'locality',
        'sublocality' => 'sublocality',
        'sublocality_2' => 'sublocality_2',
        'sublocality_3' => 'sublocality_3',
        'administrative_district_level_1' => 'administrative_district_level_1',
        'administrative_district_level_2' => 'administrative_district_level_2',
        'administrative_district_level_3' => 'administrative_district_level_3',
        'postal_code' => 'postal_code',
        'country' => 'country',
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'organization' => 'organization'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'address_line_1' => 'setAddressLine1',
        'address_line_2' => 'setAddressLine2',
        'address_line_3' => 'setAddressLine3',
        'locality' => 'setLocality',
        'sublocality' => 'setSublocality',
        'sublocality_2' => 'setSublocality2',
        'sublocality_3' => 'setSublocality3',
        'administrative_district_level_1' => 'setAdministrativeDistrictLevel1',
        'administrative_district_level_2' => 'setAdministrativeDistrictLevel2',
        'administrative_district_level_3' => 'setAdministrativeDistrictLevel3',
        'postal_code' => 'setPostalCode',
        'country' => 'setCountry',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'organization' => 'setOrganization'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'address_line_1' => 'getAddressLine1',
        'address_line_2' => 'getAddressLine2',
        'address_line_3' => 'getAddressLine3',
        'locality' => 'getLocality',
        'sublocality' => 'getSublocality',
        'sublocality_2' => 'getSublocality2',
        'sublocality_3' => 'getSublocality3',
        'administrative_district_level_1' => 'getAdministrativeDistrictLevel1',
        'administrative_district_level_2' => 'getAdministrativeDistrictLevel2',
        'administrative_district_level_3' => 'getAdministrativeDistrictLevel3',
        'postal_code' => 'getPostalCode',
        'country' => 'getCountry',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'organization' => 'getOrganization'
    );
  
    /**
      * $address_line_1 The first line of the address.  Fields that start with `address_line` provide the address's most specific details, like street number, street name, and building name. They do *not* provide less specific details like city, state/province, or country (these details are provided in other fields).
      * @var string
      */
    protected $address_line_1;
    /**
      * $address_line_2 The second line of the address, if any.
      * @var string
      */
    protected $address_line_2;
    /**
      * $address_line_3 The third line of the address, if any.
      * @var string
      */
    protected $address_line_3;
    /**
      * $locality The city or town of the address.
      * @var string
      */
    protected $locality;
    /**
      * $sublocality A civil region within the address's `locality`, if any.
      * @var string
      */
    protected $sublocality;
    /**
      * $sublocality_2 A civil region within the address's `sublocality`, if any.
      * @var string
      */
    protected $sublocality_2;
    /**
      * $sublocality_3 A civil region within the address's `sublocality_2`, if any.
      * @var string
      */
    protected $sublocality_3;
    /**
      * $administrative_district_level_1 A civil entity within the address's country. In the US, this is the state.
      * @var string
      */
    protected $administrative_district_level_1;
    /**
      * $administrative_district_level_2 A civil entity within the address's `administrative_district_level_1`. In the US, this is the county.
      * @var string
      */
    protected $administrative_district_level_2;
    /**
      * $administrative_district_level_3 A civil entity within the address's `administrative_district_level_2`, if any.
      * @var string
      */
    protected $administrative_district_level_3;
    /**
      * $postal_code The address's postal code.
      * @var string
      */
    protected $postal_code;
    /**
      * $country The address's country, in ISO 3166-1-alpha-2 format.
      * @var string
      */
    protected $country;
    /**
      * $first_name Optional first name when it's representing recipient.
      * @var string
      */
    protected $first_name;
    /**
      * $last_name Optional last name when it's representing recipient.
      * @var string
      */
    protected $last_name;
    /**
      * $organization Optional organization name when it's representing recipient.
      * @var string
      */
    protected $organization;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["address_line_1"])) {
              $this->address_line_1 = $data["address_line_1"];
            } else {
              $this->address_line_1 = null;
            }
            if (isset($data["address_line_2"])) {
              $this->address_line_2 = $data["address_line_2"];
            } else {
              $this->address_line_2 = null;
            }
            if (isset($data["address_line_3"])) {
              $this->address_line_3 = $data["address_line_3"];
            } else {
              $this->address_line_3 = null;
            }
            if (isset($data["locality"])) {
              $this->locality = $data["locality"];
            } else {
              $this->locality = null;
            }
            if (isset($data["sublocality"])) {
              $this->sublocality = $data["sublocality"];
            } else {
              $this->sublocality = null;
            }
            if (isset($data["sublocality_2"])) {
              $this->sublocality_2 = $data["sublocality_2"];
            } else {
              $this->sublocality_2 = null;
            }
            if (isset($data["sublocality_3"])) {
              $this->sublocality_3 = $data["sublocality_3"];
            } else {
              $this->sublocality_3 = null;
            }
            if (isset($data["administrative_district_level_1"])) {
              $this->administrative_district_level_1 = $data["administrative_district_level_1"];
            } else {
              $this->administrative_district_level_1 = null;
            }
            if (isset($data["administrative_district_level_2"])) {
              $this->administrative_district_level_2 = $data["administrative_district_level_2"];
            } else {
              $this->administrative_district_level_2 = null;
            }
            if (isset($data["administrative_district_level_3"])) {
              $this->administrative_district_level_3 = $data["administrative_district_level_3"];
            } else {
              $this->administrative_district_level_3 = null;
            }
            if (isset($data["postal_code"])) {
              $this->postal_code = $data["postal_code"];
            } else {
              $this->postal_code = null;
            }
            if (isset($data["country"])) {
              $this->country = $data["country"];
            } else {
              $this->country = null;
            }
            if (isset($data["first_name"])) {
              $this->first_name = $data["first_name"];
            } else {
              $this->first_name = null;
            }
            if (isset($data["last_name"])) {
              $this->last_name = $data["last_name"];
            } else {
              $this->last_name = null;
            }
            if (isset($data["organization"])) {
              $this->organization = $data["organization"];
            } else {
              $this->organization = null;
            }
        }
    }
    /**
     * Gets address_line_1
     * @return string
     */
    public function getAddressLine1()
    {
        return $this->address_line_1;
    }
  
    /**
     * Sets address_line_1
     * @param string $address_line_1 The first line of the address.  Fields that start with `address_line` provide the address's most specific details, like street number, street name, and building name. They do *not* provide less specific details like city, state/province, or country (these details are provided in other fields).
     * @return $this
     */
    public function setAddressLine1($address_line_1)
    {
        $this->address_line_1 = $address_line_1;
        return $this;
    }
    /**
     * Gets address_line_2
     * @return string
     */
    public function getAddressLine2()
    {
        return $this->address_line_2;
    }
  
    /**
     * Sets address_line_2
     * @param string $address_line_2 The second line of the address, if any.
     * @return $this
     */
    public function setAddressLine2($address_line_2)
    {
        $this->address_line_2 = $address_line_2;
        return $this;
    }
    /**
     * Gets address_line_3
     * @return string
     */
    public function getAddressLine3()
    {
        return $this->address_line_3;
    }
  
    /**
     * Sets address_line_3
     * @param string $address_line_3 The third line of the address, if any.
     * @return $this
     */
    public function setAddressLine3($address_line_3)
    {
        $this->address_line_3 = $address_line_3;
        return $this;
    }
    /**
     * Gets locality
     * @return string
     */
    public function getLocality()
    {
        return $this->locality;
    }
  
    /**
     * Sets locality
     * @param string $locality The city or town of the address.
     * @return $this
     */
    public function setLocality($locality)
    {
        $this->locality = $locality;
        return $this;
    }
    /**
     * Gets sublocality
     * @return string
     */
    public function getSublocality()
    {
        return $this->sublocality;
    }
  
    /**
     * Sets sublocality
     * @param string $sublocality A civil region within the address's `locality`, if any.
     * @return $this
     */
    public function setSublocality($sublocality)
    {
        $this->sublocality = $sublocality;
        return $this;
    }
    /**
     * Gets sublocality_2
     * @return string
     */
    public function getSublocality2()
    {
        return $this->sublocality_2;
    }
  
    /**
     * Sets sublocality_2
     * @param string $sublocality_2 A civil region within the address's `sublocality`, if any.
     * @return $this
     */
    public function setSublocality2($sublocality_2)
    {
        $this->sublocality_2 = $sublocality_2;
        return $this;
    }
    /**
     * Gets sublocality_3
     * @return string
     */
    public function getSublocality3()
    {
        return $this->sublocality_3;
    }
  
    /**
     * Sets sublocality_3
     * @param string $sublocality_3 A civil region within the address's `sublocality_2`, if any.
     * @return $this
     */
    public function setSublocality3($sublocality_3)
    {
        $this->sublocality_3 = $sublocality_3;
        return $this;
    }
    /**
     * Gets administrative_district_level_1
     * @return string
     */
    public function getAdministrativeDistrictLevel1()
    {
        return $this->administrative_district_level_1;
    }
  
    /**
     * Sets administrative_district_level_1
     * @param string $administrative_district_level_1 A civil entity within the address's country. In the US, this is the state.
     * @return $this
     */
    public function setAdministrativeDistrictLevel1($administrative_district_level_1)
    {
        $this->administrative_district_level_1 = $administrative_district_level_1;
        return $this;
    }
    /**
     * Gets administrative_district_level_2
     * @return string
     */
    public function getAdministrativeDistrictLevel2()
    {
        return $this->administrative_district_level_2;
    }
  
    /**
     * Sets administrative_district_level_2
     * @param string $administrative_district_level_2 A civil entity within the address's `administrative_district_level_1`. In the US, this is the county.
     * @return $this
     */
    public function setAdministrativeDistrictLevel2($administrative_district_level_2)
    {
        $this->administrative_district_level_2 = $administrative_district_level_2;
        return $this;
    }
    /**
     * Gets administrative_district_level_3
     * @return string
     */
    public function getAdministrativeDistrictLevel3()
    {
        return $this->administrative_district_level_3;
    }
  
    /**
     * Sets administrative_district_level_3
     * @param string $administrative_district_level_3 A civil entity within the address's `administrative_district_level_2`, if any.
     * @return $this
     */
    public function setAdministrativeDistrictLevel3($administrative_district_level_3)
    {
        $this->administrative_district_level_3 = $administrative_district_level_3;
        return $this;
    }
    /**
     * Gets postal_code
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postal_code;
    }
  
    /**
     * Sets postal_code
     * @param string $postal_code The address's postal code.
     * @return $this
     */
    public function setPostalCode($postal_code)
    {
        $this->postal_code = $postal_code;
        return $this;
    }
    /**
     * Gets country
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }
  
    /**
     * Sets country
     * @param string $country The address's country, in ISO 3166-1-alpha-2 format.
     * @return $this
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }
    /**
     * Gets first_name
     * @return string
     */
    public function getFirstName()
    {
        return $this->first_name;
    }
  
    /**
     * Sets first_name
     * @param string $first_name Optional first name when it's representing recipient.
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
        return $this;
    }
    /**
     * Gets last_name
     * @return string
     */
    public function getLastName()
    {
        return $this->last_name;
    }
  
    /**
     * Sets last_name
     * @param string $last_name Optional last name when it's representing recipient.
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
        return $this;
    }
    /**
     * Gets organization
     * @return string
     */
    public function getOrganization()
    {
        return $this->organization;
    }
  
    /**
     * Sets organization
     * @param string $organization Optional organization name when it's representing recipient.
     * @return $this
     */
    public function setOrganization($organization)
    {
        $this->organization = $organization;
        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
