<?php

/**
 * Management Webhooks
 *
 * The version of the OpenAPI document: 1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.4.0
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Adyen\Model\ManagementWebhooks;

use \ArrayAccess;
use Adyen\Model\ManagementWebhooks\ObjectSerializer;

/**
 * MidServiceNotificationData Class Doc Comment
 *
 * @category Class
 * @package  Adyen
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MidServiceNotificationData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MidServiceNotificationData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'allowed' => 'bool',
        'enabled' => 'bool',
        'id' => 'string',
        'merchantId' => 'string',
        'reference' => 'string',
        'result' => 'string',
        'storeId' => 'string',
        'type' => 'string',
        'verificationStatus' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'allowed' => null,
        'enabled' => null,
        'id' => null,
        'merchantId' => null,
        'reference' => null,
        'result' => null,
        'storeId' => null,
        'type' => null,
        'verificationStatus' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'allowed' => false,
        'enabled' => false,
        'id' => false,
        'merchantId' => false,
        'reference' => false,
        'result' => false,
        'storeId' => false,
        'type' => false,
        'verificationStatus' => false
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
        'allowed' => 'allowed',
        'enabled' => 'enabled',
        'id' => 'id',
        'merchantId' => 'merchantId',
        'reference' => 'reference',
        'result' => 'result',
        'storeId' => 'storeId',
        'type' => 'type',
        'verificationStatus' => 'verificationStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allowed' => 'setAllowed',
        'enabled' => 'setEnabled',
        'id' => 'setId',
        'merchantId' => 'setMerchantId',
        'reference' => 'setReference',
        'result' => 'setResult',
        'storeId' => 'setStoreId',
        'type' => 'setType',
        'verificationStatus' => 'setVerificationStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allowed' => 'getAllowed',
        'enabled' => 'getEnabled',
        'id' => 'getId',
        'merchantId' => 'getMerchantId',
        'reference' => 'getReference',
        'result' => 'getResult',
        'storeId' => 'getStoreId',
        'type' => 'getType',
        'verificationStatus' => 'getVerificationStatus'
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

    public const RESULT_SUCCESS = 'SUCCESS';
    public const RESULT_FAILURE = 'FAILURE';
    public const VERIFICATION_STATUS_VALID = 'valid';
    public const VERIFICATION_STATUS_PENDING = 'pending';
    public const VERIFICATION_STATUS_INVALID = 'invalid';
    public const VERIFICATION_STATUS_REJECTED = 'rejected';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getResultAllowableValues()
    {
        return [
            self::RESULT_SUCCESS,
            self::RESULT_FAILURE,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVerificationStatusAllowableValues()
    {
        return [
            self::VERIFICATION_STATUS_VALID,
            self::VERIFICATION_STATUS_PENDING,
            self::VERIFICATION_STATUS_INVALID,
            self::VERIFICATION_STATUS_REJECTED,
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
        $this->setIfExists('allowed', $data ?? [], null);
        $this->setIfExists('enabled', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('merchantId', $data ?? [], null);
        $this->setIfExists('reference', $data ?? [], null);
        $this->setIfExists('result', $data ?? [], null);
        $this->setIfExists('storeId', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('verificationStatus', $data ?? [], null);
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['merchantId'] === null) {
            $invalidProperties[] = "'merchantId' can't be null";
        }
        if ($this->container['result'] === null) {
            $invalidProperties[] = "'result' can't be null";
        }
        $allowedValues = $this->getResultAllowableValues();
        if (!is_null($this->container['result']) && !in_array($this->container['result'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'result', must be one of '%s'",
                $this->container['result'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getVerificationStatusAllowableValues();
        if (!is_null($this->container['verificationStatus']) && !in_array($this->container['verificationStatus'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'verificationStatus', must be one of '%s'",
                $this->container['verificationStatus'],
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
     * Gets allowed
     *
     * @return bool|null
     */
    public function getAllowed()
    {
        return $this->container['allowed'];
    }

    /**
     * Sets allowed
     *
     * @param bool|null $allowed Indicates whether receiving payments is allowed. This value is set to **true** by Adyen after screening your merchant account.
     *
     * @return self
     */
    public function setAllowed($allowed)
    {
        if (is_null($allowed)) {
            throw new \InvalidArgumentException('non-nullable allowed cannot be null');
        }
        $this->container['allowed'] = $allowed;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool|null
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool|null $enabled Indicates whether the payment method is enabled (**true**) or disabled (**false**).
     *
     * @return self
     */
    public function setEnabled($enabled)
    {
        if (is_null($enabled)) {
            throw new \InvalidArgumentException('non-nullable enabled cannot be null');
        }
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id The identifier of the resource.
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets merchantId
     *
     * @return string
     */
    public function getMerchantId()
    {
        return $this->container['merchantId'];
    }

    /**
     * Sets merchantId
     *
     * @param string $merchantId The identifier of the merchant account.
     *
     * @return self
     */
    public function setMerchantId($merchantId)
    {
        if (is_null($merchantId)) {
            throw new \InvalidArgumentException('non-nullable merchantId cannot be null');
        }
        $this->container['merchantId'] = $merchantId;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string|null
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string|null $reference Your reference for the payment method.
     *
     * @return self
     */
    public function setReference($reference)
    {
        if (is_null($reference)) {
            throw new \InvalidArgumentException('non-nullable reference cannot be null');
        }
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets result
     *
     * @return string
     */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
     * Sets result
     *
     * @param string $result The result of the request to create a payment method.
     *
     * @return self
     */
    public function setResult($result)
    {
        if (is_null($result)) {
            throw new \InvalidArgumentException('non-nullable result cannot be null');
        }
        $allowedValues = $this->getResultAllowableValues();
        if (!in_array($result, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'result', must be one of '%s'",
                    $result,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['result'] = $result;

        return $this;
    }

    /**
     * Gets storeId
     *
     * @return string|null
     */
    public function getStoreId()
    {
        return $this->container['storeId'];
    }

    /**
     * Sets storeId
     *
     * @param string|null $storeId The identifier of the [store](https://docs.adyen.com/api-explorer/#/ManagementService/latest/post/merchants/{id}/paymentMethodSettings__reqParam_storeId), if any.
     *
     * @return self
     */
    public function setStoreId($storeId)
    {
        if (is_null($storeId)) {
            throw new \InvalidArgumentException('non-nullable storeId cannot be null');
        }
        $this->container['storeId'] = $storeId;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Payment method [variant](https://docs.adyen.com/development-resources/paymentmethodvariant#management-api).
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets verificationStatus
     *
     * @return string|null
     */
    public function getVerificationStatus()
    {
        return $this->container['verificationStatus'];
    }

    /**
     * Sets verificationStatus
     *
     * @param string|null $verificationStatus Payment method status. Possible values: * **valid** * **pending** * **invalid** * **rejected**
     *
     * @return self
     */
    public function setVerificationStatus($verificationStatus)
    {
        if (is_null($verificationStatus)) {
            throw new \InvalidArgumentException('non-nullable verificationStatus cannot be null');
        }
        $allowedValues = $this->getVerificationStatusAllowableValues();
        if (!in_array($verificationStatus, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'verificationStatus', must be one of '%s'",
                    $verificationStatus,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['verificationStatus'] = $verificationStatus;

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
