<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sajari/engine/query/v1/query.proto

namespace Sajari\Engine\Query\V1\Aggregate;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metric calculates numerical information from a field.
 *
 * Generated from protobuf message <code>sajari.engine.query.v1.Aggregate.Metric</code>
 */
class Metric extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the field to run numerical metrics.
     *
     * Generated from protobuf field <code>string field = 1;</code>
     */
    private $field = '';
    /**
     * The type of metric to apply.
     *
     * Generated from protobuf field <code>.sajari.engine.query.v1.Aggregate.Metric.Type type = 2;</code>
     */
    private $type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $field
     *           Name of the field to run numerical metrics.
     *     @type int $type
     *           The type of metric to apply.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Sajari\Engine\Query\V1\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the field to run numerical metrics.
     *
     * Generated from protobuf field <code>string field = 1;</code>
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * Name of the field to run numerical metrics.
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
     * The type of metric to apply.
     *
     * Generated from protobuf field <code>.sajari.engine.query.v1.Aggregate.Metric.Type type = 2;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of metric to apply.
     *
     * Generated from protobuf field <code>.sajari.engine.query.v1.Aggregate.Metric.Type type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Sajari\Engine\Query\V1\Aggregate_Metric_Type::class);
        $this->type = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Metric::class, \Sajari\Engine\Query\V1\Aggregate_Metric::class);
