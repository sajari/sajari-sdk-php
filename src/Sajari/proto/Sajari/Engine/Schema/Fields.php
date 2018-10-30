<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sajari/engine/schema/schema.proto

namespace Sajari\Engine\Schema;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Fields is a list of Fields.
 *
 * Generated from protobuf message <code>sajari.engine.schema.Fields</code>
 */
class Fields extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .sajari.engine.schema.Field fields = 1;</code>
     */
    private $fields;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Sajari\Engine\Schema\Field[]|\Google\Protobuf\Internal\RepeatedField $fields
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Sajari\Engine\Schema\Schema::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .sajari.engine.schema.Field fields = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * Generated from protobuf field <code>repeated .sajari.engine.schema.Field fields = 1;</code>
     * @param \Sajari\Engine\Schema\Field[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFields($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Sajari\Engine\Schema\Field::class);
        $this->fields = $arr;

        return $this;
    }

}

