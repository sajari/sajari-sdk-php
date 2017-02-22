<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sajari/engine/query/v1/query.proto

namespace Sajari\Engine\Query\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Body is a weighted free text query.
 * </pre>
 *
 * Protobuf type <code>sajari.engine.query.v1.Body</code>
 */
class Body extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Text (free text).
     * </pre>
     *
     * <code>string text = 1;</code>
     */
    private $text = '';
    /**
     * <pre>
     * Weight (importance) to apply to this text.
     * This value must be 0 &lt;= weight &lt;= 1 but must be set. A value of zero means
     * the text has no value.
     * </pre>
     *
     * <code>double weight = 2;</code>
     */
    private $weight = 0.0;

    public function __construct() {
        \GPBMetadata\Sajari\Engine\Query\V1\Query::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Text (free text).
     * </pre>
     *
     * <code>string text = 1;</code>
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * <pre>
     * Text (free text).
     * </pre>
     *
     * <code>string text = 1;</code>
     */
    public function setText($var)
    {
        GPBUtil::checkString($var, True);
        $this->text = $var;
    }

    /**
     * <pre>
     * Weight (importance) to apply to this text.
     * This value must be 0 &lt;= weight &lt;= 1 but must be set. A value of zero means
     * the text has no value.
     * </pre>
     *
     * <code>double weight = 2;</code>
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * <pre>
     * Weight (importance) to apply to this text.
     * This value must be 0 &lt;= weight &lt;= 1 but must be set. A value of zero means
     * the text has no value.
     * </pre>
     *
     * <code>double weight = 2;</code>
     */
    public function setWeight($var)
    {
        GPBUtil::checkDouble($var);
        $this->weight = $var;
    }

}
