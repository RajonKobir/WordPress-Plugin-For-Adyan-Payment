<?php

/**
 * Management API
 *
 * The version of the OpenAPI document: 1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.4.0
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Adyen\Model\Management;

use \ArrayAccess;
use Adyen\Model\Management\ObjectSerializer;

/**
 * UpdateSplitConfigurationLogicRequest Class Doc Comment
 *
 * @category Class
 * @package  Adyen
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UpdateSplitConfigurationLogicRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UpdateSplitConfigurationLogicRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'additionalCommission' => '\Adyen\Model\Management\AdditionalCommission',
        'chargeback' => 'string',
        'commission' => '\Adyen\Model\Management\Commission',
        'paymentFee' => 'string',
        'remainder' => 'string',
        'splitLogicId' => 'string',
        'surcharge' => 'string',
        'tip' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'additionalCommission' => null,
        'chargeback' => null,
        'commission' => null,
        'paymentFee' => null,
        'remainder' => null,
        'splitLogicId' => null,
        'surcharge' => null,
        'tip' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'additionalCommission' => false,
        'chargeback' => false,
        'commission' => false,
        'paymentFee' => false,
        'remainder' => false,
        'splitLogicId' => false,
        'surcharge' => false,
        'tip' => false
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
        'additionalCommission' => 'additionalCommission',
        'chargeback' => 'chargeback',
        'commission' => 'commission',
        'paymentFee' => 'paymentFee',
        'remainder' => 'remainder',
        'splitLogicId' => 'splitLogicId',
        'surcharge' => 'surcharge',
        'tip' => 'tip'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'additionalCommission' => 'setAdditionalCommission',
        'chargeback' => 'setChargeback',
        'commission' => 'setCommission',
        'paymentFee' => 'setPaymentFee',
        'remainder' => 'setRemainder',
        'splitLogicId' => 'setSplitLogicId',
        'surcharge' => 'setSurcharge',
        'tip' => 'setTip'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'additionalCommission' => 'getAdditionalCommission',
        'chargeback' => 'getChargeback',
        'commission' => 'getCommission',
        'paymentFee' => 'getPaymentFee',
        'remainder' => 'getRemainder',
        'splitLogicId' => 'getSplitLogicId',
        'surcharge' => 'getSurcharge',
        'tip' => 'getTip'
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

    public const CHARGEBACK_DEDUCT_FROM_LIABLE_ACCOUNT = 'deductFromLiableAccount';
    public const CHARGEBACK_DEDUCT_FROM_ONE_BALANCE_ACCOUNT = 'deductFromOneBalanceAccount';
    public const CHARGEBACK_DEDUCT_ACCORDING_TO_SPLIT_RATIO = 'deductAccordingToSplitRatio';
    public const PAYMENT_FEE_DEDUCT_FROM_LIABLE_ACCOUNT = 'deductFromLiableAccount';
    public const PAYMENT_FEE_DEDUCT_FROM_ONE_BALANCE_ACCOUNT = 'deductFromOneBalanceAccount';
    public const REMAINDER_ADD_TO_LIABLE_ACCOUNT = 'addToLiableAccount';
    public const REMAINDER_ADD_TO_ONE_BALANCE_ACCOUNT = 'addToOneBalanceAccount';
    public const SURCHARGE_ADD_TO_LIABLE_ACCOUNT = 'addToLiableAccount';
    public const SURCHARGE_ADD_TO_ONE_BALANCE_ACCOUNT = 'addToOneBalanceAccount';
    public const TIP_ADD_TO_LIABLE_ACCOUNT = 'addToLiableAccount';
    public const TIP_ADD_TO_ONE_BALANCE_ACCOUNT = 'addToOneBalanceAccount';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getChargebackAllowableValues()
    {
        return [
            self::CHARGEBACK_DEDUCT_FROM_LIABLE_ACCOUNT,
            self::CHARGEBACK_DEDUCT_FROM_ONE_BALANCE_ACCOUNT,
            self::CHARGEBACK_DEDUCT_ACCORDING_TO_SPLIT_RATIO,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaymentFeeAllowableValues()
    {
        return [
            self::PAYMENT_FEE_DEDUCT_FROM_LIABLE_ACCOUNT,
            self::PAYMENT_FEE_DEDUCT_FROM_ONE_BALANCE_ACCOUNT,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRemainderAllowableValues()
    {
        return [
            self::REMAINDER_ADD_TO_LIABLE_ACCOUNT,
            self::REMAINDER_ADD_TO_ONE_BALANCE_ACCOUNT,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSurchargeAllowableValues()
    {
        return [
            self::SURCHARGE_ADD_TO_LIABLE_ACCOUNT,
            self::SURCHARGE_ADD_TO_ONE_BALANCE_ACCOUNT,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTipAllowableValues()
    {
        return [
            self::TIP_ADD_TO_LIABLE_ACCOUNT,
            self::TIP_ADD_TO_ONE_BALANCE_ACCOUNT,
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
        $this->setIfExists('additionalCommission', $data ?? [], null);
        $this->setIfExists('chargeback', $data ?? [], null);
        $this->setIfExists('commission', $data ?? [], null);
        $this->setIfExists('paymentFee', $data ?? [], null);
        $this->setIfExists('remainder', $data ?? [], null);
        $this->setIfExists('splitLogicId', $data ?? [], null);
        $this->setIfExists('surcharge', $data ?? [], null);
        $this->setIfExists('tip', $data ?? [], null);
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

        $allowedValues = $this->getChargebackAllowableValues();
        if (!is_null($this->container['chargeback']) && !in_array($this->container['chargeback'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'chargeback', must be one of '%s'",
                $this->container['chargeback'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['commission'] === null) {
            $invalidProperties[] = "'commission' can't be null";
        }
        if ($this->container['paymentFee'] === null) {
            $invalidProperties[] = "'paymentFee' can't be null";
        }
        $allowedValues = $this->getPaymentFeeAllowableValues();
        if (!is_null($this->container['paymentFee']) && !in_array($this->container['paymentFee'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'paymentFee', must be one of '%s'",
                $this->container['paymentFee'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getRemainderAllowableValues();
        if (!is_null($this->container['remainder']) && !in_array($this->container['remainder'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'remainder', must be one of '%s'",
                $this->container['remainder'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSurchargeAllowableValues();
        if (!is_null($this->container['surcharge']) && !in_array($this->container['surcharge'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'surcharge', must be one of '%s'",
                $this->container['surcharge'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTipAllowableValues();
        if (!is_null($this->container['tip']) && !in_array($this->container['tip'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'tip', must be one of '%s'",
                $this->container['tip'],
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
     * Gets additionalCommission
     *
     * @return \Adyen\Model\Management\AdditionalCommission|null
     */
    public function getAdditionalCommission()
    {
        return $this->container['additionalCommission'];
    }

    /**
     * Sets additionalCommission
     *
     * @param \Adyen\Model\Management\AdditionalCommission|null $additionalCommission additionalCommission
     *
     * @return self
     */
    public function setAdditionalCommission($additionalCommission)
    {
        if (is_null($additionalCommission)) {
            throw new \InvalidArgumentException('non-nullable additionalCommission cannot be null');
        }
        $this->container['additionalCommission'] = $additionalCommission;

        return $this;
    }

    /**
     * Gets chargeback
     *
     * @return string|null
     */
    public function getChargeback()
    {
        return $this->container['chargeback'];
    }

    /**
     * Sets chargeback
     *
     * @param string|null $chargeback Specifies the logic to apply when booking the chargeback amount.  Possible values: **deductFromLiableAccount**, **deductFromOneBalanceAccount**, **deductAccordingToSplitRatio**.
     *
     * @return self
     */
    public function setChargeback($chargeback)
    {
        if (is_null($chargeback)) {
            throw new \InvalidArgumentException('non-nullable chargeback cannot be null');
        }
        $allowedValues = $this->getChargebackAllowableValues();
        if (!in_array($chargeback, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'chargeback', must be one of '%s'",
                    $chargeback,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['chargeback'] = $chargeback;

        return $this;
    }

    /**
     * Gets commission
     *
     * @return \Adyen\Model\Management\Commission
     */
    public function getCommission()
    {
        return $this->container['commission'];
    }

    /**
     * Sets commission
     *
     * @param \Adyen\Model\Management\Commission $commission commission
     *
     * @return self
     */
    public function setCommission($commission)
    {
        if (is_null($commission)) {
            throw new \InvalidArgumentException('non-nullable commission cannot be null');
        }
        $this->container['commission'] = $commission;

        return $this;
    }

    /**
     * Gets paymentFee
     *
     * @return string
     */
    public function getPaymentFee()
    {
        return $this->container['paymentFee'];
    }

    /**
     * Sets paymentFee
     *
     * @param string $paymentFee Specifies the logic to apply when booking the transaction fees.  Possible values: **deductFromLiableAccount**, **deductFromOneBalanceAccount**.
     *
     * @return self
     */
    public function setPaymentFee($paymentFee)
    {
        if (is_null($paymentFee)) {
            throw new \InvalidArgumentException('non-nullable paymentFee cannot be null');
        }
        $allowedValues = $this->getPaymentFeeAllowableValues();
        if (!in_array($paymentFee, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'paymentFee', must be one of '%s'",
                    $paymentFee,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['paymentFee'] = $paymentFee;

        return $this;
    }

    /**
     * Gets remainder
     *
     * @return string|null
     */
    public function getRemainder()
    {
        return $this->container['remainder'];
    }

    /**
     * Sets remainder
     *
     * @param string|null $remainder Specifies the logic to apply when booking the amount left over after currency conversion.  Possible values: **addToLiableAccount**, **addToOneBalanceAccount**.
     *
     * @return self
     */
    public function setRemainder($remainder)
    {
        if (is_null($remainder)) {
            throw new \InvalidArgumentException('non-nullable remainder cannot be null');
        }
        $allowedValues = $this->getRemainderAllowableValues();
        if (!in_array($remainder, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'remainder', must be one of '%s'",
                    $remainder,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['remainder'] = $remainder;

        return $this;
    }

    /**
     * Gets splitLogicId
     *
     * @return string|null
     */
    public function getSplitLogicId()
    {
        return $this->container['splitLogicId'];
    }

    /**
     * Sets splitLogicId
     *
     * @param string|null $splitLogicId Unique identifier of the split logic that is applied when the split configuration conditions are met.
     *
     * @return self
     */
    public function setSplitLogicId($splitLogicId)
    {
        if (is_null($splitLogicId)) {
            throw new \InvalidArgumentException('non-nullable splitLogicId cannot be null');
        }
        $this->container['splitLogicId'] = $splitLogicId;

        return $this;
    }

    /**
     * Gets surcharge
     *
     * @return string|null
     */
    public function getSurcharge()
    {
        return $this->container['surcharge'];
    }

    /**
     * Sets surcharge
     *
     * @param string|null $surcharge Specifies the logic to apply when booking the surcharge amount.  Possible values: **addToLiableAccount**, **addToOneBalanceAccount**
     *
     * @return self
     */
    public function setSurcharge($surcharge)
    {
        if (is_null($surcharge)) {
            throw new \InvalidArgumentException('non-nullable surcharge cannot be null');
        }
        $allowedValues = $this->getSurchargeAllowableValues();
        if (!in_array($surcharge, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'surcharge', must be one of '%s'",
                    $surcharge,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['surcharge'] = $surcharge;

        return $this;
    }

    /**
     * Gets tip
     *
     * @return string|null
     */
    public function getTip()
    {
        return $this->container['tip'];
    }

    /**
     * Sets tip
     *
     * @param string|null $tip Specifies the logic to apply when booking tips (gratuity).  Possible values: **addToLiableAccount**, **addToOneBalanceAccount**.
     *
     * @return self
     */
    public function setTip($tip)
    {
        if (is_null($tip)) {
            throw new \InvalidArgumentException('non-nullable tip cannot be null');
        }
        $allowedValues = $this->getTipAllowableValues();
        if (!in_array($tip, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'tip', must be one of '%s'",
                    $tip,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['tip'] = $tip;

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
