<?php
/**
 * AgeEstimationSubChecks
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
 * Generator version: 7.8.0
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
 * AgeEstimationSubChecks Class Doc Comment
 *
 * @category Class
 * @description Contains information on ageEstimation sub-checks
 * @package  Irisnet\API\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AgeEstimationSubChecks implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AgeEstimationSubChecks';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'faceLivenessCheck' => 'string',
        'ageValidationCheck' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'faceLivenessCheck' => null,
        'ageValidationCheck' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'faceLivenessCheck' => false,
        'ageValidationCheck' => false
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
        'faceLivenessCheck' => 'faceLivenessCheck',
        'ageValidationCheck' => 'ageValidationCheck'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'faceLivenessCheck' => 'setFaceLivenessCheck',
        'ageValidationCheck' => 'setAgeValidationCheck'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'faceLivenessCheck' => 'getFaceLivenessCheck',
        'ageValidationCheck' => 'getAgeValidationCheck'
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

    public const FACE_LIVENESS_CHECK_PASSED = 'passed';
    public const FACE_LIVENESS_CHECK_FAILED = 'failed';
    public const FACE_LIVENESS_CHECK_NOT_PROCESSED = 'not_processed';
    public const AGE_VALIDATION_CHECK_PASSED = 'passed';
    public const AGE_VALIDATION_CHECK_FAILED = 'failed';
    public const AGE_VALIDATION_CHECK_NOT_PROCESSED = 'not_processed';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFaceLivenessCheckAllowableValues()
    {
        return [
            self::FACE_LIVENESS_CHECK_PASSED,
            self::FACE_LIVENESS_CHECK_FAILED,
            self::FACE_LIVENESS_CHECK_NOT_PROCESSED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAgeValidationCheckAllowableValues()
    {
        return [
            self::AGE_VALIDATION_CHECK_PASSED,
            self::AGE_VALIDATION_CHECK_FAILED,
            self::AGE_VALIDATION_CHECK_NOT_PROCESSED,
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
        $this->setIfExists('faceLivenessCheck', $data ?? [], null);
        $this->setIfExists('ageValidationCheck', $data ?? [], null);
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

        $allowedValues = $this->getFaceLivenessCheckAllowableValues();
        if (!is_null($this->container['faceLivenessCheck']) && !in_array($this->container['faceLivenessCheck'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'faceLivenessCheck', must be one of '%s'",
                $this->container['faceLivenessCheck'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getAgeValidationCheckAllowableValues();
        if (!is_null($this->container['ageValidationCheck']) && !in_array($this->container['ageValidationCheck'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'ageValidationCheck', must be one of '%s'",
                $this->container['ageValidationCheck'],
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
     * Gets faceLivenessCheck
     *
     * @return string|null
     */
    public function getFaceLivenessCheck()
    {
        return $this->container['faceLivenessCheck'];
    }

    /**
     * Sets faceLivenessCheck
     *
     * @param string|null $faceLivenessCheck Indicates if the selfie image is genuine and not a photo of an image or of a screen
     *
     * @return self
     */
    public function setFaceLivenessCheck($faceLivenessCheck)
    {
        if (is_null($faceLivenessCheck)) {
            throw new \InvalidArgumentException('non-nullable faceLivenessCheck cannot be null');
        }
        $allowedValues = $this->getFaceLivenessCheckAllowableValues();
        if (!in_array($faceLivenessCheck, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'faceLivenessCheck', must be one of '%s'",
                    $faceLivenessCheck,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['faceLivenessCheck'] = $faceLivenessCheck;

        return $this;
    }

    /**
     * Gets ageValidationCheck
     *
     * @return string|null
     */
    public function getAgeValidationCheck()
    {
        return $this->container['ageValidationCheck'];
    }

    /**
     * Sets ageValidationCheck
     *
     * @param string|null $ageValidationCheck Indicates if the estimated age is greater than or equal to a predefined minimum accepted age
     *
     * @return self
     */
    public function setAgeValidationCheck($ageValidationCheck)
    {
        if (is_null($ageValidationCheck)) {
            throw new \InvalidArgumentException('non-nullable ageValidationCheck cannot be null');
        }
        $allowedValues = $this->getAgeValidationCheckAllowableValues();
        if (!in_array($ageValidationCheck, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'ageValidationCheck', must be one of '%s'",
                    $ageValidationCheck,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['ageValidationCheck'] = $ageValidationCheck;

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


