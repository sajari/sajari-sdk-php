<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sajari/engine/query/v1/query.proto

namespace Sajari\Engine\Query\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Terms is a list of terms which overlap for a particular document.
 * </pre>
 *
 * Protobuf type <code>sajari.engine.query.v1.AnalyseResponse.Terms</code>
 */
class AnalyseResponse_Terms extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>repeated string terms = 1;</code>
     */
    private $terms;

    public function __construct() {
        \GPBMetadata\Sajari\Engine\Query\V1\Query::initOnce();
        parent::__construct();
    }

    /**
     * <code>repeated string terms = 1;</code>
     */
    public function getTerms()
    {
        return $this->terms;
    }

    /**
     * <code>repeated string terms = 1;</code>
     */
    public function setTerms(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->terms = $var;
    }

}
