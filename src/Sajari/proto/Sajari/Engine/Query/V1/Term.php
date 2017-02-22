<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sajari/engine/query/v1/query.proto

namespace Sajari\Engine\Query\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Term represents a tokenized piece of text (i.e. a single word, or number).
 * </pre>
 *
 * Protobuf type <code>sajari.engine.query.v1.Term</code>
 */
class Term extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Term string value.
     * </pre>
     *
     * <code>string value = 1;</code>
     */
    private $value = '';
    /**
     * <pre>
     * Field that the term originated from.
     * </pre>
     *
     * <code>string field = 2;</code>
     */
    private $field = '';
    /**
     * <pre>
     * Number of positive interactions (uint16) this Term instance has been involved with.
     * </pre>
     *
     * <code>uint32 pos = 3;</code>
     */
    private $pos = 0;
    /**
     * <pre>
     * Number of negative interactions (uint16) this Term instance has been involved with.
     * </pre>
     *
     * <code>uint32 neg = 4;</code>
     */
    private $neg = 0;
    /**
     * <pre>
     * Significance of the term (uint16).
     * </pre>
     *
     * <code>double weight = 5;</code>
     */
    private $weight = 0.0;
    /**
     * <pre>
     * Word offset (context) (uint16).
     * The position of this term instance in it's immediate context (i.e. paragraph).
     * </pre>
     *
     * <code>uint32 word_offset = 6;</code>
     */
    private $word_offset = 0;
    /**
     * <pre>
     * Paragraph offset (context) (uint16). 
     * The paragraph position (a grouping of term instances) in a body string.
     * </pre>
     *
     * <code>uint32 para_offset = 7;</code>
     */
    private $para_offset = 0;

    public function __construct() {
        \GPBMetadata\Sajari\Engine\Query\V1\Query::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Term string value.
     * </pre>
     *
     * <code>string value = 1;</code>
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * <pre>
     * Term string value.
     * </pre>
     *
     * <code>string value = 1;</code>
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->value = $var;
    }

    /**
     * <pre>
     * Field that the term originated from.
     * </pre>
     *
     * <code>string field = 2;</code>
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * <pre>
     * Field that the term originated from.
     * </pre>
     *
     * <code>string field = 2;</code>
     */
    public function setField($var)
    {
        GPBUtil::checkString($var, True);
        $this->field = $var;
    }

    /**
     * <pre>
     * Number of positive interactions (uint16) this Term instance has been involved with.
     * </pre>
     *
     * <code>uint32 pos = 3;</code>
     */
    public function getPos()
    {
        return $this->pos;
    }

    /**
     * <pre>
     * Number of positive interactions (uint16) this Term instance has been involved with.
     * </pre>
     *
     * <code>uint32 pos = 3;</code>
     */
    public function setPos($var)
    {
        GPBUtil::checkUint32($var);
        $this->pos = $var;
    }

    /**
     * <pre>
     * Number of negative interactions (uint16) this Term instance has been involved with.
     * </pre>
     *
     * <code>uint32 neg = 4;</code>
     */
    public function getNeg()
    {
        return $this->neg;
    }

    /**
     * <pre>
     * Number of negative interactions (uint16) this Term instance has been involved with.
     * </pre>
     *
     * <code>uint32 neg = 4;</code>
     */
    public function setNeg($var)
    {
        GPBUtil::checkUint32($var);
        $this->neg = $var;
    }

    /**
     * <pre>
     * Significance of the term (uint16).
     * </pre>
     *
     * <code>double weight = 5;</code>
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * <pre>
     * Significance of the term (uint16).
     * </pre>
     *
     * <code>double weight = 5;</code>
     */
    public function setWeight($var)
    {
        GPBUtil::checkDouble($var);
        $this->weight = $var;
    }

    /**
     * <pre>
     * Word offset (context) (uint16).
     * The position of this term instance in it's immediate context (i.e. paragraph).
     * </pre>
     *
     * <code>uint32 word_offset = 6;</code>
     */
    public function getWordOffset()
    {
        return $this->word_offset;
    }

    /**
     * <pre>
     * Word offset (context) (uint16).
     * The position of this term instance in it's immediate context (i.e. paragraph).
     * </pre>
     *
     * <code>uint32 word_offset = 6;</code>
     */
    public function setWordOffset($var)
    {
        GPBUtil::checkUint32($var);
        $this->word_offset = $var;
    }

    /**
     * <pre>
     * Paragraph offset (context) (uint16). 
     * The paragraph position (a grouping of term instances) in a body string.
     * </pre>
     *
     * <code>uint32 para_offset = 7;</code>
     */
    public function getParaOffset()
    {
        return $this->para_offset;
    }

    /**
     * <pre>
     * Paragraph offset (context) (uint16). 
     * The paragraph position (a grouping of term instances) in a body string.
     * </pre>
     *
     * <code>uint32 para_offset = 7;</code>
     */
    public function setParaOffset($var)
    {
        GPBUtil::checkUint32($var);
        $this->para_offset = $var;
    }

}
