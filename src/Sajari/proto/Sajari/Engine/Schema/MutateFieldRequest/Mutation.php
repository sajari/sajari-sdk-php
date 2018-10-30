<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sajari/engine/schema/schema.proto

namespace Sajari\Engine\Schema\MutateFieldRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Mutation is a mutation of a schema field.
 *
 * Generated from protobuf message <code>sajari.engine.schema.MutateFieldRequest.Mutation</code>
 */
class Mutation extends \Google\Protobuf\Internal\Message
{
    protected $mutation;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Name is a new name for the field.
     *     @type string $description
     *           Description is the new description for the field.
     *     @type int $type
     *           Type changes the underlying type of the field.
     *     @type bool $repeated
     *           Repeated sets whether the field values are repeated.
     *     @type bool $required
     *           Required sets whether the field value is required for index records.
     *     @type bool $unique
     *           Unique sets whether the field must contain unique values.
     *     @type bool $indexed
     *           Indexed sets whether the field data is indexed.
     *           DEPRECATED: This attribute can't be changed, see add_index instead.
     *     @type \Sajari\Engine\Schema\FieldIndex $add_index
     *           Adds an index to the field.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Sajari\Engine\Schema\Schema::initOnce();
        parent::__construct($data);
    }

    /**
     * Name is a new name for the field.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->readOneof(1);
    }

    /**
     * Name is a new name for the field.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Description is the new description for the field.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->readOneof(2);
    }

    /**
     * Description is the new description for the field.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Type changes the underlying type of the field.
     *
     * Generated from protobuf field <code>.sajari.engine.schema.Field.Type type = 3;</code>
     * @return int
     */
    public function getType()
    {
        return $this->readOneof(3);
    }

    /**
     * Type changes the underlying type of the field.
     *
     * Generated from protobuf field <code>.sajari.engine.schema.Field.Type type = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Sajari\Engine\Schema\Field_Type::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Repeated sets whether the field values are repeated.
     *
     * Generated from protobuf field <code>bool repeated = 4;</code>
     * @return bool
     */
    public function getRepeated()
    {
        return $this->readOneof(4);
    }

    /**
     * Repeated sets whether the field values are repeated.
     *
     * Generated from protobuf field <code>bool repeated = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setRepeated($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Required sets whether the field value is required for index records.
     *
     * Generated from protobuf field <code>bool required = 5;</code>
     * @return bool
     */
    public function getRequired()
    {
        return $this->readOneof(5);
    }

    /**
     * Required sets whether the field value is required for index records.
     *
     * Generated from protobuf field <code>bool required = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setRequired($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Unique sets whether the field must contain unique values.
     *
     * Generated from protobuf field <code>bool unique = 6;</code>
     * @return bool
     */
    public function getUnique()
    {
        return $this->readOneof(6);
    }

    /**
     * Unique sets whether the field must contain unique values.
     *
     * Generated from protobuf field <code>bool unique = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setUnique($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Indexed sets whether the field data is indexed.
     * DEPRECATED: This attribute can't be changed, see add_index instead.
     *
     * Generated from protobuf field <code>bool indexed = 7;</code>
     * @return bool
     */
    public function getIndexed()
    {
        return $this->readOneof(7);
    }

    /**
     * Indexed sets whether the field data is indexed.
     * DEPRECATED: This attribute can't be changed, see add_index instead.
     *
     * Generated from protobuf field <code>bool indexed = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setIndexed($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Adds an index to the field.
     *
     * Generated from protobuf field <code>.sajari.engine.schema.FieldIndex add_index = 8;</code>
     * @return \Sajari\Engine\Schema\FieldIndex
     */
    public function getAddIndex()
    {
        return $this->readOneof(8);
    }

    /**
     * Adds an index to the field.
     *
     * Generated from protobuf field <code>.sajari.engine.schema.FieldIndex add_index = 8;</code>
     * @param \Sajari\Engine\Schema\FieldIndex $var
     * @return $this
     */
    public function setAddIndex($var)
    {
        GPBUtil::checkMessage($var, \Sajari\Engine\Schema\FieldIndex::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getMutation()
    {
        return $this->whichOneof("mutation");
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Mutation::class, \Sajari\Engine\Schema\MutateFieldRequest_Mutation::class);
