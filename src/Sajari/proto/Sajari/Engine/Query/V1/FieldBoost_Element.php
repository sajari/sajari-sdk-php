<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sajari/engine/query/v1/query.proto

namespace Sajari\Engine\Query\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Element is an element-based boost for repeated fields.
 * The boost is evaluated as a portion of a list of values which appear
 * in the document field.
 * Boost effect: between 0 and 1.
 * </pre>
 *
 * Protobuf type <code>sajari.engine.query.v1.FieldBoost.Element</code>
 */
class FieldBoost_Element extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Field containing stringArray.
     * </pre>
     *
     * <code>string field = 1;</code>
     */
    private $field = '';
    /**
     * <pre>
     * List of elements to compare against the field values.
     * </pre>
     *
     * <code>repeated string elts = 3;</code>
     */
    private $elts;

    public function __construct() {
        \GPBMetadata\Sajari\Engine\Query\V1\Query::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Field containing stringArray.
     * </pre>
     *
     * <code>string field = 1;</code>
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * <pre>
     * Field containing stringArray.
     * </pre>
     *
     * <code>string field = 1;</code>
     */
    public function setField($var)
    {
        GPBUtil::checkString($var, True);
        $this->field = $var;
    }

    /**
     * <pre>
     * List of elements to compare against the field values.
     * </pre>
     *
     * <code>repeated string elts = 3;</code>
     */
    public function getElts()
    {
        return $this->elts;
    }

    /**
     * <pre>
     * List of elements to compare against the field values.
     * </pre>
     *
     * <code>repeated string elts = 3;</code>
     */
    public function setElts(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->elts = $var;
    }

}

