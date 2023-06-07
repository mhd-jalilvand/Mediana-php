<?php
/**
 * Message
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Mediana\Sdk
 * @author   Mediana team
 * @link     https://mediana.ir
 */

/**
 * Mediana sms api
 *
 * Mediana sms api doc </br>  sdks for some programming languages is in out github at https://github.com/ippanelippanel </br> api-key format: <code>Authorization: \"AccessKey your-api-key\"</code>  # Authentication  <!-- ReDoc-Inject: <security-definitions> -->
 *
 * The version of the document: 1.0.1
 * Generated by: https://mediana.ir
 */

/**
 * Do not edit the class manually.
 */

namespace Mediana\Sdk\Model;

use \ArrayAccess;
use \Mediana\Sdk\ObjectSerializer;

/**
 * Message Class Doc Comment
 *
 * @category Class
 * @package  Mediana\Sdk
 * @author   Mediana team
 * @link     https://mediana.ir
 * @implements \ArrayAccess<string, mixed>
 */
class Message implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'message';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bulk_id' => 'int',
        'number' => 'string',
        'message' => 'string',
        'status' => 'string',
        'type' => 'string',
        'confirm_state' => 'string',
        'created_at' => 'string',
        'sent_at' => 'string',
        'recipients_count' => 'int',
        'valid_recipients_count' => 'int',
        'page' => 'int',
        'cost' => 'int',
        'payback_cost' => 'int',
        'description' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'bulk_id' => null,
        'number' => null,
        'message' => null,
        'status' => null,
        'type' => null,
        'confirm_state' => null,
        'created_at' => null,
        'sent_at' => null,
        'recipients_count' => null,
        'valid_recipients_count' => null,
        'page' => null,
        'cost' => null,
        'payback_cost' => null,
        'description' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'bulk_id' => false,
		'number' => false,
		'message' => false,
		'status' => false,
		'type' => false,
		'confirm_state' => false,
		'created_at' => false,
		'sent_at' => false,
		'recipients_count' => false,
		'valid_recipients_count' => false,
		'page' => false,
		'cost' => false,
		'payback_cost' => false,
		'description' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
        'bulk_id' => 'bulk_id',
        'number' => 'number',
        'message' => 'message',
        'status' => 'status',
        'type' => 'type',
        'confirm_state' => 'confirm_state',
        'created_at' => 'created_at',
        'sent_at' => 'sent_at',
        'recipients_count' => 'recipients_count',
        'valid_recipients_count' => 'valid_recipients_count',
        'page' => 'page',
        'cost' => 'cost',
        'payback_cost' => 'payback_cost',
        'description' => 'description'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bulk_id' => 'setBulkId',
        'number' => 'setNumber',
        'message' => 'setMessage',
        'status' => 'setStatus',
        'type' => 'setType',
        'confirm_state' => 'setConfirmState',
        'created_at' => 'setCreatedAt',
        'sent_at' => 'setSentAt',
        'recipients_count' => 'setRecipientsCount',
        'valid_recipients_count' => 'setValidRecipientsCount',
        'page' => 'setPage',
        'cost' => 'setCost',
        'payback_cost' => 'setPaybackCost',
        'description' => 'setDescription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bulk_id' => 'getBulkId',
        'number' => 'getNumber',
        'message' => 'getMessage',
        'status' => 'getStatus',
        'type' => 'getType',
        'confirm_state' => 'getConfirmState',
        'created_at' => 'getCreatedAt',
        'sent_at' => 'getSentAt',
        'recipients_count' => 'getRecipientsCount',
        'valid_recipients_count' => 'getValidRecipientsCount',
        'page' => 'getPage',
        'cost' => 'getCost',
        'payback_cost' => 'getPaybackCost',
        'description' => 'getDescription'
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
        $this->setIfExists('bulk_id', $data ?? [], null);
        $this->setIfExists('number', $data ?? [], null);
        $this->setIfExists('message', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('confirm_state', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('sent_at', $data ?? [], null);
        $this->setIfExists('recipients_count', $data ?? [], null);
        $this->setIfExists('valid_recipients_count', $data ?? [], null);
        $this->setIfExists('page', $data ?? [], null);
        $this->setIfExists('cost', $data ?? [], null);
        $this->setIfExists('payback_cost', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
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
     * Gets bulk_id
     *
     * @return int|null
     */
    public function getBulkId()
    {
        return $this->container['bulk_id'];
    }

    /**
     * Sets bulk_id
     *
     * @param int|null $bulk_id bulk_id
     *
     * @return self
     */
    public function setBulkId($bulk_id)
    {
        if (is_null($bulk_id)) {
            throw new \InvalidArgumentException('non-nullable bulk_id cannot be null');
        }
        $this->container['bulk_id'] = $bulk_id;

        return $this;
    }

    /**
     * Gets number
     *
     * @return string|null
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string|null $number number
     *
     * @return self
     */
    public function setNumber($number)
    {
        if (is_null($number)) {
            throw new \InvalidArgumentException('non-nullable number cannot be null');
        }
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string|null $message message
     *
     * @return self
     */
    public function setMessage($message)
    {
        if (is_null($message)) {
            throw new \InvalidArgumentException('non-nullable message cannot be null');
        }
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type type
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
     * Gets confirm_state
     *
     * @return string|null
     */
    public function getConfirmState()
    {
        return $this->container['confirm_state'];
    }

    /**
     * Sets confirm_state
     *
     * @param string|null $confirm_state confirm_state
     *
     * @return self
     */
    public function setConfirmState($confirm_state)
    {
        if (is_null($confirm_state)) {
            throw new \InvalidArgumentException('non-nullable confirm_state cannot be null');
        }
        $this->container['confirm_state'] = $confirm_state;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string|null $created_at created_at
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets sent_at
     *
     * @return string|null
     */
    public function getSentAt()
    {
        return $this->container['sent_at'];
    }

    /**
     * Sets sent_at
     *
     * @param string|null $sent_at sent_at
     *
     * @return self
     */
    public function setSentAt($sent_at)
    {
        if (is_null($sent_at)) {
            throw new \InvalidArgumentException('non-nullable sent_at cannot be null');
        }
        $this->container['sent_at'] = $sent_at;

        return $this;
    }

    /**
     * Gets recipients_count
     *
     * @return int|null
     */
    public function getRecipientsCount()
    {
        return $this->container['recipients_count'];
    }

    /**
     * Sets recipients_count
     *
     * @param int|null $recipients_count recipients_count
     *
     * @return self
     */
    public function setRecipientsCount($recipients_count)
    {
        if (is_null($recipients_count)) {
            throw new \InvalidArgumentException('non-nullable recipients_count cannot be null');
        }
        $this->container['recipients_count'] = $recipients_count;

        return $this;
    }

    /**
     * Gets valid_recipients_count
     *
     * @return int|null
     */
    public function getValidRecipientsCount()
    {
        return $this->container['valid_recipients_count'];
    }

    /**
     * Sets valid_recipients_count
     *
     * @param int|null $valid_recipients_count valid_recipients_count
     *
     * @return self
     */
    public function setValidRecipientsCount($valid_recipients_count)
    {
        if (is_null($valid_recipients_count)) {
            throw new \InvalidArgumentException('non-nullable valid_recipients_count cannot be null');
        }
        $this->container['valid_recipients_count'] = $valid_recipients_count;

        return $this;
    }

    /**
     * Gets page
     *
     * @return int|null
     */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
     * Sets page
     *
     * @param int|null $page page
     *
     * @return self
     */
    public function setPage($page)
    {
        if (is_null($page)) {
            throw new \InvalidArgumentException('non-nullable page cannot be null');
        }
        $this->container['page'] = $page;

        return $this;
    }

    /**
     * Gets cost
     *
     * @return int|null
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /**
     * Sets cost
     *
     * @param int|null $cost cost
     *
     * @return self
     */
    public function setCost($cost)
    {
        if (is_null($cost)) {
            throw new \InvalidArgumentException('non-nullable cost cannot be null');
        }
        $this->container['cost'] = $cost;

        return $this;
    }

    /**
     * Gets payback_cost
     *
     * @return int|null
     */
    public function getPaybackCost()
    {
        return $this->container['payback_cost'];
    }

    /**
     * Sets payback_cost
     *
     * @param int|null $payback_cost payback_cost
     *
     * @return self
     */
    public function setPaybackCost($payback_cost)
    {
        if (is_null($payback_cost)) {
            throw new \InvalidArgumentException('non-nullable payback_cost cannot be null');
        }
        $this->container['payback_cost'] = $payback_cost;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

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


