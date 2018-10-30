<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sajari/engine/store/record/record.proto

namespace Sajari\Engine\Store\Record;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>sajari.engine.store.record.IncrementRequest</code>
 */
class IncrementRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .sajari.engine.store.record.KeyScores keys_scores = 1;</code>
     */
    private $keys_scores;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Sajari\Engine\Store\Record\KeyScores[]|\Google\Protobuf\Internal\RepeatedField $keys_scores
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Sajari\Engine\Store\Record\Record::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .sajari.engine.store.record.KeyScores keys_scores = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getKeysScores()
    {
        return $this->keys_scores;
    }

    /**
     * Generated from protobuf field <code>repeated .sajari.engine.store.record.KeyScores keys_scores = 1;</code>
     * @param \Sajari\Engine\Store\Record\KeyScores[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setKeysScores($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Sajari\Engine\Store\Record\KeyScores::class);
        $this->keys_scores = $arr;

        return $this;
    }

}

