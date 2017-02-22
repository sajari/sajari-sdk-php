<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sajari/bayes/trainingset/trainingset.proto

namespace Sajari\Bayes\Trainingset;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * InfoResponse returns information for a given training set
 * </pre>
 *
 * Protobuf type <code>sajari.bayes.trainingset.InfoResponse</code>
 */
class InfoResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * List of classes for the specified training set
     * </pre>
     *
     * <code>repeated string classes = 1;</code>
     */
    private $classes;

    public function __construct() {
        \GPBMetadata\Sajari\Bayes\Trainingset\Trainingset::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * List of classes for the specified training set
     * </pre>
     *
     * <code>repeated string classes = 1;</code>
     */
    public function getClasses()
    {
        return $this->classes;
    }

    /**
     * <pre>
     * List of classes for the specified training set
     * </pre>
     *
     * <code>repeated string classes = 1;</code>
     */
    public function setClasses(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->classes = $var;
    }

}
