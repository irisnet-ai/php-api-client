<?php
/**
 * AgeEstimationDetection
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
 * Generator version: 7.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Irisnet\API\Client\Model;
use \Irisnet\API\Client\ObjectSerializer;

/**
 * AgeEstimationDetection Class Doc Comment
 *
 * @category Class
 * @description Contains further characteristics particular to _ageEstimation_ detection.
 * @package  Irisnet\API\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AgeEstimationDetection extends BaseDetection
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AgeEstimationDetection';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'checkId' => 'string',
        'faceSimilarity' => 'int',
        'faceLivenessCheckScore' => 'int',
        'processedChecks' => '\Irisnet\API\Client\Model\AgeEstimationSubChecks',
        'attributes' => '\Irisnet\API\Client\Model\AgeEstimationAttribute[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'checkId' => null,
        'faceSimilarity' => 'int32',
        'faceLivenessCheckScore' => 'int32',
        'processedChecks' => null,
        'attributes' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'checkId' => false,
        'faceSimilarity' => false,
        'faceLivenessCheckScore' => false,
        'processedChecks' => false,
        'attributes' => false
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
        return self::$openAPITypes + parent::openAPITypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats + parent::openAPIFormats();
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables + parent::openAPINullables();
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
        'checkId' => 'checkId',
        'faceSimilarity' => 'faceSimilarity',
        'faceLivenessCheckScore' => 'faceLivenessCheckScore',
        'processedChecks' => 'processedChecks',
        'attributes' => 'attributes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'checkId' => 'setCheckId',
        'faceSimilarity' => 'setFaceSimilarity',
        'faceLivenessCheckScore' => 'setFaceLivenessCheckScore',
        'processedChecks' => 'setProcessedChecks',
        'attributes' => 'setAttributes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'checkId' => 'getCheckId',
        'faceSimilarity' => 'getFaceSimilarity',
        'faceLivenessCheckScore' => 'getFaceLivenessCheckScore',
        'processedChecks' => 'getProcessedChecks',
        'attributes' => 'getAttributes'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->setIfExists('checkId', $data ?? [], null);
        $this->setIfExists('faceSimilarity', $data ?? [], null);
        $this->setIfExists('faceLivenessCheckScore', $data ?? [], null);
        $this->setIfExists('processedChecks', $data ?? [], null);
        $this->setIfExists('attributes', $data ?? [], null);
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
        $invalidProperties = parent::listInvalidProperties();

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
     * Gets checkId
     *
     * @return string|null
     */
    public function getCheckId()
    {
        return $this->container['checkId'];
    }

    /**
     * Sets checkId
     *
     * @param string|null $checkId The id of the check that lead to the detection
     *
     * @return self
     */
    public function setCheckId($checkId)
    {
        if (is_null($checkId)) {
            throw new \InvalidArgumentException('non-nullable checkId cannot be null');
        }
        $this->container['checkId'] = $checkId;

        return $this;
    }

    /**
     * Gets faceSimilarity
     *
     * @return int|null
     */
    public function getFaceSimilarity()
    {
        return $this->container['faceSimilarity'];
    }

    /**
     * Sets faceSimilarity
     *
     * @param int|null $faceSimilarity Indicates the similarity-level of whether two faces belong to the same person
     *
     * @return self
     */
    public function setFaceSimilarity($faceSimilarity)
    {
        if (is_null($faceSimilarity)) {
            throw new \InvalidArgumentException('non-nullable faceSimilarity cannot be null');
        }
        $this->container['faceSimilarity'] = $faceSimilarity;

        return $this;
    }

    /**
     * Gets faceLivenessCheckScore
     *
     * @return int|null
     */
    public function getFaceLivenessCheckScore()
    {
        return $this->container['faceLivenessCheckScore'];
    }

    /**
     * Sets faceLivenessCheckScore
     *
     * @param int|null $faceLivenessCheckScore Indicates the liveness score of the selfie image
     *
     * @return self
     */
    public function setFaceLivenessCheckScore($faceLivenessCheckScore)
    {
        if (is_null($faceLivenessCheckScore)) {
            throw new \InvalidArgumentException('non-nullable faceLivenessCheckScore cannot be null');
        }
        $this->container['faceLivenessCheckScore'] = $faceLivenessCheckScore;

        return $this;
    }

    /**
     * Gets processedChecks
     *
     * @return \Irisnet\API\Client\Model\AgeEstimationSubChecks|null
     */
    public function getProcessedChecks()
    {
        return $this->container['processedChecks'];
    }

    /**
     * Sets processedChecks
     *
     * @param \Irisnet\API\Client\Model\AgeEstimationSubChecks|null $processedChecks processedChecks
     *
     * @return self
     */
    public function setProcessedChecks($processedChecks)
    {
        if (is_null($processedChecks)) {
            throw new \InvalidArgumentException('non-nullable processedChecks cannot be null');
        }
        $this->container['processedChecks'] = $processedChecks;

        return $this;
    }

    /**
     * Gets attributes
     *
     * @return \Irisnet\API\Client\Model\AgeEstimationAttribute[]|null
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param \Irisnet\API\Client\Model\AgeEstimationAttribute[]|null $attributes Attributes of the _idDocument_ detection.
     *
     * @return self
     */
    public function setAttributes($attributes)
    {
        if (is_null($attributes)) {
            throw new \InvalidArgumentException('non-nullable attributes cannot be null');
        }
        $this->container['attributes'] = $attributes;

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

