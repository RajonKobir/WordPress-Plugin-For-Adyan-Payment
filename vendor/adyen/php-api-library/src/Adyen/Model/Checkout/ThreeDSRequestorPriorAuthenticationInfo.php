<?php

/**
 * Adyen Checkout API
 *
 * The version of the OpenAPI document: 70
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.4.0
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Adyen\Model\Checkout;

use \ArrayAccess;
use Adyen\Model\Checkout\ObjectSerializer;

/**
 * ThreeDSRequestorPriorAuthenticationInfo Class Doc Comment
 *
 * @category Class
 * @package  Adyen
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ThreeDSRequestorPriorAuthenticationInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ThreeDSRequestorPriorAuthenticationInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'threeDSReqPriorAuthData' => 'string',
        'threeDSReqPriorAuthMethod' => 'string',
        'threeDSReqPriorAuthTimestamp' => 'string',
        'threeDSReqPriorRef' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'threeDSReqPriorAuthData' => null,
        'threeDSReqPriorAuthMethod' => null,
        'threeDSReqPriorAuthTimestamp' => null,
        'threeDSReqPriorRef' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'threeDSReqPriorAuthData' => false,
        'threeDSReqPriorAuthMethod' => false,
        'threeDSReqPriorAuthTimestamp' => false,
        'threeDSReqPriorRef' => false
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
        'threeDSReqPriorAuthData' => 'threeDSReqPriorAuthData',
        'threeDSReqPriorAuthMethod' => 'threeDSReqPriorAuthMethod',
        'threeDSReqPriorAuthTimestamp' => 'threeDSReqPriorAuthTimestamp',
        'threeDSReqPriorRef' => 'threeDSReqPriorRef'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'threeDSReqPriorAuthData' => 'setThreeDSReqPriorAuthData',
        'threeDSReqPriorAuthMethod' => 'setThreeDSReqPriorAuthMethod',
        'threeDSReqPriorAuthTimestamp' => 'setThreeDSReqPriorAuthTimestamp',
        'threeDSReqPriorRef' => 'setThreeDSReqPriorRef'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'threeDSReqPriorAuthData' => 'getThreeDSReqPriorAuthData',
        'threeDSReqPriorAuthMethod' => 'getThreeDSReqPriorAuthMethod',
        'threeDSReqPriorAuthTimestamp' => 'getThreeDSReqPriorAuthTimestamp',
        'threeDSReqPriorRef' => 'getThreeDSReqPriorRef'
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

    public const THREE_DS_REQ_PRIOR_AUTH_METHOD__01 = '01';
    public const THREE_DS_REQ_PRIOR_AUTH_METHOD__02 = '02';
    public const THREE_DS_REQ_PRIOR_AUTH_METHOD__03 = '03';
    public const THREE_DS_REQ_PRIOR_AUTH_METHOD__04 = '04';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getThreeDSReqPriorAuthMethodAllowableValues()
    {
        return [
            self::THREE_DS_REQ_PRIOR_AUTH_METHOD__01,
            self::THREE_DS_REQ_PRIOR_AUTH_METHOD__02,
            self::THREE_DS_REQ_PRIOR_AUTH_METHOD__03,
            self::THREE_DS_REQ_PRIOR_AUTH_METHOD__04,
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
        $this->setIfExists('threeDSReqPriorAuthData', $data ?? [], null);
        $this->setIfExists('threeDSReqPriorAuthMethod', $data ?? [], null);
        $this->setIfExists('threeDSReqPriorAuthTimestamp', $data ?? [], null);
        $this->setIfExists('threeDSReqPriorRef', $data ?? [], null);
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

        $allowedValues = $this->getThreeDSReqPriorAuthMethodAllowableValues();
        if (!is_null($this->container['threeDSReqPriorAuthMethod']) && !in_array($this->container['threeDSReqPriorAuthMethod'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'threeDSReqPriorAuthMethod', must be one of '%s'",
                $this->container['threeDSReqPriorAuthMethod'],
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
     * Gets threeDSReqPriorAuthData
     *
     * @return string|null
     */
    public function getThreeDSReqPriorAuthData()
    {
        return $this->container['threeDSReqPriorAuthData'];
    }

    /**
     * Sets threeDSReqPriorAuthData
     *
     * @param string|null $threeDSReqPriorAuthData Data that documents and supports a specific authentication process. Maximum length: 2048 bytes.
     *
     * @return self
     */
    public function setThreeDSReqPriorAuthData($threeDSReqPriorAuthData)
    {
        if (is_null($threeDSReqPriorAuthData)) {
            throw new \InvalidArgumentException('non-nullable threeDSReqPriorAuthData cannot be null');
        }
        $this->container['threeDSReqPriorAuthData'] = $threeDSReqPriorAuthData;

        return $this;
    }

    /**
     * Gets threeDSReqPriorAuthMethod
     *
     * @return string|null
     */
    public function getThreeDSReqPriorAuthMethod()
    {
        return $this->container['threeDSReqPriorAuthMethod'];
    }

    /**
     * Sets threeDSReqPriorAuthMethod
     *
     * @param string|null $threeDSReqPriorAuthMethod Mechanism used by the Cardholder to previously authenticate to the 3DS Requestor. Allowed values: * **01** — Frictionless authentication occurred by ACS. * **02** — Cardholder challenge occurred by ACS. * **03** — AVS verified. * **04** — Other issuer methods.
     *
     * @return self
     */
    public function setThreeDSReqPriorAuthMethod($threeDSReqPriorAuthMethod)
    {
        if (is_null($threeDSReqPriorAuthMethod)) {
            throw new \InvalidArgumentException('non-nullable threeDSReqPriorAuthMethod cannot be null');
        }
        $allowedValues = $this->getThreeDSReqPriorAuthMethodAllowableValues();
        if (!in_array($threeDSReqPriorAuthMethod, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'threeDSReqPriorAuthMethod', must be one of '%s'",
                    $threeDSReqPriorAuthMethod,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['threeDSReqPriorAuthMethod'] = $threeDSReqPriorAuthMethod;

        return $this;
    }

    /**
     * Gets threeDSReqPriorAuthTimestamp
     *
     * @return string|null
     */
    public function getThreeDSReqPriorAuthTimestamp()
    {
        return $this->container['threeDSReqPriorAuthTimestamp'];
    }

    /**
     * Sets threeDSReqPriorAuthTimestamp
     *
     * @param string|null $threeDSReqPriorAuthTimestamp Date and time in UTC of the prior cardholder authentication. Format: YYYYMMDDHHMM
     *
     * @return self
     */
    public function setThreeDSReqPriorAuthTimestamp($threeDSReqPriorAuthTimestamp)
    {
        if (is_null($threeDSReqPriorAuthTimestamp)) {
            throw new \InvalidArgumentException('non-nullable threeDSReqPriorAuthTimestamp cannot be null');
        }
        $this->container['threeDSReqPriorAuthTimestamp'] = $threeDSReqPriorAuthTimestamp;

        return $this;
    }

    /**
     * Gets threeDSReqPriorRef
     *
     * @return string|null
     */
    public function getThreeDSReqPriorRef()
    {
        return $this->container['threeDSReqPriorRef'];
    }

    /**
     * Sets threeDSReqPriorRef
     *
     * @param string|null $threeDSReqPriorRef This data element provides additional information to the ACS to determine the best approach for handing a request. This data element contains an ACS Transaction ID for a prior authenticated transaction. For example, the first recurring transaction that was authenticated with the cardholder. Length: 30 characters.
     *
     * @return self
     */
    public function setThreeDSReqPriorRef($threeDSReqPriorRef)
    {
        if (is_null($threeDSReqPriorRef)) {
            throw new \InvalidArgumentException('non-nullable threeDSReqPriorRef cannot be null');
        }
        $this->container['threeDSReqPriorRef'] = $threeDSReqPriorRef;

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