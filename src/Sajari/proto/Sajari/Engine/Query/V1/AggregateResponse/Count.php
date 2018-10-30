<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sajari/engine/query/v1/query.proto

namespace Sajari\Engine\Query\V1\AggregateResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Count contains the counts for the set of values returned
 *
 * Generated from protobuf message <code>sajari.engine.query.v1.AggregateResponse.Count</code>
 */
class Count extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>map<string, int32> counts = 1;</code>
     */
    private $counts;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|\Google\Protobuf\Internal\MapField $counts
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Sajari\Engine\Query\V1\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>map<string, int32> counts = 1;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getCounts()
    {
        return $this->counts;
    }

    /**
     * Generated from protobuf field <code>map<string, int32> counts = 1;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setCounts($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::INT32);
        $this->counts = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Count::class, \Sajari\Engine\Query\V1\AggregateResponse_Count::class);

