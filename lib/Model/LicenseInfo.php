<?php
/**
 * LicenseInfo
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Irisnet\API\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Irisnet API
 *
 * Artificial Intelligence (AI) for image- and video-processing in real-time. This is an interactive documentation where you can quickly look up the endpoints and their schemas, while having the opportunity to try things out for yourself.  In the list below, you can see the available endpoints of the API, which can be expanded by clicking on them. Each expanded endpoint lists the request parameters (if available) and the request body (if available). The request body can list some example bodies and the schema, explaining each model in detail.  Additionally you'll find a 'Try it out' button that allows you to enter your custom parameters and custom body and execute that against the API. <b>Be sure to enter your license key to authorize the requests before using this documentation interactively.</b>  The responses section in the expanded endpoint lists the possible responses with their corresponding status codes. If you've executed an API call it will also show you the response from the server.  Underneath the endpoints you'll find the model schemas. These are the models used for the requests and responses. If you click on the right arrow, you can expand the model and get a description of the model and the model parameters. For nested models, you can keep clicking the right arrow for further details.  Clicking the link below the title at the top of this page opens the [OpenAPI specification](https://swagger.io/specification/) (OAS3) in JSON format. The OAS3 Spec allows the generation of clients in many programming languages. There are several free client generators available that can be used to get started easily.
 *
 * The version of the OpenAPI document: v2
 * Contact: info@irisnet.de
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.1.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Irisnet\API\Client\Model;

use \ArrayAccess;
use \Irisnet\API\Client\ObjectSerializer;

/**
 * LicenseInfo Class Doc Comment
 *
 * @category Class
 * @description Describes the current balance of the given license key. A key has a certain amount of credits that can be used for any kind of AI recognition. The license key is invalid, when all of the credits have been used, the license was disabled or expired.
 * @package  Irisnet\API\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class LicenseInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LicenseInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'creditsUsed' => 'int',
        'creditsRemaining' => 'int',
        'totalCredits' => 'int',
        'licenseKey' => 'string',
        'privileges' => 'array<string,string>'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'creditsUsed' => 'int32',
        'creditsRemaining' => 'int32',
        'totalCredits' => 'int32',
        'licenseKey' => null,
        'privileges' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'creditsUsed' => false,
		'creditsRemaining' => false,
		'totalCredits' => false,
		'licenseKey' => false,
		'privileges' => false
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
        'creditsUsed' => 'creditsUsed',
        'creditsRemaining' => 'creditsRemaining',
        'totalCredits' => 'totalCredits',
        'licenseKey' => 'licenseKey',
        'privileges' => 'privileges'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'creditsUsed' => 'setCreditsUsed',
        'creditsRemaining' => 'setCreditsRemaining',
        'totalCredits' => 'setTotalCredits',
        'licenseKey' => 'setLicenseKey',
        'privileges' => 'setPrivileges'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'creditsUsed' => 'getCreditsUsed',
        'creditsRemaining' => 'getCreditsRemaining',
        'totalCredits' => 'getTotalCredits',
        'licenseKey' => 'getLicenseKey',
        'privileges' => 'getPrivileges'
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
        $this->setIfExists('creditsUsed', $data ?? [], null);
        $this->setIfExists('creditsRemaining', $data ?? [], null);
        $this->setIfExists('totalCredits', $data ?? [], null);
        $this->setIfExists('licenseKey', $data ?? [], null);
        $this->setIfExists('privileges', $data ?? [], null);
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
     * Gets creditsUsed
     *
     * @return int|null
     */
    public function getCreditsUsed()
    {
        return $this->container['creditsUsed'];
    }

    /**
     * Sets creditsUsed
     *
     * @param int|null $creditsUsed Credits used for the license key.
     *
     * @return self
     */
    public function setCreditsUsed($creditsUsed)
    {
        if (is_null($creditsUsed)) {
            throw new \InvalidArgumentException('non-nullable creditsUsed cannot be null');
        }
        $this->container['creditsUsed'] = $creditsUsed;

        return $this;
    }

    /**
     * Gets creditsRemaining
     *
     * @return int|null
     */
    public function getCreditsRemaining()
    {
        return $this->container['creditsRemaining'];
    }

    /**
     * Sets creditsRemaining
     *
     * @param int|null $creditsRemaining Credits remaining for the license key.
     *
     * @return self
     */
    public function setCreditsRemaining($creditsRemaining)
    {
        if (is_null($creditsRemaining)) {
            throw new \InvalidArgumentException('non-nullable creditsRemaining cannot be null');
        }
        $this->container['creditsRemaining'] = $creditsRemaining;

        return $this;
    }

    /**
     * Gets totalCredits
     *
     * @return int|null
     */
    public function getTotalCredits()
    {
        return $this->container['totalCredits'];
    }

    /**
     * Sets totalCredits
     *
     * @param int|null $totalCredits Total credits contained within the license key.
     *
     * @return self
     */
    public function setTotalCredits($totalCredits)
    {
        if (is_null($totalCredits)) {
            throw new \InvalidArgumentException('non-nullable totalCredits cannot be null');
        }
        $this->container['totalCredits'] = $totalCredits;

        return $this;
    }

    /**
     * Gets licenseKey
     *
     * @return string|null
     */
    public function getLicenseKey()
    {
        return $this->container['licenseKey'];
    }

    /**
     * Sets licenseKey
     *
     * @param string|null $licenseKey The license key
     *
     * @return self
     */
    public function setLicenseKey($licenseKey)
    {
        if (is_null($licenseKey)) {
            throw new \InvalidArgumentException('non-nullable licenseKey cannot be null');
        }
        $this->container['licenseKey'] = $licenseKey;

        return $this;
    }

    /**
     * Gets privileges
     *
     * @return array<string,string>|null
     */
    public function getPrivileges()
    {
        return $this->container['privileges'];
    }

    /**
     * Sets privileges
     *
     * @param array<string,string>|null $privileges A map of privileges
     *
     * @return self
     */
    public function setPrivileges($privileges)
    {
        if (is_null($privileges)) {
            throw new \InvalidArgumentException('non-nullable privileges cannot be null');
        }
        $this->container['privileges'] = $privileges;

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


