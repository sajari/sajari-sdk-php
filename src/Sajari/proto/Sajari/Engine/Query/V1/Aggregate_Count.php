<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sajari/engine/query/v1/query.proto

namespace Sajari\Engine\Query\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Count records the number of unique values for a field.
 * </pre>
 *
 * Protobuf type <code>sajari.engine.query.v1.Aggregate.Count</code>
 */
class Aggregate_Count extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Name of the field to count values from.
     * </pre>
     *
     * <code>string field = 1;</code>
     */
    private $field = '';

    public function __construct() {
        \GPBMetadata\Sajari\Engine\Query\V1\Query::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Name of the field to count values from.
     * </pre>
     *
     * <code>string field = 1;</code>
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * <pre>
     * Name of the field to count values from.
     * </pre>
     *
     * <code>string field = 1;</code>
     */
    public function setField($var)
    {
        GPBUtil::checkString($var, True);
        $this->field = $var;
    }

}

