<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sajari/engine/query/v1/query.proto

namespace Sajari\Engine\Query\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Geo is a geo-based filter for documents with lat/lng fields representing a location.
 * </pre>
 *
 * Protobuf type <code>sajari.engine.query.v1.Filter.Geo</code>
 */
class Filter_Geo extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Field containing latitude (degrees).
     * </pre>
     *
     * <code>string field_lat = 1;</code>
     */
    private $field_lat = '';
    /**
     * <pre>
     * Field containing longitude (degrees).
     * </pre>
     *
     * <code>string field_lng = 2;</code>
     */
    private $field_lng = '';
    /**
     * <pre>
     * Target latitude (in degrees).
     * </pre>
     *
     * <code>double lat = 3;</code>
     */
    private $lat = 0.0;
    /**
     * <pre>
     * Target longitude (in degrees).
     * </pre>
     *
     * <code>double lng = 4;</code>
     */
    private $lng = 0.0;
    /**
     * <pre>
     * Radius (in km) of matching border (see region).
     * </pre>
     *
     * <code>double radius = 5;</code>
     */
    private $radius = 0.0;
    /**
     * <pre>
     * Region for matching points.
     * </pre>
     *
     * <code>.sajari.engine.query.v1.Filter.Geo.Region region = 6;</code>
     */
    private $region = 0;

    public function __construct() {
        \GPBMetadata\Sajari\Engine\Query\V1\Query::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Field containing latitude (degrees).
     * </pre>
     *
     * <code>string field_lat = 1;</code>
     */
    public function getFieldLat()
    {
        return $this->field_lat;
    }

    /**
     * <pre>
     * Field containing latitude (degrees).
     * </pre>
     *
     * <code>string field_lat = 1;</code>
     */
    public function setFieldLat($var)
    {
        GPBUtil::checkString($var, True);
        $this->field_lat = $var;
    }

    /**
     * <pre>
     * Field containing longitude (degrees).
     * </pre>
     *
     * <code>string field_lng = 2;</code>
     */
    public function getFieldLng()
    {
        return $this->field_lng;
    }

    /**
     * <pre>
     * Field containing longitude (degrees).
     * </pre>
     *
     * <code>string field_lng = 2;</code>
     */
    public function setFieldLng($var)
    {
        GPBUtil::checkString($var, True);
        $this->field_lng = $var;
    }

    /**
     * <pre>
     * Target latitude (in degrees).
     * </pre>
     *
     * <code>double lat = 3;</code>
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * <pre>
     * Target latitude (in degrees).
     * </pre>
     *
     * <code>double lat = 3;</code>
     */
    public function setLat($var)
    {
        GPBUtil::checkDouble($var);
        $this->lat = $var;
    }

    /**
     * <pre>
     * Target longitude (in degrees).
     * </pre>
     *
     * <code>double lng = 4;</code>
     */
    public function getLng()
    {
        return $this->lng;
    }

    /**
     * <pre>
     * Target longitude (in degrees).
     * </pre>
     *
     * <code>double lng = 4;</code>
     */
    public function setLng($var)
    {
        GPBUtil::checkDouble($var);
        $this->lng = $var;
    }

    /**
     * <pre>
     * Radius (in km) of matching border (see region).
     * </pre>
     *
     * <code>double radius = 5;</code>
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * <pre>
     * Radius (in km) of matching border (see region).
     * </pre>
     *
     * <code>double radius = 5;</code>
     */
    public function setRadius($var)
    {
        GPBUtil::checkDouble($var);
        $this->radius = $var;
    }

    /**
     * <pre>
     * Region for matching points.
     * </pre>
     *
     * <code>.sajari.engine.query.v1.Filter.Geo.Region region = 6;</code>
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * <pre>
     * Region for matching points.
     * </pre>
     *
     * <code>.sajari.engine.query.v1.Filter.Geo.Region region = 6;</code>
     */
    public function setRegion($var)
    {
        GPBUtil::checkEnum($var, \Sajari\Engine\Query\V1\Filter_Geo_Region::class);
        $this->region = $var;
    }

}
