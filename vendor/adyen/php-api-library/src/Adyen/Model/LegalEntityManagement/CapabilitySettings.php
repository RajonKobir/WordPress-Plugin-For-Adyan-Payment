<?php

/**
 * Legal Entity Management API
 *
 * The version of the OpenAPI document: 3
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.4.0
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Adyen\Model\LegalEntityManagement;

use \ArrayAccess;
use Adyen\Model\LegalEntityManagement\ObjectSerializer;

/**
 * CapabilitySettings Class Doc Comment
 *
 * @category Class
 * @package  Adyen
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CapabilitySettings implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CapabilitySettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amountPerIndustry' => 'array<string,\Adyen\Model\LegalEntityManagement\Amount>',
        'authorizedCardUsers' => 'bool',
        'fundingSource' => 'string[]',
        'interval' => 'string',
        'maxAmount' => '\Adyen\Model\LegalEntityManagement\Amount'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amountPerIndustry' => null,
        'authorizedCardUsers' => null,
        'fundingSource' => null,
        'interval' => null,
        'maxAmount' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'amountPerIndustry' => false,
        'authorizedCardUsers' => false,
        'fundingSource' => false,
        'interval' => false,
        'maxAmount' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'amountPerIndustry' => 'amountPerIndustry',
        'authorizedCardUsers' => 'authorizedCardUsers',
        'fundingSource' => 'fundingSource',
        'interval' => 'interval',
        'maxAmount' => 'maxAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amountPerIndustry' => 'setAmountPerIndustry',
        'authorizedCardUsers' => 'setAuthorizedCardUsers',
        'fundingSource' => 'setFundingSource',
        'interval' => 'setInterval',
        'maxAmount' => 'setMaxAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amountPerIndustry' => 'getAmountPerIndustry',
        'authorizedCardUsers' => 'getAuthorizedCardUsers',
        'fundingSource' => 'getFundingSource',
        'interval' => 'getInterval',
        'maxAmount' => 'getMaxAmount'
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

    public const FUNDING_SOURCE_CREDIT = 'credit';
    public const FUNDING_SOURCE_DEBIT = 'debit';
    public const FUNDING_SOURCE_PREPAID = 'prepaid';
    public const INTERVAL_DAILY = 'daily';
    public const INTERVAL_MONTHLY = 'monthly';
    public const INTERVAL_WEEKLY = 'weekly';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFundingSourceAllowableValues()
    {
        return [
            self::FUNDING_SOURCE_CREDIT,
            self::FUNDING_SOURCE_DEBIT,
            self::FUNDING_SOURCE_PREPAID,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIntervalAllowableValues()
    {
        return [
            self::INTERVAL_DAILY,
            self::INTERVAL_MONTHLY,
            self::INTERVAL_WEEKLY,
        ];
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
        $this->setIfExists('amountPerIndustry', $data ?? [], null);
        $this->setIfExists('authorizedCardUsers', $data ?? [], null);
        $this->setIfExists('fundingSource', $data ?? [], null);
        $this->setIfExists('interval', $data ?? [], null);
        $this->setIfExists('maxAmount', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getIntervalAllowableValues();
        if (!is_null($this->container['interval']) && !in_array($this->container['interval'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'interval', must be one of '%s'",
                $this->container['interval'],
                implode("', '", $allowedValues)
            );
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
     * Gets amountPerIndustry
     *
     * @return array<string,\Adyen\Model\LegalEntityManagement\Amount>|null
     */
    public function getAmountPerIndustry()
    {
        return $this->container['amountPerIndustry'];
    }

    /**
     * Sets amountPerIndustry
     *
     * @param array<string,\Adyen\Model\LegalEntityManagement\Amount>|null $amountPerIndustry The maximum amount a card holder can spend per industry.
     *
     * @return self
     */
    public function setAmountPerIndustry($amountPerIndustry)
    {
        if (is_null($amountPerIndustry)) {
            throw new \InvalidArgumentException('non-nullable amountPerIndustry cannot be null');
        }
        $this->container['amountPerIndustry'] = $amountPerIndustry;

        return $this;
    }

    /**
     * Gets authorizedCardUsers
     *
     * @return bool|null
     */
    public function getAuthorizedCardUsers()
    {
        return $this->container['authorizedCardUsers'];
    }

    /**
     * Sets authorizedCardUsers
     *
     * @param bool|null $authorizedCardUsers The number of card holders who can use the card.
     *
     * @return self
     */
    public function setAuthorizedCardUsers($authorizedCardUsers)
    {
        if (is_null($authorizedCardUsers)) {
            throw new \InvalidArgumentException('non-nullable authorizedCardUsers cannot be null');
        }
        $this->container['authorizedCardUsers'] = $authorizedCardUsers;

        return $this;
    }

    /**
     * Gets fundingSource
     *
     * @return string[]|null
     */
    public function getFundingSource()
    {
        return $this->container['fundingSource'];
    }

    /**
     * Sets fundingSource
     *
     * @param string[]|null $fundingSource The funding source of the card, for example **debit**.
     *
     * @return self
     */
    public function setFundingSource($fundingSource)
    {
        if (is_null($fundingSource)) {
            throw new \InvalidArgumentException('non-nullable fundingSource cannot be null');
        }
        $allowedValues = $this->getFundingSourceAllowableValues();
        if (array_diff($fundingSource, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'fundingSource', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['fundingSource'] = $fundingSource;

        return $this;
    }

    /**
     * Gets interval
     *
     * @return string|null
     */
    public function getInterval()
    {
        return $this->container['interval'];
    }

    /**
     * Sets interval
     *
     * @param string|null $interval The period when the rule conditions apply.
     *
     * @return self
     */
    public function setInterval($interval)
    {
        if (is_null($interval)) {
            throw new \InvalidArgumentException('non-nullable interval cannot be null');
        }
        $allowedValues = $this->getIntervalAllowableValues();
        if (!in_array($interval, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'interval', must be one of '%s'",
                    $interval,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['interval'] = $interval;

        return $this;
    }

    /**
     * Gets maxAmount
     *
     * @return \Adyen\Model\LegalEntityManagement\Amount|null
     */
    public function getMaxAmount()
    {
        return $this->container['maxAmount'];
    }

    /**
     * Sets maxAmount
     *
     * @param \Adyen\Model\LegalEntityManagement\Amount|null $maxAmount maxAmount
     *
     * @return self
     */
    public function setMaxAmount($maxAmount)
    {
        if (is_null($maxAmount)) {
            throw new \InvalidArgumentException('non-nullable maxAmount cannot be null');
        }
        $this->container['maxAmount'] = $maxAmount;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
}
