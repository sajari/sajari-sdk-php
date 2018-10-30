<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sajari/engine/query/v1/query.proto

namespace Sajari\Engine\Query\V1\Aggregate;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Date groups timestamp values into date-interval buckets.
 *
 * Generated from protobuf message <code>sajari.engine.query.v1.Aggregate.Date</code>
 */
class Date extends \Google\Protobuf\Internal\Message
{
    /**
     * Field to read values from.
     *
     * Generated from protobuf field <code>string field = 1;</code>
     */
    private $field = '';
    /**
     * Interval to apply to buckets.
     *
     * Generated from protobuf field <code>.sajari.engine.query.v1.Aggregate.Date.Interval interval = 2;</code>
     */
    private $interval = 0;
    /**
     * Multiple of interval value.
     *
     * Generated from protobuf field <code>float interval_multiple = 3;</code>
     */
    private $interval_multiple = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $field
     *           Field to read values from.
     *     @type int $interval
     *           Interval to apply to buckets.
     *     @type float $interval_multiple
     *           Multiple of interval value.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Sajari\Engine\Query\V1\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * Field to read values from.
     *
     * Generated from protobuf field <code>string field = 1;</code>
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * Field to read values from.
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
     * Interval to apply to buckets.
     *
     * Generated from protobuf field <code>.sajari.engine.query.v1.Aggregate.Date.Interval interval = 2;</code>
     * @return int
     */
    public function getInterval()
    {
        return $this->interval;
    }

    /**
     * Interval to apply to buckets.
     *
     * Generated from protobuf field <code>.sajari.engine.query.v1.Aggregate.Date.Interval interval = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setInterval($var)
    {
        GPBUtil::checkEnum($var, \Sajari\Engine\Query\V1\Aggregate_Date_Interval::class);
        $this->interval = $var;

        return $this;
    }

    /**
     * Multiple of interval value.
     *
     * Generated from protobuf field <code>float interval_multiple = 3;</code>
     * @return float
     */
    public function getIntervalMultiple()
    {
        return $this->interval_multiple;
    }

    /**
     * Multiple of interval value.
     *
     * Generated from protobuf field <code>float interval_multiple = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setIntervalMultiple($var)
    {
        GPBUtil::checkFloat($var);
        $this->interval_multiple = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Date::class, \Sajari\Engine\Query\V1\Aggregate_Date::class);

