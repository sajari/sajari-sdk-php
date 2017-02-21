<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sajari/engine/value.proto

namespace Sajari\Engine;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Value is a repesentation data of columnular data for a document.
 * </pre>
 *
 * Protobuf type <code>sajari.engine.Value</code>
 */
class Value extends \Google\Protobuf\Internal\Message
{
    protected $value;

    public function __construct() {
        \GPBMetadata\Sajari\Engine\Value::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Null value
     * </pre>
     *
     * <code>bool null = 1;</code>
     */
    public function getNull()
    {
        return $this->readOneof(1);
    }

    /**
     * <pre>
     * Null value
     * </pre>
     *
     * <code>bool null = 1;</code>
     */
    public function setNull($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(1, $var);
    }

    /**
     * <pre>
     * Single value
     * </pre>
     *
     * <code>string single = 2;</code>
     */
    public function getSingle()
    {
        return $this->readOneof(2);
    }

    /**
     * <pre>
     * Single value
     * </pre>
     *
     * <code>string single = 2;</code>
     */
    public function setSingle($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);
    }

    /**
     * <pre>
     * Repeated values.
     * </pre>
     *
     * <code>.sajari.engine.Value.Repeated repeated = 3;</code>
     */
    public function getRepeated()
    {
        return $this->readOneof(3);
    }

    /**
     * <pre>
     * Repeated values.
     * </pre>
     *
     * <code>.sajari.engine.Value.Repeated repeated = 3;</code>
     */
    public function setRepeated(&$var)
    {
        GPBUtil::checkMessage($var, \Sajari\Engine\Value_Repeated::class);
        $this->writeOneof(3, $var);
    }

    public function getValue()
    {
        return $this->value;
    }

}

