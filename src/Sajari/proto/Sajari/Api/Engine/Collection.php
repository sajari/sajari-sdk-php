<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sajari/api/engine/engine.proto

namespace Sajari\Api\Engine;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Collection as defined when creating/loading/deleting/listing.
 *
 * Generated from protobuf message <code>sajari.api.engine.Collection</code>
 */
class Collection extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the collection.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Name of the collection.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Sajari\Api\Engine\Engine::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the collection.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Name of the collection.
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

}

