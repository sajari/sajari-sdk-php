<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sajari/api/query/v1/query.proto

namespace Sajari\Api\Query\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * AnaylseResponse is a wrapper for the engine AnalyseResponse message.
 *
 * Generated from protobuf message <code>sajari.api.query.v1.AnalyseResponse</code>
 */
class AnalyseResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.sajari.engine.query.v1.AnalyseResponse analyse_response = 1;</code>
     */
    private $analyse_response = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Sajari\Engine\Query\V1\AnalyseResponse $analyse_response
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Sajari\Api\Query\V1\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.sajari.engine.query.v1.AnalyseResponse analyse_response = 1;</code>
     * @return \Sajari\Engine\Query\V1\AnalyseResponse
     */
    public function getAnalyseResponse()
    {
        return $this->analyse_response;
    }

    /**
     * Generated from protobuf field <code>.sajari.engine.query.v1.AnalyseResponse analyse_response = 1;</code>
     * @param \Sajari\Engine\Query\V1\AnalyseResponse $var
     * @return $this
     */
    public function setAnalyseResponse($var)
    {
        GPBUtil::checkMessage($var, \Sajari\Engine\Query\V1\AnalyseResponse::class);
        $this->analyse_response = $var;

        return $this;
    }

}

