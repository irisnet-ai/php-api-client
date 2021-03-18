<?php
/**
 * INParam
 *
 * PHP version 5
 *
 * @category Class
 * @package  Irisnet\API\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Irisnet API
 *
 * Artificial Intelligence (AI) for image- and video-processing in realtime. This is an interactive documentation meant to give a place were you can quickly look up the endpoints and their schemas, while also giving you the option to try things out yourself.  Listed below you'll see the available endpoints of the API that can be expanded by clicking on it. Each expanded endpoint lists the request parameter (if available) and the request body (if available). The request body can list some example bodies and the schema, explaining each model in detail. Additionally you'll find a 'Try it out' button where you can type in your custom parameters and custom body and execute that against the API. The responses section in the expanded endpoint lists the possible responses with their corresponding status codes. If you've executed an API call it will also show you the response from the server.  Underneath the endpoints you'll find the model schemas. These are the models used for the requests and responses.By clicking on the right arrow you can expand the model and it will show you a description of the model and the model parameters. For nested models you can keep clicking the right arrow to reveal further details on it.
 *
 * The version of the OpenAPI document: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
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
 * INParam Class Doc Comment
 *
 * @category Class
 * @description A single parameter set for one object, for example face, describing the behaviour of the AI. Each object has default parameters that are set if these are empty.
 * @package  Irisnet\API\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class INParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'INParam';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'inClass' => 'string',
        'min' => 'int',
        'max' => 'int',
        'drawMode' => 'int',
        'grey' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'inClass' => null,
        'min' => 'int32',
        'max' => 'int32',
        'drawMode' => 'int32',
        'grey' => 'int32'
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
        'inClass' => 'inClass',
        'min' => 'min',
        'max' => 'max',
        'drawMode' => 'drawMode',
        'grey' => 'grey'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'inClass' => 'setInClass',
        'min' => 'setMin',
        'max' => 'setMax',
        'drawMode' => 'setDrawMode',
        'grey' => 'setGrey'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'inClass' => 'getInClass',
        'min' => 'getMin',
        'max' => 'getMax',
        'drawMode' => 'getDrawMode',
        'grey' => 'getGrey'
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

    const IN_CLASS_FACE = 'face';
    const IN_CLASS_CHILD = 'child';
    const IN_CLASS_ADULT = 'adult';
    const IN_CLASS_SENIOR = 'senior';
    const IN_CLASS_POSE = 'pose';
    const IN_CLASS_HAND = 'hand';
    const IN_CLASS_BREAST = 'breast';
    const IN_CLASS_VULVA = 'vulva';
    const IN_CLASS_PENIS = 'penis';
    const IN_CLASS_VAGINA = 'vagina';
    const IN_CLASS_BUTTOCKS = 'buttocks';
    const IN_CLASS_ANUS = 'anus';
    const IN_CLASS_TOY = 'toy';
    const IN_CLASS_ORAL = 'oral';
    const IN_CLASS_PENETRATION = 'penetration';
    const IN_CLASS_FOOT = 'foot';
    const IN_CLASS_FOOTWEAR = 'footwear';
    const IN_CLASS_NUDITY_CHECK = 'nudityCheck';
    const IN_CLASS_AGE_VERIFICATION = 'ageVerification';
    const IN_CLASS_AGE_ESTIMATION = 'ageEstimation';
    const IN_CLASS_ILLEGAL_SYMBOLS = 'illegalSymbols';
    const IN_CLASS_TEXT_RECOGNITION = 'textRecognition';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInClassAllowableValues()
    {
        return [
            self::IN_CLASS_FACE,
            self::IN_CLASS_CHILD,
            self::IN_CLASS_ADULT,
            self::IN_CLASS_SENIOR,
            self::IN_CLASS_POSE,
            self::IN_CLASS_HAND,
            self::IN_CLASS_BREAST,
            self::IN_CLASS_VULVA,
            self::IN_CLASS_PENIS,
            self::IN_CLASS_VAGINA,
            self::IN_CLASS_BUTTOCKS,
            self::IN_CLASS_ANUS,
            self::IN_CLASS_TOY,
            self::IN_CLASS_ORAL,
            self::IN_CLASS_PENETRATION,
            self::IN_CLASS_FOOT,
            self::IN_CLASS_FOOTWEAR,
            self::IN_CLASS_NUDITY_CHECK,
            self::IN_CLASS_AGE_VERIFICATION,
            self::IN_CLASS_AGE_ESTIMATION,
            self::IN_CLASS_ILLEGAL_SYMBOLS,
            self::IN_CLASS_TEXT_RECOGNITION,
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
        $this->container['inClass'] = isset($data['inClass']) ? $data['inClass'] : null;
        $this->container['min'] = isset($data['min']) ? $data['min'] : null;
        $this->container['max'] = isset($data['max']) ? $data['max'] : null;
        $this->container['drawMode'] = isset($data['drawMode']) ? $data['drawMode'] : null;
        $this->container['grey'] = isset($data['grey']) ? $data['grey'] : 127;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getInClassAllowableValues();
        if (!is_null($this->container['inClass']) && !in_array($this->container['inClass'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'inClass', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['drawMode']) && ($this->container['drawMode'] > 7)) {
            $invalidProperties[] = "invalid value for 'drawMode', must be smaller than or equal to 7.";
        }

        if (!is_null($this->container['drawMode']) && ($this->container['drawMode'] < 0)) {
            $invalidProperties[] = "invalid value for 'drawMode', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['grey']) && ($this->container['grey'] > 255)) {
            $invalidProperties[] = "invalid value for 'grey', must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['grey']) && ($this->container['grey'] < 0)) {
            $invalidProperties[] = "invalid value for 'grey', must be bigger than or equal to 0.";
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
     * Gets inClass
     *
     * @return string|null
     */
    public function getInClass()
    {
        return $this->container['inClass'];
    }

    /**
     * Sets inClass
     *
     * @param string|null $inClass The classification of the object, that the element refers to. Default parameter values are defined per classification object. The following list contains the default values for 'min', 'max' and 'drawMode' in order.  * _face_ _(1, 3, 0)_ - Classification for human faces. * _child_ _(0, 0, 1)_ - Recognizes children's faces. Overwrites classification parameters of face. * _adult_ _(0, -1, 1)_ - Recognizes faces of adults that are not considered seniors. Overwrites classification parameters of face. * _senior_ _(0, -1, 1)_ - Recognizes faces of seniors. Overwrites classification parameters of face. * _pose_ _(0, 0, 1)_ - The age can not be estimated, due to a pose that hides facial features. * _hand_ _(0, -1, 0)_ - Classification for recognizing hands. * _foot_ _(0, -1, 0)_ - Classification for recognizing feet. * _footwear_ _(0, -1, 0)_ - Classification for recognizing footwear. * _breast_ _(0, 0, 2)_ - Object that recognizes female breasts. * _vulva_ _(0, 0, 2)_ - Object that recognizes vulvae. * _penis_ _(0, 0, 2)_ - Object that recognizes penises. * _vagina_ _(0, 0, 2)_ - Object that recognizes vaginae. * _buttocks_ _(0, 0, 2)_ - Object that recognizes buttocks. * _anus_ _(0, 0, 2)_ - Object that recognizes ani. * _toy_ _(0, 0, 2)_ - Object that recognizes sex toys. * _oral_ _(0, 0, 2)_ - Object that recognizes oral sex. * _penetration_ _(0, 0, 2)_ - Object that recognizes a sexual penetration penetration. * _illegalSymbols_ _(0, 0, 1)_ - Classification for symbols that are not permitted in Germany.  * _textRecognition_ _(0, 3, 6)_ - Classification for recognizing text occurrences.  _Please be aware that the default values can be subject to change. This is due to the difficulty of recognizing certain objects e.g. objects that are classified as toy._
     *
     * @return $this
     */
    public function setInClass($inClass)
    {
        $allowedValues = $this->getInClassAllowableValues();
        if (!is_null($inClass) && !in_array($inClass, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'inClass', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['inClass'] = $inClass;

        return $this;
    }

    /**
     * Gets min
     *
     * @return int|null
     */
    public function getMin()
    {
        return $this->container['min'];
    }

    /**
     * Sets min
     *
     * @param int|null $min The minimum amount of objects allowed on the source media. Setting the value to -1 will cause the AI to ignore this rule.
     *
     * @return $this
     */
    public function setMin($min)
    {
        $this->container['min'] = $min;

        return $this;
    }

    /**
     * Gets max
     *
     * @return int|null
     */
    public function getMax()
    {
        return $this->container['max'];
    }

    /**
     * Sets max
     *
     * @param int|null $max The maximum amount of objects allowed on the source media. Setting the value to -1 will cause the AI to ignore this rule.
     *
     * @return $this
     */
    public function setMax($max)
    {
        $this->container['max'] = $max;

        return $this;
    }

    /**
     * Gets drawMode
     *
     * @return int|null
     */
    public function getDrawMode()
    {
        return $this->container['drawMode'];
    }

    /**
     * Sets drawMode
     *
     * @param int|null $drawMode The draw mode that will be used for the creating the media.  * _0_ - will draw nothing, * _1_ - will draw a frame with class name surrounding the object, * _2_ - will draw a filled rectangle that will mask the object, * _3_ - is a combination between _1_ and _2_ (frame/name + mask), * _6_ - will blur the object and * _7_ - is a combination between _1_ and _6_ (frame/name + blur).
     *
     * @return $this
     */
    public function setDrawMode($drawMode)
    {

        if (!is_null($drawMode) && ($drawMode > 7)) {
            throw new \InvalidArgumentException('invalid value for $drawMode when calling INParam., must be smaller than or equal to 7.');
        }
        if (!is_null($drawMode) && ($drawMode < 0)) {
            throw new \InvalidArgumentException('invalid value for $drawMode when calling INParam., must be bigger than or equal to 0.');
        }

        $this->container['drawMode'] = $drawMode;

        return $this;
    }

    /**
     * Gets grey
     *
     * @return int|null
     */
    public function getGrey()
    {
        return $this->container['grey'];
    }

    /**
     * Sets grey
     *
     * @param int|null $grey A grey scale color to use for masking. '0' will represent black, while the maximum '255' will be white.
     *
     * @return $this
     */
    public function setGrey($grey)
    {

        if (!is_null($grey) && ($grey > 255)) {
            throw new \InvalidArgumentException('invalid value for $grey when calling INParam., must be smaller than or equal to 255.');
        }
        if (!is_null($grey) && ($grey < 0)) {
            throw new \InvalidArgumentException('invalid value for $grey when calling INParam., must be bigger than or equal to 0.');
        }

        $this->container['grey'] = $grey;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
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


