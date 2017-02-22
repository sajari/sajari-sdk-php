<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sajari/engine/store/record/record.proto

namespace Sajari\Engine\Store\Record;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Score values for an array of terms.
 * </pre>
 *
 * Protobuf type <code>sajari.engine.store.record.KeyScores.Score</code>
 */
class KeyScores_Score extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Terms to score.
     * </pre>
     *
     * <code>repeated string terms = 1;</code>
     */
    private $terms;
    /**
     * <pre>
     * Count of interactions (uint16).
     * </pre>
     *
     * <code>int32 count = 2;</code>
     */
    private $count = 0;
    /**
     * <pre>
     * Score for interactions.
     * </pre>
     *
     * <code>float score = 3;</code>
     */
    private $score = 0.0;

    public function __construct() {
        \GPBMetadata\Sajari\Engine\Store\Record\Record::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Terms to score.
     * </pre>
     *
     * <code>repeated string terms = 1;</code>
     */
    public function getTerms()
    {
        return $this->terms;
    }

    /**
     * <pre>
     * Terms to score.
     * </pre>
     *
     * <code>repeated string terms = 1;</code>
     */
    public function setTerms(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->terms = $var;
    }

    /**
     * <pre>
     * Count of interactions (uint16).
     * </pre>
     *
     * <code>int32 count = 2;</code>
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * <pre>
     * Count of interactions (uint16).
     * </pre>
     *
     * <code>int32 count = 2;</code>
     */
    public function setCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->count = $var;
    }

    /**
     * <pre>
     * Score for interactions.
     * </pre>
     *
     * <code>float score = 3;</code>
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * <pre>
     * Score for interactions.
     * </pre>
     *
     * <code>float score = 3;</code>
     */
    public function setScore($var)
    {
        GPBUtil::checkFloat($var);
        $this->score = $var;
    }

}
