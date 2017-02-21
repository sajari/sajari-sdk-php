<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sajari/engine/query/v1/query.proto

namespace Sajari\Engine\Query\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * SearchResponse contains all data in response to a search request.
 * </pre>
 *
 * Protobuf type <code>sajari.engine.query.v1.SearchResponse</code>
 */
class SearchResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Number of reverse indexes read during the search request.
     * </pre>
     *
     * <code>int64 reads = 1;</code>
     */
    private $reads = 0;
    /**
     * <pre>
     * Total number of results.
     * </pre>
     *
     * <code>int64 total_results = 2;</code>
     */
    private $total_results = 0;
    /**
     * <pre>
     * Time taken to perform query.
     * </pre>
     *
     * <code>string time = 3;</code>
     */
    private $time = '';
    /**
     * <pre>
     * Aggregates returned by query.
     * </pre>
     *
     * <code>map&lt;string, .sajari.engine.query.v1.AggregateResponse&gt; aggregates = 4;</code>
     */
    private $aggregates;
    /**
     * <pre>
     * Results returned by query.
     * </pre>
     *
     * <code>repeated .sajari.engine.query.v1.Result results = 5;</code>
     */
    private $results;

    public function __construct() {
        \GPBMetadata\Sajari\Engine\Query\V1\Query::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Number of reverse indexes read during the search request.
     * </pre>
     *
     * <code>int64 reads = 1;</code>
     */
    public function getReads()
    {
        return $this->reads;
    }

    /**
     * <pre>
     * Number of reverse indexes read during the search request.
     * </pre>
     *
     * <code>int64 reads = 1;</code>
     */
    public function setReads($var)
    {
        GPBUtil::checkInt64($var);
        $this->reads = $var;
    }

    /**
     * <pre>
     * Total number of results.
     * </pre>
     *
     * <code>int64 total_results = 2;</code>
     */
    public function getTotalResults()
    {
        return $this->total_results;
    }

    /**
     * <pre>
     * Total number of results.
     * </pre>
     *
     * <code>int64 total_results = 2;</code>
     */
    public function setTotalResults($var)
    {
        GPBUtil::checkInt64($var);
        $this->total_results = $var;
    }

    /**
     * <pre>
     * Time taken to perform query.
     * </pre>
     *
     * <code>string time = 3;</code>
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * <pre>
     * Time taken to perform query.
     * </pre>
     *
     * <code>string time = 3;</code>
     */
    public function setTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->time = $var;
    }

    /**
     * <pre>
     * Aggregates returned by query.
     * </pre>
     *
     * <code>map&lt;string, .sajari.engine.query.v1.AggregateResponse&gt; aggregates = 4;</code>
     */
    public function getAggregates()
    {
        return $this->aggregates;
    }

    /**
     * <pre>
     * Aggregates returned by query.
     * </pre>
     *
     * <code>map&lt;string, .sajari.engine.query.v1.AggregateResponse&gt; aggregates = 4;</code>
     */
    public function setAggregates(&$var)
    {
        $this->aggregates = $var;
    }

    /**
     * <pre>
     * Results returned by query.
     * </pre>
     *
     * <code>repeated .sajari.engine.query.v1.Result results = 5;</code>
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * <pre>
     * Results returned by query.
     * </pre>
     *
     * <code>repeated .sajari.engine.query.v1.Result results = 5;</code>
     */
    public function setResults(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Sajari\Engine\Query\V1\Result::class);
        $this->results = $var;
    }

}

