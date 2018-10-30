<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sajari/api/query/v1/query.proto

namespace Sajari\Api\Query\V1\SearchRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>sajari.api.query.v1.SearchRequest.Tracking</code>
 */
class Tracking extends \Google\Protobuf\Internal\Message
{
    /**
     * Tracking mode for query.
     * Tracking is done using tokens which are added to result sets and identify individual results.
     * Tokens are used to improve the ranking of records by reporting clicks (i.e. positive action)
     * or pos/neg (i.e positive or negative reporting) on the position of a record in results.
     *
     * Generated from protobuf field <code>.sajari.api.query.v1.SearchRequest.Tracking.Type type = 1;</code>
     */
    private $type = 0;
    /**
     * Query ID of the query.  If this is empty, then one is generated.
     *
     * Generated from protobuf field <code>string query_id = 2;</code>
     */
    private $query_id = '';
    /**
     * Sequence number of query.
     *
     * Generated from protobuf field <code>int32 sequence = 3;</code>
     */
    private $sequence = 0;
    /**
     * Tracking field (must be unique in the collection) used to identify records in the collection.
     *
     * Generated from protobuf field <code>string field = 4;</code>
     */
    private $field = '';
    /**
     * Custom values to be included in tracking data.
     *
     * Generated from protobuf field <code>map<string, string> data = 5;</code>
     */
    private $data;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *           Tracking mode for query.
     *           Tracking is done using tokens which are added to result sets and identify individual results.
     *           Tokens are used to improve the ranking of records by reporting clicks (i.e. positive action)
     *           or pos/neg (i.e positive or negative reporting) on the position of a record in results.
     *     @type string $query_id
     *           Query ID of the query.  If this is empty, then one is generated.
     *     @type int $sequence
     *           Sequence number of query.
     *     @type string $field
     *           Tracking field (must be unique in the collection) used to identify records in the collection.
     *     @type array|\Google\Protobuf\Internal\MapField $data
     *           Custom values to be included in tracking data.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Sajari\Api\Query\V1\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * Tracking mode for query.
     * Tracking is done using tokens which are added to result sets and identify individual results.
     * Tokens are used to improve the ranking of records by reporting clicks (i.e. positive action)
     * or pos/neg (i.e positive or negative reporting) on the position of a record in results.
     *
     * Generated from protobuf field <code>.sajari.api.query.v1.SearchRequest.Tracking.Type type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Tracking mode for query.
     * Tracking is done using tokens which are added to result sets and identify individual results.
     * Tokens are used to improve the ranking of records by reporting clicks (i.e. positive action)
     * or pos/neg (i.e positive or negative reporting) on the position of a record in results.
     *
     * Generated from protobuf field <code>.sajari.api.query.v1.SearchRequest.Tracking.Type type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Sajari\Api\Query\V1\SearchRequest_Tracking_Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Query ID of the query.  If this is empty, then one is generated.
     *
     * Generated from protobuf field <code>string query_id = 2;</code>
     * @return string
     */
    public function getQueryId()
    {
        return $this->query_id;
    }

    /**
     * Query ID of the query.  If this is empty, then one is generated.
     *
     * Generated from protobuf field <code>string query_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setQueryId($var)
    {
        GPBUtil::checkString($var, True);
        $this->query_id = $var;

        return $this;
    }

    /**
     * Sequence number of query.
     *
     * Generated from protobuf field <code>int32 sequence = 3;</code>
     * @return int
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * Sequence number of query.
     *
     * Generated from protobuf field <code>int32 sequence = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setSequence($var)
    {
        GPBUtil::checkInt32($var);
        $this->sequence = $var;

        return $this;
    }

    /**
     * Tracking field (must be unique in the collection) used to identify records in the collection.
     *
     * Generated from protobuf field <code>string field = 4;</code>
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * Tracking field (must be unique in the collection) used to identify records in the collection.
     *
     * Generated from protobuf field <code>string field = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setField($var)
    {
        GPBUtil::checkString($var, True);
        $this->field = $var;

        return $this;
    }

    /**
     * Custom values to be included in tracking data.
     *
     * Generated from protobuf field <code>map<string, string> data = 5;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Custom values to be included in tracking data.
     *
     * Generated from protobuf field <code>map<string, string> data = 5;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setData($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->data = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Tracking::class, \Sajari\Api\Query\V1\SearchRequest_Tracking::class);

