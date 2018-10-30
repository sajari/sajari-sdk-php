<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sajari/engine/store/record/record.proto

namespace Sajari\Engine\Store\Record;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A value index is the term-based representation for a value.
 *
 * Generated from protobuf message <code>sajari.engine.store.record.ValueIndex</code>
 */
class ValueIndex extends \Google\Protobuf\Internal\Message
{
    /**
     * Spec for analysis process used in index construction.
     *
     * Generated from protobuf field <code>string spec = 1;</code>
     */
    private $spec = '';
    /**
     * Groups of lists of terms (i.e. paragraphs).
     *
     * Generated from protobuf field <code>repeated .sajari.engine.store.record.Terms terms = 2;</code>
     */
    private $terms;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $spec
     *           Spec for analysis process used in index construction.
     *     @type \Sajari\Engine\Store\Record\Terms[]|\Google\Protobuf\Internal\RepeatedField $terms
     *           Groups of lists of terms (i.e. paragraphs).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Sajari\Engine\Store\Record\Record::initOnce();
        parent::__construct($data);
    }

    /**
     * Spec for analysis process used in index construction.
     *
     * Generated from protobuf field <code>string spec = 1;</code>
     * @return string
     */
    public function getSpec()
    {
        return $this->spec;
    }

    /**
     * Spec for analysis process used in index construction.
     *
     * Generated from protobuf field <code>string spec = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSpec($var)
    {
        GPBUtil::checkString($var, True);
        $this->spec = $var;

        return $this;
    }

    /**
     * Groups of lists of terms (i.e. paragraphs).
     *
     * Generated from protobuf field <code>repeated .sajari.engine.store.record.Terms terms = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTerms()
    {
        return $this->terms;
    }

    /**
     * Groups of lists of terms (i.e. paragraphs).
     *
     * Generated from protobuf field <code>repeated .sajari.engine.store.record.Terms terms = 2;</code>
     * @param \Sajari\Engine\Store\Record\Terms[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTerms($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Sajari\Engine\Store\Record\Terms::class);
        $this->terms = $arr;

        return $this;
    }

}

