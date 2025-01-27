<?php
/**
 * Param
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
 * Generator version: 7.11.0
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
 * Param Class Doc Comment
 *
 * @category Class
 * @description A single parameter set for one classification, for example face, describing the behaviour of the AI. Each classification has default parameters that are set if these are empty.
 * @package  Irisnet\API\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Param implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Param';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'classification' => 'string',
        'prototype' => 'string',
        'min' => 'int',
        'max' => 'int',
        'severity' => 'int',
        'drawMode' => 'int',
        'grey' => 'int',
        'scale' => 'float',
        'ignore' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'classification' => null,
        'prototype' => null,
        'min' => 'int32',
        'max' => 'int32',
        'severity' => 'int32',
        'drawMode' => 'int32',
        'grey' => 'int32',
        'scale' => 'float',
        'ignore' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'classification' => false,
        'prototype' => false,
        'min' => false,
        'max' => false,
        'severity' => false,
        'drawMode' => false,
        'grey' => false,
        'scale' => false,
        'ignore' => false
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
        'classification' => 'classification',
        'prototype' => 'prototype',
        'min' => 'min',
        'max' => 'max',
        'severity' => 'severity',
        'drawMode' => 'drawMode',
        'grey' => 'grey',
        'scale' => 'scale',
        'ignore' => 'ignore'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'classification' => 'setClassification',
        'prototype' => 'setPrototype',
        'min' => 'setMin',
        'max' => 'setMax',
        'severity' => 'setSeverity',
        'drawMode' => 'setDrawMode',
        'grey' => 'setGrey',
        'scale' => 'setScale',
        'ignore' => 'setIgnore'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'classification' => 'getClassification',
        'prototype' => 'getPrototype',
        'min' => 'getMin',
        'max' => 'getMax',
        'severity' => 'getSeverity',
        'drawMode' => 'getDrawMode',
        'grey' => 'getGrey',
        'scale' => 'getScale',
        'ignore' => 'getIgnore'
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

    public const CLASSIFICATION_NUDITY_CHECK = 'nudityCheck';
    public const CLASSIFICATION_FACE = 'face';
    public const CLASSIFICATION_HAND = 'hand';
    public const CLASSIFICATION_FOOT = 'foot';
    public const CLASSIFICATION_FOOTWEAR = 'footwear';
    public const CLASSIFICATION_CHEST = 'chest';
    public const CLASSIFICATION_BREAST = 'breast';
    public const CLASSIFICATION_VULVA = 'vulva';
    public const CLASSIFICATION_PENIS = 'penis';
    public const CLASSIFICATION_VAGINA = 'vagina';
    public const CLASSIFICATION_BUTTOCKS = 'buttocks';
    public const CLASSIFICATION_ANUS = 'anus';
    public const CLASSIFICATION_ORAL = 'oral';
    public const CLASSIFICATION_PENETRATION = 'penetration';
    public const CLASSIFICATION_TOY = 'toy';
    public const CLASSIFICATION_BONDAGE = 'bondage';
    public const CLASSIFICATION_GAG = 'gag';
    public const CLASSIFICATION_AGE_ESTIMATION = 'ageEstimation';
    public const CLASSIFICATION_CHILD = 'child';
    public const CLASSIFICATION_ADULT = 'adult';
    public const CLASSIFICATION_SENIOR = 'senior';
    public const CLASSIFICATION_POSE = 'pose';
    public const CLASSIFICATION_ILLEGAL_SYMBOLS = 'illegalSymbols';
    public const CLASSIFICATION_TEXT_RECOGNITION = 'textRecognition';
    public const CLASSIFICATION_ATTRIBUTES_CHECK = 'attributesCheck';
    public const CLASSIFICATION_FEMALE = 'female';
    public const CLASSIFICATION_MALE = 'male';
    public const CLASSIFICATION_HAIR = 'hair';
    public const CLASSIFICATION_HAIRLESS = 'hairless';
    public const CLASSIFICATION_BEARD = 'beard';
    public const CLASSIFICATION_MOUSTACHE = 'moustache';
    public const CLASSIFICATION_HEADPIECE = 'headpiece';
    public const CLASSIFICATION_GLASSES = 'glasses';
    public const CLASSIFICATION_SUNGLASSES = 'sunglasses';
    public const CLASSIFICATION_MASK = 'mask';
    public const CLASSIFICATION_SLIM_SIZED_FACE = 'slimSizedFace';
    public const CLASSIFICATION_REAL_SIZED_FACE = 'realSizedFace';
    public const CLASSIFICATION_PLUS_SIZED_FACE = 'plusSizedFace';
    public const CLASSIFICATION_BODY_ATTRIBUTES = 'bodyAttributes';
    public const CLASSIFICATION_SLIM_SIZED = 'slimSized';
    public const CLASSIFICATION_REAL_SIZED = 'realSized';
    public const CLASSIFICATION_PLUS_SIZED = 'plusSized';
    public const CLASSIFICATION_NIPPLE_CHECK = 'nippleCheck';
    public const CLASSIFICATION_NO_NIPPLE = 'noNipple';
    public const CLASSIFICATION_HAS_NIPPLE = 'hasNipple';
    public const CLASSIFICATION_UNWANTED_SUBSTANCES = 'unwantedSubstances';
    public const CLASSIFICATION_BEER = 'beer';
    public const CLASSIFICATION_BEER_BOTTLE = 'beerBottle';
    public const CLASSIFICATION_BEER_CAN = 'beerCan';
    public const CLASSIFICATION_WINE = 'wine';
    public const CLASSIFICATION_WINE_BOTTLE = 'wineBottle';
    public const CLASSIFICATION_COCKTAIL = 'cocktail';
    public const CLASSIFICATION_ALCOHOL = 'alcohol';
    public const CLASSIFICATION_CANNABIS = 'cannabis';
    public const CLASSIFICATION_CIGARETTE = 'cigarette';
    public const CLASSIFICATION_COCAINE = 'cocaine';
    public const CLASSIFICATION_HEROINE = 'heroine';
    public const CLASSIFICATION_COFFEE = 'coffee';
    public const CLASSIFICATION_VIOLENCE_CHECK = 'violenceCheck';
    public const CLASSIFICATION_CAMOUFLAGE = 'camouflage';
    public const CLASSIFICATION_CLUB = 'club';
    public const CLASSIFICATION_KNIFE = 'knife';
    public const CLASSIFICATION_SWORD = 'sword';
    public const CLASSIFICATION_PISTOL = 'pistol';
    public const CLASSIFICATION_RIFLE = 'rifle';
    public const CLASSIFICATION_CANNON = 'cannon';
    public const CLASSIFICATION_FIRE = 'fire';
    public const CLASSIFICATION_SELFIE_CHECK = 'selfieCheck';
    public const CLASSIFICATION_HAND2MOUTH = 'hand2mouth';
    public const CLASSIFICATION_POINT2NOSE = 'point2nose';
    public const CLASSIFICATION_RELAXED = 'relaxed';
    public const CLASSIFICATION_POINT2CHIN = 'point2chin';
    public const CLASSIFICATION_HAND2CHEEK = 'hand2cheek';
    public const CLASSIFICATION_EXCELLENT = 'excellent';
    public const CLASSIFICATION_NICE = 'nice';
    public const CLASSIFICATION_THINKING = 'thinking';
    public const CLASSIFICATION_THUMB_UP = 'thumbUp';
    public const CLASSIFICATION_VICTORY = 'victory';
    public const CLASSIFICATION_LOOKOUT = 'lookout';
    public const CLASSIFICATION_FINGER_UP = 'fingerUp';
    public const CLASSIFICATION_MIDDLE_FINGER = 'middleFinger';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getClassificationAllowableValues()
    {
        return [
            self::CLASSIFICATION_NUDITY_CHECK,
            self::CLASSIFICATION_FACE,
            self::CLASSIFICATION_HAND,
            self::CLASSIFICATION_FOOT,
            self::CLASSIFICATION_FOOTWEAR,
            self::CLASSIFICATION_CHEST,
            self::CLASSIFICATION_BREAST,
            self::CLASSIFICATION_VULVA,
            self::CLASSIFICATION_PENIS,
            self::CLASSIFICATION_VAGINA,
            self::CLASSIFICATION_BUTTOCKS,
            self::CLASSIFICATION_ANUS,
            self::CLASSIFICATION_ORAL,
            self::CLASSIFICATION_PENETRATION,
            self::CLASSIFICATION_TOY,
            self::CLASSIFICATION_BONDAGE,
            self::CLASSIFICATION_GAG,
            self::CLASSIFICATION_AGE_ESTIMATION,
            self::CLASSIFICATION_CHILD,
            self::CLASSIFICATION_ADULT,
            self::CLASSIFICATION_SENIOR,
            self::CLASSIFICATION_POSE,
            self::CLASSIFICATION_ILLEGAL_SYMBOLS,
            self::CLASSIFICATION_TEXT_RECOGNITION,
            self::CLASSIFICATION_ATTRIBUTES_CHECK,
            self::CLASSIFICATION_FEMALE,
            self::CLASSIFICATION_MALE,
            self::CLASSIFICATION_HAIR,
            self::CLASSIFICATION_HAIRLESS,
            self::CLASSIFICATION_BEARD,
            self::CLASSIFICATION_MOUSTACHE,
            self::CLASSIFICATION_HEADPIECE,
            self::CLASSIFICATION_GLASSES,
            self::CLASSIFICATION_SUNGLASSES,
            self::CLASSIFICATION_MASK,
            self::CLASSIFICATION_SLIM_SIZED_FACE,
            self::CLASSIFICATION_REAL_SIZED_FACE,
            self::CLASSIFICATION_PLUS_SIZED_FACE,
            self::CLASSIFICATION_BODY_ATTRIBUTES,
            self::CLASSIFICATION_SLIM_SIZED,
            self::CLASSIFICATION_REAL_SIZED,
            self::CLASSIFICATION_PLUS_SIZED,
            self::CLASSIFICATION_NIPPLE_CHECK,
            self::CLASSIFICATION_NO_NIPPLE,
            self::CLASSIFICATION_HAS_NIPPLE,
            self::CLASSIFICATION_UNWANTED_SUBSTANCES,
            self::CLASSIFICATION_BEER,
            self::CLASSIFICATION_BEER_BOTTLE,
            self::CLASSIFICATION_BEER_CAN,
            self::CLASSIFICATION_WINE,
            self::CLASSIFICATION_WINE_BOTTLE,
            self::CLASSIFICATION_COCKTAIL,
            self::CLASSIFICATION_ALCOHOL,
            self::CLASSIFICATION_CANNABIS,
            self::CLASSIFICATION_CIGARETTE,
            self::CLASSIFICATION_COCAINE,
            self::CLASSIFICATION_HEROINE,
            self::CLASSIFICATION_COFFEE,
            self::CLASSIFICATION_VIOLENCE_CHECK,
            self::CLASSIFICATION_CAMOUFLAGE,
            self::CLASSIFICATION_CLUB,
            self::CLASSIFICATION_KNIFE,
            self::CLASSIFICATION_SWORD,
            self::CLASSIFICATION_PISTOL,
            self::CLASSIFICATION_RIFLE,
            self::CLASSIFICATION_CANNON,
            self::CLASSIFICATION_FIRE,
            self::CLASSIFICATION_SELFIE_CHECK,
            self::CLASSIFICATION_HAND2MOUTH,
            self::CLASSIFICATION_POINT2NOSE,
            self::CLASSIFICATION_RELAXED,
            self::CLASSIFICATION_POINT2CHIN,
            self::CLASSIFICATION_HAND2CHEEK,
            self::CLASSIFICATION_EXCELLENT,
            self::CLASSIFICATION_NICE,
            self::CLASSIFICATION_THINKING,
            self::CLASSIFICATION_THUMB_UP,
            self::CLASSIFICATION_VICTORY,
            self::CLASSIFICATION_LOOKOUT,
            self::CLASSIFICATION_FINGER_UP,
            self::CLASSIFICATION_MIDDLE_FINGER,
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
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('classification', $data ?? [], null);
        $this->setIfExists('prototype', $data ?? [], null);
        $this->setIfExists('min', $data ?? [], null);
        $this->setIfExists('max', $data ?? [], null);
        $this->setIfExists('severity', $data ?? [], 100);
        $this->setIfExists('drawMode', $data ?? [], null);
        $this->setIfExists('grey', $data ?? [], 127);
        $this->setIfExists('scale', $data ?? [], 1.0);
        $this->setIfExists('ignore', $data ?? [], false);
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

        if ($this->container['classification'] === null) {
            $invalidProperties[] = "'classification' can't be null";
        }
        $allowedValues = $this->getClassificationAllowableValues();
        if (!is_null($this->container['classification']) && !in_array($this->container['classification'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'classification', must be one of '%s'",
                $this->container['classification'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['min']) && ($this->container['min'] < -1)) {
            $invalidProperties[] = "invalid value for 'min', must be bigger than or equal to -1.";
        }

        if (!is_null($this->container['max']) && ($this->container['max'] < -1)) {
            $invalidProperties[] = "invalid value for 'max', must be bigger than or equal to -1.";
        }

        if (!is_null($this->container['severity']) && ($this->container['severity'] > 999)) {
            $invalidProperties[] = "invalid value for 'severity', must be smaller than or equal to 999.";
        }

        if (!is_null($this->container['severity']) && ($this->container['severity'] < 0)) {
            $invalidProperties[] = "invalid value for 'severity', must be bigger than or equal to 0.";
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

        if (!is_null($this->container['scale']) && ($this->container['scale'] > 4.0)) {
            $invalidProperties[] = "invalid value for 'scale', must be smaller than or equal to 4.0.";
        }

        if (!is_null($this->container['scale']) && ($this->container['scale'] < 0.5)) {
            $invalidProperties[] = "invalid value for 'scale', must be bigger than or equal to 0.5.";
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
     * Gets classification
     *
     * @return string
     */
    public function getClassification()
    {
        return $this->container['classification'];
    }

    /**
     * Sets classification
     *
     * @param string $classification The classification of the object, that the element refers to. The following is a tree representation of the prototypes and their containing classifications. Default parameter values are defined per classification object. The default values of 'min', 'max' and 'drawMode' are witten after the name of the classification object in that order. Use the prototype names to set parameters to all of the containing classifications.  ##### nudityCheck > _A prototype containing classifications for basic human attributes and sexual contents. This prototype and the containing classifications are activated by default_ * _face_ _(1, 3, 0)_ * _hand_ _(0, -1, 0)_ * _foot_ _(0, -1, 0)_ * _footwear_ _(0, -1, 0)_ * _chest_ _(0, -1, 0)_ * _breast_ _(0, 0, 2)_ * _vulva_ _(0, 0, 2)_ * _penis_ _(0, 0, 2)_ * _vagina_ _(0, 0, 2)_ * _buttocks_ _(0, 0, 2)_ * _anus_ _(0, 0, 2)_ * _oral_ _(0, 0, 2)_ * _penetration_ _(0, 0, 2)_ * _toy_ _(0, -1, 0)_ * _bondage_ _(0, -1, 0)_ * _gag_ _(0, -1, 0)_ ##### ageEstimation > _Contains classification objects for estimating the age of a human face. This prototype activates nudityCheck_ * _child (*)_ _(0, 0, 6)_ * _adult (*)_ _(0, -1, 0)_ * _senior (*)_ _(0, -1, 0)_ * _pose (*)_ _(0, 0, 0)_ - The age can not be estimated, due to a pose that hides facial features. ##### illegalSymbols > _Contains various classification objects of symbols that are prohibited in Germany (e.g. Hakenkreuz, SS, etc). These are grouped under a single name_ * _illegalSymbols_ _(0, 0, 1)_ ##### textRecognition > _Contains letters, numbers and some symbols (e.g. @, #, etc) as classification objects. These are grouped under a single name_ * _textRecognition_ _(0, 6, 6)_ ##### attributesCheck > _Contains classification objects for various attributes of the human face. This prototype activates nudityCheck_ * _female_ _(0, -1, 0)_ * _male_ _(0, -1, 0)_ * _hair_ _(0, -1, 0)_ * _hairless_ _(0, -1, 0)_ * _beard_ _(0, -1, 0)_ * _moustache_ _(0, -1, 0)_ * _headpiece_ _(0, -1, 0)_ * _glasses_ _(0, -1, 0)_ * _sunglasses_ _(0, -1, 0)_ * _mask_ _(0, -1, 0)_ * _slimSizedFace (*)_ _(0, -1, 0)_ * _realSizedFace (*)_ _(0, -1, 0)_ * _plusSizedFace (*)_ _(0, -1, 0)_ ##### bodyAttributes > _Contains classification objects for determining the body size._ * _slimSized_ _(0, -1, 0)_ * _realSized_ _(0, -1, 0)_ * _plusSized_ _(0, -1, 0)_ ##### nippleCheck > _Contains classifications for determining if the object recognized as breast has a nipple. This prototype activates nudityCheck_ * _noNipple_ _(0, -1, 0)_ * _hasNipple_ _(0, 0, 0)_ ##### unwantedSubstances > _Contains classification objects for different substances._ * _beer_ _(0, -1, 0)_ * _beerBottle_ _(0, -1, 0)_ * _beerCan_ _(0, -1, 0)_ * _wine_ _(0, -1, 0)_ * _wineBottle_ _(0, -1, 0)_ * _cocktail_ _(0, -1, 0)_ * _alcohol_ _(0, -1, 0)_ * _cannabis_ _(0, 0, 0)_ * _cigarette_ _(0, 0, 0)_ * _cocaine_ _(0, 0, 0)_ * _heroine_ _(0, 0, 0)_ * _coffee_ _(0, -1, 0)_ ##### violenceCheck > _Contains classification objects for violent items or acts._ * _camouflage_ _(0, -1, 0)_ * _club_ _(0, -1, 0)_ * _knife_ _(0, 0, 0)_ * _sword_ _(0, 0, 0)_ * _pistol_ _(0, 0, 0)_ * _rifle_ _(0, 0, 0)_ * _cannon_ _(0, 0, 0)_ * _fire_ _(0, -1, 0)_ ##### selfieCheck > _Classification objects representing various pre-defined poses for the selfie task._ * _hand2mouth_ _(0, 1, 0)_ * _point2nose_ _(0, 1, 0)_ * _relaxed_ _(0, 1, 0)_ * _point2chin_ _(0, 1, 0)_ * _hand2cheek_ _(0, 1, 0)_ * _excellent_ _(0, 1, 0)_ * _nice_ _(0, 1, 0)_ * _thinking_ _(0, 1, 0)_ * _thumbUp_ _(0, 1, 0)_ * _victory_ _(0, 1, 0)_ * _lookout_ _(0, 1, 0)_ * _fingerUp_ _(0, 1, 0)_ * _middleFinger_ _(0, 0, 0)_   _Classification objects that are marked with (*) are sub-classifications of face. Both face and the marked classification are affected by the given parameter values._  _Please be aware that the default values can be subject to change. This is due to the difficulty of recognizing certain objects e.g. objects that are classified as toy._
     *
     * @return self
     */
    public function setClassification($classification)
    {
        if (is_null($classification)) {
            throw new \InvalidArgumentException('non-nullable classification cannot be null');
        }
        $allowedValues = $this->getClassificationAllowableValues();
        if (!in_array($classification, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'classification', must be one of '%s'",
                    $classification,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['classification'] = $classification;

        return $this;
    }

    /**
     * Gets prototype
     *
     * @return string|null
     */
    public function getPrototype()
    {
        return $this->container['prototype'];
    }

    /**
     * Sets prototype
     *
     * @param string|null $prototype The prototype that the classification object belongs to. Setting the prototype will specify the parameters for the classification belonging to the prototype.
     *
     * @return self
     */
    public function setPrototype($prototype)
    {
        if (is_null($prototype)) {
            throw new \InvalidArgumentException('non-nullable prototype cannot be null');
        }
        $this->container['prototype'] = $prototype;

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
     * @param int|null $min The minimum amount of objects allowed on the image. Setting the value to -1 will cause the AI to ignore this rule. For moving images this value is applied to a single frame.
     *
     * @return self
     */
    public function setMin($min)
    {
        if (is_null($min)) {
            throw new \InvalidArgumentException('non-nullable min cannot be null');
        }

        if (($min < -1)) {
            throw new \InvalidArgumentException('invalid value for $min when calling Param., must be bigger than or equal to -1.');
        }

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
     * @param int|null $max The maximum amount of objects allowed on the image. Setting the value to -1 will cause the AI to ignore this rule. For moving images this value is applied to a single frame.
     *
     * @return self
     */
    public function setMax($max)
    {
        if (is_null($max)) {
            throw new \InvalidArgumentException('non-nullable max cannot be null');
        }

        if (($max < -1)) {
            throw new \InvalidArgumentException('invalid value for $max when calling Param., must be bigger than or equal to -1.');
        }

        $this->container['max'] = $max;

        return $this;
    }

    /**
     * Gets severity
     *
     * @return int|null
     */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
     * Sets severity
     *
     * @param int|null $severity Set a value to define the severity of a broken rule of the given classification object.
     *
     * @return self
     */
    public function setSeverity($severity)
    {
        if (is_null($severity)) {
            throw new \InvalidArgumentException('non-nullable severity cannot be null');
        }

        if (($severity > 999)) {
            throw new \InvalidArgumentException('invalid value for $severity when calling Param., must be smaller than or equal to 999.');
        }
        if (($severity < 0)) {
            throw new \InvalidArgumentException('invalid value for $severity when calling Param., must be bigger than or equal to 0.');
        }

        $this->container['severity'] = $severity;

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
     * @param int|null $drawMode Set if and how a classification object should be drawn over.  * _0_ - will draw nothing, * _1_ - will draw a frame with class name surrounding the object, * _2_ - will draw a filled rectangle that will mask the object, * _3_ - is a combination between _1_ and _2_ (frame/name + mask), * _6_ - will blur the object and * _7_ - is a combination between _1_ and _6_ (frame/name + blur).
     *
     * @return self
     */
    public function setDrawMode($drawMode)
    {
        if (is_null($drawMode)) {
            throw new \InvalidArgumentException('non-nullable drawMode cannot be null');
        }

        if (($drawMode > 7)) {
            throw new \InvalidArgumentException('invalid value for $drawMode when calling Param., must be smaller than or equal to 7.');
        }
        if (($drawMode < 0)) {
            throw new \InvalidArgumentException('invalid value for $drawMode when calling Param., must be bigger than or equal to 0.');
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
     * @param int|null $grey A grey scale color used in combination of _drawMode_ '2' or '3'. '0' will represent black, while the maximum '255' will be white.
     *
     * @return self
     */
    public function setGrey($grey)
    {
        if (is_null($grey)) {
            throw new \InvalidArgumentException('non-nullable grey cannot be null');
        }

        if (($grey > 255)) {
            throw new \InvalidArgumentException('invalid value for $grey when calling Param., must be smaller than or equal to 255.');
        }
        if (($grey < 0)) {
            throw new \InvalidArgumentException('invalid value for $grey when calling Param., must be bigger than or equal to 0.');
        }

        $this->container['grey'] = $grey;

        return $this;
    }

    /**
     * Gets scale
     *
     * @return float|null
     */
    public function getScale()
    {
        return $this->container['scale'];
    }

    /**
     * Sets scale
     *
     * @param float|null $scale Scale of the bounds around the classification object. Specify a value to increase or decrease the size of the bounds. This is applied to the resulting media as well as the JSON coordinates.
     *
     * @return self
     */
    public function setScale($scale)
    {
        if (is_null($scale)) {
            throw new \InvalidArgumentException('non-nullable scale cannot be null');
        }

        if (($scale > 4.0)) {
            throw new \InvalidArgumentException('invalid value for $scale when calling Param., must be smaller than or equal to 4.0.');
        }
        if (($scale < 0.5)) {
            throw new \InvalidArgumentException('invalid value for $scale when calling Param., must be bigger than or equal to 0.5.');
        }

        $this->container['scale'] = $scale;

        return $this;
    }

    /**
     * Gets ignore
     *
     * @return bool|null
     */
    public function getIgnore()
    {
        return $this->container['ignore'];
    }

    /**
     * Sets ignore
     *
     * @param bool|null $ignore A shorthand to ignore the classification object. This is equal to setting _min=0_, _max=-1_ and _drawMode=0_.
     *
     * @return self
     */
    public function setIgnore($ignore)
    {
        if (is_null($ignore)) {
            throw new \InvalidArgumentException('non-nullable ignore cannot be null');
        }
        $this->container['ignore'] = $ignore;

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


