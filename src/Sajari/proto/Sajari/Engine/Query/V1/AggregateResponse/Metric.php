<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sajari/engine/query/v1/query.proto

namespace Sajari\Engine\Query\V1\AggregateResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metric represents the metric type requested, represented by an Enumeration Type.
 *
 * Generated from protobuf message <code>sajari.engine.query.v1.AggregateResponse.Metric</code>
 */
class Metric extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>double value = 1;</code>
     */
    private $value = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $value
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Sajari\Engine\Query\V1\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>double value = 1;</code>
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Generated from protobuf field <code>double value = 1;</code>
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
class_alias(Metric::class, \Sajari\Engine\Query\V1\AggregateResponse_Metric::class);
