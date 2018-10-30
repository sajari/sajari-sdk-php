<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sajari/api/query/v1/query.proto

namespace Sajari\Api\Query\V1\Token;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * PosNeg is a pair of tokens which are used to mark a record as a good/bad
 * result for a SearchRequest.
 *
 * Generated from protobuf message <code>sajari.api.query.v1.Token.PosNeg</code>
 */
class PosNeg extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string pos = 1;</code>
     */
    private $pos = '';
    /**
     * Generated from protobuf field <code>string neg = 2;</code>
     */
    private $neg = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $pos
     *     @type string $neg
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Sajari\Api\Query\V1\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string pos = 1;</code>
     * @return string
     */
    public function getPos()
    {
        return $this->pos;
    }

    /**
     * Generated from protobuf field <code>string pos = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPos($var)
    {
        GPBUtil::checkString($var, True);
        $this->pos = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string neg = 2;</code>
     * @return string
     */
    public function getNeg()
    {
        return $this->neg;
    }

    /**
     * Generated from protobuf field <code>string neg = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNeg($var)
    {
        GPBUtil::checkString($var, True);
        $this->neg = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PosNeg::class, \Sajari\Api\Query\V1\Token_PosNeg::class);

