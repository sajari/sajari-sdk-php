<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sajari/engine/query/v1/query.proto

namespace Sajari\Engine\Query\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Result is a document as represented in a search result.
 * </pre>
 *
 * Protobuf type <code>sajari.engine.query.v1.Result</code>
 */
class Result extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Meta data in field-value pairs.
     * </pre>
     *
     * <code>map&lt;string, .sajari.engine.Value&gt; values = 1;</code>
     */
    private $values;
    /**
     * <pre>
     * Score (normalised) attributed to this document.
     * Combines the index score and feature score.
     * </pre>
     *
     * <code>double score = 2;</code>
     */
    private $score = 0.0;
    /**
     * <pre>
     * Index score.
     * </pre>
     *
     * <code>double index_score = 3;</code>
     */
    private $index_score = 0.0;

    public function __construct() {
        \GPBMetadata\Sajari\Engine\Query\V1\Query::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Meta data in field-value pairs.
     * </pre>
     *
     * <code>map&lt;string, .sajari.engine.Value&gt; values = 1;</code>
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * <pre>
     * Meta data in field-value pairs.
     * </pre>
     *
     * <code>map&lt;string, .sajari.engine.Value&gt; values = 1;</code>
     */
    public function setValues(&$var)
    {
        $this->values = $var;
    }

    /**
     * <pre>
     * Score (normalised) attributed to this document.
     * Combines the index score and feature score.
     * </pre>
     *
     * <code>double score = 2;</code>
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * <pre>
     * Score (normalised) attributed to this document.
     * Combines the index score and feature score.
     * </pre>
     *
     * <code>double score = 2;</code>
     */
    public function setScore($var)
    {
        GPBUtil::checkDouble($var);
        $this->score = $var;
    }

    /**
     * <pre>
     * Index score.
     * </pre>
     *
     * <code>double index_score = 3;</code>
     */
    public function getIndexScore()
    {
        return $this->index_score;
    }

    /**
     * <pre>
     * Index score.
     * </pre>
     *
     * <code>double index_score = 3;</code>
     */
    public function setIndexScore($var)
    {
        GPBUtil::checkDouble($var);
        $this->index_score = $var;
    }

}
