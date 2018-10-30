<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sajari/engine/query/v1/query.proto

namespace Sajari\Engine\Query\V1\FieldBoost\Interval;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Point is a pair (point, value) which defines the boost value
 * at a particiular point.
 *
 * Generated from protobuf message <code>sajari.engine.query.v1.FieldBoost.Interval.Point</code>
 */
class Point extends \Google\Protobuf\Internal\Message
{
    /**
     * The point to mark the beginning/end of an interval.
     *
     * Generated from protobuf field <code>double point = 1;</code>
     */
    private $point = 0.0;
    /**
     * The amount to boost by at this Point.
     *
     * Generated from protobuf field <code>double value = 2;</code>
     */
    private $value = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $point
     *           The point to mark the beginning/end of an interval.
     *     @type float $value
     *           The amount to boost by at this Point.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Sajari\Engine\Query\V1\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * The point to mark the beginning/end of an interval.
     *
     * Generated from protobuf field <code>double point = 1;</code>
     * @return float
     */
    public function getPoint()
    {
        return $this->point;
    }

    /**
     * The point to mark the beginning/end of an interval.
     *
     * Generated from protobuf field <code>double point = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setPoint($var)
    {
        GPBUtil::checkDouble($var);
        $this->point = $var;

        return $this;
    }

    /**
     * The amount to boost by at this Point.
     *
     * Generated from protobuf field <code>double value = 2;</code>
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * The amount to boost by at this Point.
     *
     * Generated from protobuf field <code>double value = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkDouble($var);
        $this->value = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Point::class, \Sajari\Engine\Query\V1\FieldBoost_Interval_Point::class);

