<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sajari/engine/query/v1/query.proto

namespace Sajari\Engine\Query\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * FeatureQuery
 * </pre>
 *
 * Protobuf type <code>sajari.engine.query.v1.SearchRequest.FeatureQuery</code>
 */
class SearchRequest_FeatureQuery extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * A list of field boosts.
     * </pre>
     *
     * <code>repeated .sajari.engine.query.v1.SearchRequest.FeatureQuery.FieldBoost field_boosts = 1;</code>
     */
    private $field_boosts;

    public function __construct() {
        \GPBMetadata\Sajari\Engine\Query\V1\Query::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * A list of field boosts.
     * </pre>
     *
     * <code>repeated .sajari.engine.query.v1.SearchRequest.FeatureQuery.FieldBoost field_boosts = 1;</code>
     */
    public function getFieldBoosts()
    {
        return $this->field_boosts;
    }

    /**
     * <pre>
     * A list of field boosts.
     * </pre>
     *
     * <code>repeated .sajari.engine.query.v1.SearchRequest.FeatureQuery.FieldBoost field_boosts = 1;</code>
     */
    public function setFieldBoosts(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Sajari\Engine\Query\V1\SearchRequest_FeatureQuery_FieldBoost::class);
        $this->field_boosts = $var;
    }

}
