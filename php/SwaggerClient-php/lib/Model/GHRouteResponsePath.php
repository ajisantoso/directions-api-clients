<?php
/**
 * GHRouteResponsePath
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * GraphHopper Directions API
 *
 * With the GraphHopper Directions API you get reliable and fast web services for routing and more with world wide coverage. We offer A-to-B routing via the Routing API optionally with turn instructions and elevation data as well as route optimization with various constraints like time window and capacity restrictions. Also it is possible to get all distances between all locations with our fast Matrix API.
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * GHRouteResponsePath Class Doc Comment
 *
 * @category    Class
 * @description A found path
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GHRouteResponsePath implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'GHRouteResponsePath';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'distance' => 'double',
        'time' => 'int',
        'ascend' => 'double',
        'descend' => 'double',
        'points' => '\Swagger\Client\Model\GHResponseCoordinates',
        'points_encoded' => 'bool',
        'bbox' => 'double[]',
        'snapped_waypoints' => '\Swagger\Client\Model\GHResponseCoordinates',
        'instructions' => '\Swagger\Client\Model\GHResponseInstructions'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'distance' => 'distance',
        'time' => 'time',
        'ascend' => 'ascend',
        'descend' => 'descend',
        'points' => 'points',
        'points_encoded' => 'points_encoded',
        'bbox' => 'bbox',
        'snapped_waypoints' => 'snapped_waypoints',
        'instructions' => 'instructions'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'distance' => 'setDistance',
        'time' => 'setTime',
        'ascend' => 'setAscend',
        'descend' => 'setDescend',
        'points' => 'setPoints',
        'points_encoded' => 'setPointsEncoded',
        'bbox' => 'setBbox',
        'snapped_waypoints' => 'setSnappedWaypoints',
        'instructions' => 'setInstructions'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'distance' => 'getDistance',
        'time' => 'getTime',
        'ascend' => 'getAscend',
        'descend' => 'getDescend',
        'points' => 'getPoints',
        'points_encoded' => 'getPointsEncoded',
        'bbox' => 'getBbox',
        'snapped_waypoints' => 'getSnappedWaypoints',
        'instructions' => 'getInstructions'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['distance'] = isset($data['distance']) ? $data['distance'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['ascend'] = isset($data['ascend']) ? $data['ascend'] : null;
        $this->container['descend'] = isset($data['descend']) ? $data['descend'] : null;
        $this->container['points'] = isset($data['points']) ? $data['points'] : null;
        $this->container['points_encoded'] = isset($data['points_encoded']) ? $data['points_encoded'] : null;
        $this->container['bbox'] = isset($data['bbox']) ? $data['bbox'] : null;
        $this->container['snapped_waypoints'] = isset($data['snapped_waypoints']) ? $data['snapped_waypoints'] : null;
        $this->container['instructions'] = isset($data['instructions']) ? $data['instructions'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets distance
     * @return double
     */
    public function getDistance()
    {
        return $this->container['distance'];
    }

    /**
     * Sets distance
     * @param double $distance The total distance of the route, in meter
     * @return $this
     */
    public function setDistance($distance)
    {
        $this->container['distance'] = $distance;

        return $this;
    }

    /**
     * Gets time
     * @return int
     */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
     * Sets time
     * @param int $time The total time of the route, in ms
     * @return $this
     */
    public function setTime($time)
    {
        $this->container['time'] = $time;

        return $this;
    }

    /**
     * Gets ascend
     * @return double
     */
    public function getAscend()
    {
        return $this->container['ascend'];
    }

    /**
     * Sets ascend
     * @param double $ascend
     * @return $this
     */
    public function setAscend($ascend)
    {
        $this->container['ascend'] = $ascend;

        return $this;
    }

    /**
     * Gets descend
     * @return double
     */
    public function getDescend()
    {
        return $this->container['descend'];
    }

    /**
     * Sets descend
     * @param double $descend The total descend (downhill) of the route, in meter
     * @return $this
     */
    public function setDescend($descend)
    {
        $this->container['descend'] = $descend;

        return $this;
    }

    /**
     * Gets points
     * @return \Swagger\Client\Model\GHResponseCoordinates
     */
    public function getPoints()
    {
        return $this->container['points'];
    }

    /**
     * Sets points
     * @param \Swagger\Client\Model\GHResponseCoordinates $points
     * @return $this
     */
    public function setPoints($points)
    {
        $this->container['points'] = $points;

        return $this;
    }

    /**
     * Gets points_encoded
     * @return bool
     */
    public function getPointsEncoded()
    {
        return $this->container['points_encoded'];
    }

    /**
     * Sets points_encoded
     * @param bool $points_encoded Is true if the points are encoded, if not paths[0].points contains the geo json of the path (then order is lon,lat,elevation), which is easier to handle but consumes more bandwidth compared to encoded version
     * @return $this
     */
    public function setPointsEncoded($points_encoded)
    {
        $this->container['points_encoded'] = $points_encoded;

        return $this;
    }

    /**
     * Gets bbox
     * @return double[]
     */
    public function getBbox()
    {
        return $this->container['bbox'];
    }

    /**
     * Sets bbox
     * @param double[] $bbox The bounding box of the route, format <br> minLon, minLat, maxLon, maxLat
     * @return $this
     */
    public function setBbox($bbox)
    {
        $this->container['bbox'] = $bbox;

        return $this;
    }

    /**
     * Gets snapped_waypoints
     * @return \Swagger\Client\Model\GHResponseCoordinates
     */
    public function getSnappedWaypoints()
    {
        return $this->container['snapped_waypoints'];
    }

    /**
     * Sets snapped_waypoints
     * @param \Swagger\Client\Model\GHResponseCoordinates $snapped_waypoints
     * @return $this
     */
    public function setSnappedWaypoints($snapped_waypoints)
    {
        $this->container['snapped_waypoints'] = $snapped_waypoints;

        return $this;
    }

    /**
     * Gets instructions
     * @return \Swagger\Client\Model\GHResponseInstructions
     */
    public function getInstructions()
    {
        return $this->container['instructions'];
    }

    /**
     * Sets instructions
     * @param \Swagger\Client\Model\GHResponseInstructions $instructions
     * @return $this
     */
    public function setInstructions($instructions)
    {
        $this->container['instructions'] = $instructions;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


