<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sajari/api/pipeline/v1/control.proto

namespace Sajari\Api\Pipeline\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>sajari.api.pipeline.v1.DeleteQueryRequest</code>
 */
class DeleteQueryRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Pipeline identifier to delete.
     *
     * Generated from protobuf field <code>.sajari.api.pipeline.v1.Pipeline pipeline = 1;</code>
     */
    private $pipeline = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Sajari\Api\Pipeline\V1\Pipeline $pipeline
     *           Pipeline identifier to delete.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Sajari\Api\Pipeline\V1\Control::initOnce();
        parent::__construct($data);
    }

    /**
     * Pipeline identifier to delete.
     *
     * Generated from protobuf field <code>.sajari.api.pipeline.v1.Pipeline pipeline = 1;</code>
     * @return \Sajari\Api\Pipeline\V1\Pipeline
     */
    public function getPipeline()
    {
        return $this->pipeline;
    }

    /**
     * Pipeline identifier to delete.
     *
     * Generated from protobuf field <code>.sajari.api.pipeline.v1.Pipeline pipeline = 1;</code>
     * @param \Sajari\Api\Pipeline\V1\Pipeline $var
     * @return $this
     */
    public function setPipeline($var)
    {
        GPBUtil::checkMessage($var, \Sajari\Api\Pipeline\V1\Pipeline::class);
        $this->pipeline = $var;

        return $this;
    }

}

