<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sajari/engine/query/v1/query.proto

namespace Sajari\Engine\Query\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * FieldBoost is used to influence the score of a document based on its field values.
 * The effect of a FieldBoost is the value that it contributes to the overall score.
 * All boost effects are between 0 and 1 inclusive.
 * </pre>
 *
 * Protobuf type <code>sajari.engine.query.v1.FieldBoost</code>
 */
class FieldBoost extends \Google\Protobuf\Internal\Message
{
    protected $field_boost;

    public function __construct() {
        \GPBMetadata\Sajari\Engine\Query\V1\Query::initOnce();
        parent::__construct();
    }

    /**
     * <code>.sajari.engine.query.v1.FieldBoost.Filter filter = 1;</code>
     */
    public function getFilter()
    {
        return $this->readOneof(1);
    }

    /**
     * <code>.sajari.engine.query.v1.FieldBoost.Filter filter = 1;</code>
     */
    public function setFilter(&$var)
    {
        GPBUtil::checkMessage($var, \Sajari\Engine\Query\V1\FieldBoost_Filter::class);
        $this->writeOneof(1, $var);
    }

    /**
     * <code>.sajari.engine.query.v1.FieldBoost.Interval interval = 2;</code>
     */
    public function getInterval()
    {
        return $this->readOneof(2);
    }

    /**
     * <code>.sajari.engine.query.v1.FieldBoost.Interval interval = 2;</code>
     */
    public function setInterval(&$var)
    {
        GPBUtil::checkMessage($var, \Sajari\Engine\Query\V1\FieldBoost_Interval::class);
        $this->writeOneof(2, $var);
    }

    /**
     * <code>.sajari.engine.query.v1.FieldBoost.Element element = 3;</code>
     */
    public function getElement()
    {
        return $this->readOneof(3);
    }

    /**
     * <code>.sajari.engine.query.v1.FieldBoost.Element element = 3;</code>
     */
    public function setElement(&$var)
    {
        GPBUtil::checkMessage($var, \Sajari\Engine\Query\V1\FieldBoost_Element::class);
        $this->writeOneof(3, $var);
    }

    /**
     * <code>.sajari.engine.query.v1.FieldBoost.Text text = 4;</code>
     */
    public function getText()
    {
        return $this->readOneof(4);
    }

    /**
     * <code>.sajari.engine.query.v1.FieldBoost.Text text = 4;</code>
     */
    public function setText(&$var)
    {
        GPBUtil::checkMessage($var, \Sajari\Engine\Query\V1\FieldBoost_Text::class);
        $this->writeOneof(4, $var);
    }

    public function getFieldBoost()
    {
        return $this->field_boost;
    }

}

