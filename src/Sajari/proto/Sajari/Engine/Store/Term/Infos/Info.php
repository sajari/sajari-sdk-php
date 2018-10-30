<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sajari/engine/store/term/term.proto

namespace Sajari\Engine\Store\Term\Infos;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Term information
 *
 * Generated from protobuf message <code>sajari.engine.store.term.Infos.Info</code>
 */
class Info extends \Google\Protobuf\Internal\Message
{
    /**
     * Internal identifier for term.
     *
     * Generated from protobuf field <code>uint32 id = 1;</code>
     */
    private $id = 0;
    /**
     * String representation.
     *
     * Generated from protobuf field <code>string value = 2;</code>
     */
    private $value = '';
    /**
     * Number of records that contain the term.
     *
     * Generated from protobuf field <code>uint32 num_docs = 3;</code>
     */
    private $num_docs = 0;
    /**
     * Number of words in the term.
     *
     * Generated from protobuf field <code>uint32 num_words = 4;</code>
     */
    private $num_words = 0;
    /**
     * Hardcoded score attributed to the term.
     *
     * Generated from protobuf field <code>uint32 hardcoded = 5;</code>
     */
    private $hardcoded = 0;
    /**
     * Infogain score attributed to the term.
     *
     * Generated from protobuf field <code>uint32 infogain = 6;</code>
     */
    private $infogain = 0;
    /**
     * Positive interactions (count).
     *
     * Generated from protobuf field <code>uint32 pos = 7;</code>
     */
    private $pos = 0;
    /**
     * Negative interactions (count).
     *
     * Generated from protobuf field <code>uint32 neg = 8;</code>
     */
    private $neg = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $id
     *           Internal identifier for term.
     *     @type string $value
     *           String representation.
     *     @type int $num_docs
     *           Number of records that contain the term.
     *     @type int $num_words
     *           Number of words in the term.
     *     @type int $hardcoded
     *           Hardcoded score attributed to the term.
     *     @type int $infogain
     *           Infogain score attributed to the term.
     *     @type int $pos
     *           Positive interactions (count).
     *     @type int $neg
     *           Negative interactions (count).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Sajari\Engine\Store\Term\Term::initOnce();
        parent::__construct($data);
    }

    /**
     * Internal identifier for term.
     *
     * Generated from protobuf field <code>uint32 id = 1;</code>
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Internal identifier for term.
     *
     * Generated from protobuf field <code>uint32 id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint32($var);
        $this->id = $var;

        return $this;
    }

    /**
     * String representation.
     *
     * Generated from protobuf field <code>string value = 2;</code>
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * String representation.
     *
     * Generated from protobuf field <code>string value = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->value = $var;

        return $this;
    }

    /**
     * Number of records that contain the term.
     *
     * Generated from protobuf field <code>uint32 num_docs = 3;</code>
     * @return int
     */
    public function getNumDocs()
    {
        return $this->num_docs;
    }

    /**
     * Number of records that contain the term.
     *
     * Generated from protobuf field <code>uint32 num_docs = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setNumDocs($var)
    {
        GPBUtil::checkUint32($var);
        $this->num_docs = $var;

        return $this;
    }

    /**
     * Number of words in the term.
     *
     * Generated from protobuf field <code>uint32 num_words = 4;</code>
     * @return int
     */
    public function getNumWords()
    {
        return $this->num_words;
    }

    /**
     * Number of words in the term.
     *
     * Generated from protobuf field <code>uint32 num_words = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setNumWords($var)
    {
        GPBUtil::checkUint32($var);
        $this->num_words = $var;

        return $this;
    }

    /**
     * Hardcoded score attributed to the term.
     *
     * Generated from protobuf field <code>uint32 hardcoded = 5;</code>
     * @return int
     */
    public function getHardcoded()
    {
        return $this->hardcoded;
    }

    /**
     * Hardcoded score attributed to the term.
     *
     * Generated from protobuf field <code>uint32 hardcoded = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setHardcoded($var)
    {
        GPBUtil::checkUint32($var);
        $this->hardcoded = $var;

        return $this;
    }

    /**
     * Infogain score attributed to the term.
     *
     * Generated from protobuf field <code>uint32 infogain = 6;</code>
     * @return int
     */
    public function getInfogain()
    {
        return $this->infogain;
    }

    /**
     * Infogain score attributed to the term.
     *
     * Generated from protobuf field <code>uint32 infogain = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setInfogain($var)
    {
        GPBUtil::checkUint32($var);
        $this->infogain = $var;

        return $this;
    }

    /**
     * Positive interactions (count).
     *
     * Generated from protobuf field <code>uint32 pos = 7;</code>
     * @return int
     */
    public function getPos()
    {
        return $this->pos;
    }

    /**
     * Positive interactions (count).
     *
     * Generated from protobuf field <code>uint32 pos = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setPos($var)
    {
        GPBUtil::checkUint32($var);
        $this->pos = $var;

        return $this;
    }

    /**
     * Negative interactions (count).
     *
     * Generated from protobuf field <code>uint32 neg = 8;</code>
     * @return int
     */
    public function getNeg()
    {
        return $this->neg;
    }

    /**
     * Negative interactions (count).
     *
     * Generated from protobuf field <code>uint32 neg = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setNeg($var)
    {
        GPBUtil::checkUint32($var);
        $this->neg = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Info::class, \Sajari\Engine\Store\Term\Infos_Info::class);

