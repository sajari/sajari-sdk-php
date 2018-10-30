<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sajari/api/pipeline/v1/usage.proto

namespace Sajari\Api\Pipeline\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Step represents a single unit of work performed by the pipeline.
 *
 * Generated from protobuf message <code>sajari.api.pipeline.v1.Step</code>
 */
class Step extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the action.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Description of the action.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     */
    private $description = '';
    /**
     * List of input parameters used by the step.
     *
     * Generated from protobuf field <code>repeated .sajari.api.pipeline.v1.Parameter inputs = 3;</code>
     */
    private $inputs;
    /**
     * List of output parameters returned by the step.
     *
     * Generated from protobuf field <code>repeated .sajari.api.pipeline.v1.Parameter outputs = 4;</code>
     */
    private $outputs;
    /**
     * List of constants used by the step.
     *
     * Generated from protobuf field <code>repeated .sajari.api.pipeline.v1.Constant constants = 5;</code>
     */
    private $constants;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Name of the action.
     *     @type string $description
     *           Description of the action.
     *     @type \Sajari\Api\Pipeline\V1\Parameter[]|\Google\Protobuf\Internal\RepeatedField $inputs
     *           List of input parameters used by the step.
     *     @type \Sajari\Api\Pipeline\V1\Parameter[]|\Google\Protobuf\Internal\RepeatedField $outputs
     *           List of output parameters returned by the step.
     *     @type \Sajari\Api\Pipeline\V1\Constant[]|\Google\Protobuf\Internal\RepeatedField $constants
     *           List of constants used by the step.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Sajari\Api\Pipeline\V1\Usage::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the action.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Name of the action.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Description of the action.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Description of the action.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * List of input parameters used by the step.
     *
     * Generated from protobuf field <code>repeated .sajari.api.pipeline.v1.Parameter inputs = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInputs()
    {
        return $this->inputs;
    }

    /**
     * List of input parameters used by the step.
     *
     * Generated from protobuf field <code>repeated .sajari.api.pipeline.v1.Parameter inputs = 3;</code>
     * @param \Sajari\Api\Pipeline\V1\Parameter[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInputs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Sajari\Api\Pipeline\V1\Parameter::class);
        $this->inputs = $arr;

        return $this;
    }

    /**
     * List of output parameters returned by the step.
     *
     * Generated from protobuf field <code>repeated .sajari.api.pipeline.v1.Parameter outputs = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOutputs()
    {
        return $this->outputs;
    }

    /**
     * List of output parameters returned by the step.
     *
     * Generated from protobuf field <code>repeated .sajari.api.pipeline.v1.Parameter outputs = 4;</code>
     * @param \Sajari\Api\Pipeline\V1\Parameter[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOutputs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Sajari\Api\Pipeline\V1\Parameter::class);
        $this->outputs = $arr;

        return $this;
    }

    /**
     * List of constants used by the step.
     *
     * Generated from protobuf field <code>repeated .sajari.api.pipeline.v1.Constant constants = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConstants()
    {
        return $this->constants;
    }

    /**
     * List of constants used by the step.
     *
     * Generated from protobuf field <code>repeated .sajari.api.pipeline.v1.Constant constants = 5;</code>
     * @param \Sajari\Api\Pipeline\V1\Constant[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConstants($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Sajari\Api\Pipeline\V1\Constant::class);
        $this->constants = $arr;

        return $this;
    }

}
