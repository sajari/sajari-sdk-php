<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sajari/api/pipeline/v1/control.proto

namespace Sajari\Api\Pipeline\V1\CreateStep;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Parameter options to be applied.
 *
 * Generated from protobuf message <code>sajari.api.pipeline.v1.CreateStep.ParamOpts</code>
 */
class ParamOpts extends \Google\Protobuf\Internal\Message
{
    /**
     * List of parameter options.
     *
     * Generated from protobuf field <code>repeated .sajari.api.pipeline.v1.CreateStep.ParamOpts.ParamOpt opts = 1;</code>
     */
    private $opts;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Sajari\Api\Pipeline\V1\CreateStep\ParamOpts\ParamOpt[]|\Google\Protobuf\Internal\RepeatedField $opts
     *           List of parameter options.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Sajari\Api\Pipeline\V1\Control::initOnce();
        parent::__construct($data);
    }

    /**
     * List of parameter options.
     *
     * Generated from protobuf field <code>repeated .sajari.api.pipeline.v1.CreateStep.ParamOpts.ParamOpt opts = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOpts()
    {
        return $this->opts;
    }

    /**
     * List of parameter options.
     *
     * Generated from protobuf field <code>repeated .sajari.api.pipeline.v1.CreateStep.ParamOpts.ParamOpt opts = 1;</code>
     * @param \Sajari\Api\Pipeline\V1\CreateStep\ParamOpts\ParamOpt[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOpts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Sajari\Api\Pipeline\V1\CreateStep\ParamOpts\ParamOpt::class);
        $this->opts = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ParamOpts::class, \Sajari\Api\Pipeline\V1\CreateStep_ParamOpts::class);

