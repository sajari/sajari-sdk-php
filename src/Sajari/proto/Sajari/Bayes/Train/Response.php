<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sajari/bayes/train/train.proto

namespace Sajari\Bayes\Train;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response contains information on a training run with regards to accuracy
 *
 * Generated from protobuf message <code>sajari.bayes.train.Response</code>
 */
class Response extends \Google\Protobuf\Internal\Message
{
    /**
     * Errors contains an array of ClassError describing the training success/failure
     *
     * Generated from protobuf field <code>repeated .sajari.bayes.train.ClassError errors = 1;</code>
     */
    private $errors;
    /**
     * Total number of correct classifications across all classes for this
     * training run
     *
     * Generated from protobuf field <code>uint32 correct = 2;</code>
     */
    private $correct = 0;
    /**
     * Total number of incorrect classifications across all classes for this
     * training run
     *
     * Generated from protobuf field <code>uint32 incorrect = 3;</code>
     */
    private $incorrect = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Sajari\Bayes\Train\ClassError[]|\Google\Protobuf\Internal\RepeatedField $errors
     *           Errors contains an array of ClassError describing the training success/failure
     *     @type int $correct
     *           Total number of correct classifications across all classes for this
     *           training run
     *     @type int $incorrect
     *           Total number of incorrect classifications across all classes for this
     *           training run
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Sajari\Bayes\Train\Train::initOnce();
        parent::__construct($data);
    }

    /**
     * Errors contains an array of ClassError describing the training success/failure
     *
     * Generated from protobuf field <code>repeated .sajari.bayes.train.ClassError errors = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * Errors contains an array of ClassError describing the training success/failure
     *
     * Generated from protobuf field <code>repeated .sajari.bayes.train.ClassError errors = 1;</code>
     * @param \Sajari\Bayes\Train\ClassError[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setErrors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Sajari\Bayes\Train\ClassError::class);
        $this->errors = $arr;

        return $this;
    }

    /**
     * Total number of correct classifications across all classes for this
     * training run
     *
     * Generated from protobuf field <code>uint32 correct = 2;</code>
     * @return int
     */
    public function getCorrect()
    {
        return $this->correct;
    }

    /**
     * Total number of correct classifications across all classes for this
     * training run
     *
     * Generated from protobuf field <code>uint32 correct = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCorrect($var)
    {
        GPBUtil::checkUint32($var);
        $this->correct = $var;

        return $this;
    }

    /**
     * Total number of incorrect classifications across all classes for this
     * training run
     *
     * Generated from protobuf field <code>uint32 incorrect = 3;</code>
     * @return int
     */
    public function getIncorrect()
    {
        return $this->incorrect;
    }

    /**
     * Total number of incorrect classifications across all classes for this
     * training run
     *
     * Generated from protobuf field <code>uint32 incorrect = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setIncorrect($var)
    {
        GPBUtil::checkUint32($var);
        $this->incorrect = $var;

        return $this;
    }

}

