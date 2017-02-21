<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sajari/engine/query/v1/query.proto

namespace Sajari\Engine\Query\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Count contains the counts for the set of values returned
 * </pre>
 *
 * Protobuf type <code>sajari.engine.query.v1.AggregateResponse.Count</code>
 */
class AggregateResponse_Count extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>map&lt;string, int32&gt; counts = 1;</code>
     */
    private $counts;

    public function __construct() {
        \GPBMetadata\Sajari\Engine\Query\V1\Query::initOnce();
        parent::__construct();
    }

    /**
     * <code>map&lt;string, int32&gt; counts = 1;</code>
     */
    public function getCounts()
    {
        return $this->counts;
    }

    /**
     * <code>map&lt;string, int32&gt; counts = 1;</code>
     */
    public function setCounts(&$var)
    {
        $this->counts = $var;
    }

}

