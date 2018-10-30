<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sajari/engine/query/v1/query.proto

namespace Sajari\Engine\Query\V1\FieldBoost;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Interval is a distance-based boost for numeric fields.
 * It is comprised of a series of points to represent
 * any linear distribution across a numerical range.
 *
 * Generated from protobuf message <code>sajari.engine.query.v1.FieldBoost.Interval</code>
 */
class Interval extends \Google\Protobuf\Internal\Message
{
    /**
     * Numerical field to apply the boost.
     *
     * Generated from protobuf field <code>string field = 1;</code>
     */
    private $field = '';
    /**
     * Points which define intervals boundaries (must be at least 2).
     * Values between internal points are determined linearly.
     *
     * Generated from protobuf field <code>repeated .sajari.engine.query.v1.FieldBoost.Interval.Point points = 2;</code>
     */
    private $points;
    /**
     * Extension defines how this boost behaves outside the interval.
     *
     * Generated from protobuf field <code>.sajari.engine.query.v1.FieldBoost.Interval.Extension extend = 3;</code>
     */
    private $extend = 0;
    /**
     * Value to apply to null values.
     *
     * Generated from protobuf field <code>double NullValue = 4;</code>
     */
    private $NullValue = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $field
     *           Numerical field to apply the boost.
     *     @type \Sajari\Engine\Query\V1\FieldBoost\Interval\Point[]|\Google\Protobuf\Internal\RepeatedField $points
     *           Points which define intervals boundaries (must be at least 2).
     *           Values between internal points are determined linearly.
     *     @type int $extend
     *           Extension defines how this boost behaves outside the interval.
     *     @type float $NullValue
     *           Value to apply to null values.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Sajari\Engine\Query\V1\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * Numerical field to apply the boost.
     *
     * Generated from protobuf field <code>string field = 1;</code>
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * Numerical field to apply the boost.
     *
     * Generated from protobuf field <code>string field = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setField($var)
    {
        GPBUtil::checkString($var, True);
        $this->field = $var;

        return $this;
    }

    /**
     * Points which define intervals boundaries (must be at least 2).
     * Values between internal points are determined linearly.
     *
     * Generated from protobuf field <code>repeated .sajari.engine.query.v1.FieldBoost.Interval.Point points = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * Points which define intervals boundaries (must be at least 2).
     * Values between internal points are determined linearly.
     *
     * Generated from protobuf field <code>repeated .sajari.engine.query.v1.FieldBoost.Interval.Point points = 2;</code>
     * @param \Sajari\Engine\Query\V1\FieldBoost\Interval\Point[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPoints($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Sajari\Engine\Query\V1\FieldBoost\Interval\Point::class);
        $this->points = $arr;

        return $this;
    }

    /**
     * Extension defines how this boost behaves outside the interval.
     *
     * Generated from protobuf field <code>.sajari.engine.query.v1.FieldBoost.Interval.Extension extend = 3;</code>
     * @return int
     */
    public function getExtend()
    {
        return $this->extend;
    }

    /**
     * Extension defines how this boost behaves outside the interval.
     *
     * Generated from protobuf field <code>.sajari.engine.query.v1.FieldBoost.Interval.Extension extend = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setExtend($var)
    {
        GPBUtil::checkEnum($var, \Sajari\Engine\Query\V1\FieldBoost_Interval_Extension::class);
        $this->extend = $var;

        return $this;
    }

    /**
     * Value to apply to null values.
     *
     * Generated from protobuf field <code>double NullValue = 4;</code>
     * @return float
     */
    public function getNullValue()
    {
        return $this->NullValue;
    }

    /**
     * Value to apply to null values.
     *
     * Generated from protobuf field <code>double NullValue = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setNullValue($var)
    {
        GPBUtil::checkDouble($var);
        $this->NullValue = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Interval::class, \Sajari\Engine\Query\V1\FieldBoost_Interval::class);
