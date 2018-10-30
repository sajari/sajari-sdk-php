<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sajari/api/query/v1/query.proto

namespace Sajari\Api\Query\V1\Token;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Click is a token that corresponds to selecting a record from a result set.
 * It is taken as an indication that this record is a good match for the
 * corresponding SearchRequest.
 *
 * Generated from protobuf message <code>sajari.api.query.v1.Token.Click</code>
 */
class Click extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string token = 1;</code>
     */
    private $token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $token
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Sajari\Api\Query\V1\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string token = 1;</code>
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Generated from protobuf field <code>string token = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->token = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Click::class, \Sajari\Api\Query\V1\Token_Click::class);

