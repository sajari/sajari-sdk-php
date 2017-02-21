<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sajari/engine/query/v1/query.proto

namespace Sajari\Engine\Query\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>sajari.engine.query.v1.SubstituteRequest</code>
 */
class SubstituteRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Request is used as a template
     * </pre>
     *
     * <code>.sajari.engine.query.v1.SearchRequest search_request = 1;</code>
     */
    private $search_request = null;
    /**
     * <pre>
     * Document is the record to be substituted in the request.
     * </pre>
     *
     * <code>map&lt;string, .sajari.engine.Value&gt; record = 2;</code>
     */
    private $record;

    public function __construct() {
        \GPBMetadata\Sajari\Engine\Query\V1\Query::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Request is used as a template
     * </pre>
     *
     * <code>.sajari.engine.query.v1.SearchRequest search_request = 1;</code>
     */
    public function getSearchRequest()
    {
        return $this->search_request;
    }

    /**
     * <pre>
     * Request is used as a template
     * </pre>
     *
     * <code>.sajari.engine.query.v1.SearchRequest search_request = 1;</code>
     */
    public function setSearchRequest(&$var)
    {
        GPBUtil::checkMessage($var, \Sajari\Engine\Query\V1\SearchRequest::class);
        $this->search_request = $var;
    }

    /**
     * <pre>
     * Document is the record to be substituted in the request.
     * </pre>
     *
     * <code>map&lt;string, .sajari.engine.Value&gt; record = 2;</code>
     */
    public function getRecord()
    {
        return $this->record;
    }

    /**
     * <pre>
     * Document is the record to be substituted in the request.
     * </pre>
     *
     * <code>map&lt;string, .sajari.engine.Value&gt; record = 2;</code>
     */
    public function setRecord(&$var)
    {
        $this->record = $var;
    }

}

