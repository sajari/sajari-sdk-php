<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sajari/bayes/query/query.proto

namespace Sajari\Bayes\Query;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Response returns information on the classification.
 * </pre>
 *
 * Protobuf type <code>sajari.bayes.query.Response</code>
 */
class Response extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Scores map represents each of the potential classes and their
     * associated probability (Note: only if the probability calculation does
     * not underflow)
     * </pre>
     *
     * <code>map&lt;string, double&gt; scores = 1;</code>
     */
    private $scores;
    /**
     * <pre>
     * Best represents the highest probability class for the input data.
     * </pre>
     *
     * <code>string best = 2;</code>
     */
    private $best = '';
    /**
     * <pre>
     * Unique indicates if this classification was the solo highest probability
     * (i.e. not equal with other classes)
     * </pre>
     *
     * <code>bool unique = 3;</code>
     */
    private $unique = false;

    public function __construct() {
        \GPBMetadata\Sajari\Bayes\Query\Query::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Scores map represents each of the potential classes and their
     * associated probability (Note: only if the probability calculation does
     * not underflow)
     * </pre>
     *
     * <code>map&lt;string, double&gt; scores = 1;</code>
     */
    public function getScores()
    {
        return $this->scores;
    }

    /**
     * <pre>
     * Scores map represents each of the potential classes and their
     * associated probability (Note: only if the probability calculation does
     * not underflow)
     * </pre>
     *
     * <code>map&lt;string, double&gt; scores = 1;</code>
     */
    public function setScores(&$var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::DOUBLE);
        $this->scores = $arr;
    }

    /**
     * <pre>
     * Best represents the highest probability class for the input data.
     * </pre>
     *
     * <code>string best = 2;</code>
     */
    public function getBest()
    {
        return $this->best;
    }

    /**
     * <pre>
     * Best represents the highest probability class for the input data.
     * </pre>
     *
     * <code>string best = 2;</code>
     */
    public function setBest($var)
    {
        GPBUtil::checkString($var, True);
        $this->best = $var;
    }

    /**
     * <pre>
     * Unique indicates if this classification was the solo highest probability
     * (i.e. not equal with other classes)
     * </pre>
     *
     * <code>bool unique = 3;</code>
     */
    public function getUnique()
    {
        return $this->unique;
    }

    /**
     * <pre>
     * Unique indicates if this classification was the solo highest probability
     * (i.e. not equal with other classes)
     * </pre>
     *
     * <code>bool unique = 3;</code>
     */
    public function setUnique($var)
    {
        GPBUtil::checkBool($var);
        $this->unique = $var;
    }

}

