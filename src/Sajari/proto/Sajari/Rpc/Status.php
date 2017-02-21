<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sajari/rpc/status.proto

namespace Sajari\Rpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Status response
 * </pre>
 *
 * Protobuf type <code>sajari.rpc.Status</code>
 */
class Status extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Status code related to the message.
     * </pre>
     *
     * <code>int32 code = 1;</code>
     */
    private $code = 0;
    /**
     * <pre>
     * Message
     * </pre>
     *
     * <code>string message = 2;</code>
     */
    private $message = '';

    public function __construct() {
        \GPBMetadata\Sajari\Rpc\Status::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Status code related to the message.
     * </pre>
     *
     * <code>int32 code = 1;</code>
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * <pre>
     * Status code related to the message.
     * </pre>
     *
     * <code>int32 code = 1;</code>
     */
    public function setCode($var)
    {
        GPBUtil::checkInt32($var);
        $this->code = $var;
    }

    /**
     * <pre>
     * Message
     * </pre>
     *
     * <code>string message = 2;</code>
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * <pre>
     * Message
     * </pre>
     *
     * <code>string message = 2;</code>
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->message = $var;
    }

}

