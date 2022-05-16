<?php
/**
 * PackageDetails
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Easy Ship
 *
 * The Selling Partner API for Easy Ship helps you build applications that help sellers manage and ship Amazon Easy Ship orders. Your Easy Ship applications can: * Get available time slots for packages to be scheduled for delivery. * Schedule, reschedule, and cancel Easy Ship orders. * Print labels, invoices, and warranties. See the [Marketplace Support Table](https://developer-docs.amazon.com/sp-api/docs/easy-ship-api-v2022-03-23-use-case-guide) for the differences in Easy Ship operations by marketplace.
 *
 * The version of the OpenAPI document: 2022-03-23
 * Contact: marketplaceapitest@amazon.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\EasyShipV20220323;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;
use \SellingPartnerApi\Model\ModelInterface;

/**
 * PackageDetails Class Doc Comment
 *
 * @category Class
 * @description Package details. Includes &#x60;packageItems&#x60;, &#x60;packageTimeSlot&#x60;, and &#x60;packageIdentifier&#x60;.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class PackageDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PackageDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'package_items' => '\SellingPartnerApi\Model\EasyShipV20220323\Item[]',
        'package_time_slot' => '\SellingPartnerApi\Model\EasyShipV20220323\TimeSlot',
        'package_identifier' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'package_items' => null,
        'package_time_slot' => null,
        'package_identifier' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'package_items' => 'packageItems',
        'package_time_slot' => 'packageTimeSlot',
        'package_identifier' => 'packageIdentifier'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'package_items' => 'setPackageItems',
        'package_time_slot' => 'setPackageTimeSlot',
        'package_identifier' => 'setPackageIdentifier'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'package_items' => 'getPackageItems',
        'package_time_slot' => 'getPackageTimeSlot',
        'package_identifier' => 'getPackageIdentifier'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    
    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['package_items'] = $data['package_items'] ?? null;
        $this->container['package_time_slot'] = $data['package_time_slot'] ?? null;
        $this->container['package_identifier'] = $data['package_identifier'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['package_items']) && (count($this->container['package_items']) > 500)) {
            $invalidProperties[] = "invalid value for 'package_items', number of items must be less than or equal to 500.";
        }

        if ($this->container['package_time_slot'] === null) {
            $invalidProperties[] = "'package_time_slot' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets package_items
     *
     * @return \SellingPartnerApi\Model\EasyShipV20220323\Item[]|null
     */
    public function getPackageItems()
    {
        return $this->container['package_items'];
    }

    /**
     * Sets package_items
     *
     * @param \SellingPartnerApi\Model\EasyShipV20220323\Item[]|null $package_items A list of items contained in the package.
     *
     * @return self
     */
    public function setPackageItems($package_items)
    {

        if (!is_null($package_items) && (count($package_items) > 500)) {
            throw new \InvalidArgumentException('invalid value for $package_items when calling PackageDetails., number of items must be less than or equal to 500.');
        }
        $this->container['package_items'] = $package_items;

        return $this;
    }
    /**
     * Gets package_time_slot
     *
     * @return \SellingPartnerApi\Model\EasyShipV20220323\TimeSlot
     */
    public function getPackageTimeSlot()
    {
        return $this->container['package_time_slot'];
    }

    /**
     * Sets package_time_slot
     *
     * @param \SellingPartnerApi\Model\EasyShipV20220323\TimeSlot $package_time_slot package_time_slot
     *
     * @return self
     */
    public function setPackageTimeSlot($package_time_slot)
    {
        $this->container['package_time_slot'] = $package_time_slot;

        return $this;
    }
    /**
     * Gets package_identifier
     *
     * @return string|null
     */
    public function getPackageIdentifier()
    {
        return $this->container['package_identifier'];
    }

    /**
     * Sets package_identifier
     *
     * @param string|null $package_identifier Optional seller-created identifier that is printed on the shipping label to help the seller identify the package.
     *
     * @return self
     */
    public function setPackageIdentifier($package_identifier)
    {
        $this->container['package_identifier'] = $package_identifier;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

