<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sajari/engine/query/v1/query.proto

namespace Sajari\Engine\Query\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * IndexQuery defines criteria for matching documents based on the search index.
 * </pre>
 *
 * Protobuf type <code>sajari.engine.query.v1.SearchRequest.IndexQuery</code>
 */
class SearchRequest_IndexQuery extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Body is a list of weighted free text.
     * </pre>
     *
     * <code>repeated .sajari.engine.query.v1.Body body = 1;</code>
     */
    private $body;
    /**
     * <pre>
     * Terms is a list of weighted terms, where terms represent tokenised sequences of text.
     * </pre>
     *
     * <code>repeated .sajari.engine.query.v1.Term terms = 2;</code>
     */
    private $terms;
    /**
     * <pre>
     * InstanceBoosts are a list of boost rules computed against a document's term instances.
     * Instance boosting allows callers to boost documents which have terms that match
     * a rule.
     * </pre>
     *
     * <code>repeated .sajari.engine.query.v1.InstanceBoost instance_boosts = 3;</code>
     */
    private $instance_boosts;
    /**
     * <pre>
     * FieldBoosts are a list of rules checked against a document's field values.
     * Field boosting allows callers to boost documents which have field values that
     * match a rule.
     * </pre>
     *
     * <code>repeated .sajari.engine.query.v1.FieldBoost field_boosts = 4;</code>
     */
    private $field_boosts;

    public function __construct() {
        \GPBMetadata\Sajari\Engine\Query\V1\Query::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Body is a list of weighted free text.
     * </pre>
     *
     * <code>repeated .sajari.engine.query.v1.Body body = 1;</code>
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * <pre>
     * Body is a list of weighted free text.
     * </pre>
     *
     * <code>repeated .sajari.engine.query.v1.Body body = 1;</code>
     */
    public function setBody(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Sajari\Engine\Query\V1\Body::class);
        $this->body = $var;
    }

    /**
     * <pre>
     * Terms is a list of weighted terms, where terms represent tokenised sequences of text.
     * </pre>
     *
     * <code>repeated .sajari.engine.query.v1.Term terms = 2;</code>
     */
    public function getTerms()
    {
        return $this->terms;
    }

    /**
     * <pre>
     * Terms is a list of weighted terms, where terms represent tokenised sequences of text.
     * </pre>
     *
     * <code>repeated .sajari.engine.query.v1.Term terms = 2;</code>
     */
    public function setTerms(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Sajari\Engine\Query\V1\Term::class);
        $this->terms = $var;
    }

    /**
     * <pre>
     * InstanceBoosts are a list of boost rules computed against a document's term instances.
     * Instance boosting allows callers to boost documents which have terms that match
     * a rule.
     * </pre>
     *
     * <code>repeated .sajari.engine.query.v1.InstanceBoost instance_boosts = 3;</code>
     */
    public function getInstanceBoosts()
    {
        return $this->instance_boosts;
    }

    /**
     * <pre>
     * InstanceBoosts are a list of boost rules computed against a document's term instances.
     * Instance boosting allows callers to boost documents which have terms that match
     * a rule.
     * </pre>
     *
     * <code>repeated .sajari.engine.query.v1.InstanceBoost instance_boosts = 3;</code>
     */
    public function setInstanceBoosts(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Sajari\Engine\Query\V1\InstanceBoost::class);
        $this->instance_boosts = $var;
    }

    /**
     * <pre>
     * FieldBoosts are a list of rules checked against a document's field values.
     * Field boosting allows callers to boost documents which have field values that
     * match a rule.
     * </pre>
     *
     * <code>repeated .sajari.engine.query.v1.FieldBoost field_boosts = 4;</code>
     */
    public function getFieldBoosts()
    {
        return $this->field_boosts;
    }

    /**
     * <pre>
     * FieldBoosts are a list of rules checked against a document's field values.
     * Field boosting allows callers to boost documents which have field values that
     * match a rule.
     * </pre>
     *
     * <code>repeated .sajari.engine.query.v1.FieldBoost field_boosts = 4;</code>
     */
    public function setFieldBoosts(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Sajari\Engine\Query\V1\FieldBoost::class);
        $this->field_boosts = $var;
    }

}

