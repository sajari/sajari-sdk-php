<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sajari/engine/query/v1/query.proto

namespace Sajari\Engine\Query\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * SearchRequest encompasses all the parameters necessary to query a search index.  Search requests
 * allow callers to select documents from a collection and return them in a score-based
 * ordering.
 * Documents in the search index can be queried/scored using a combination of:
 * 1. Field values (key-value pairs set by the user).  See Filter, FieldBoost, Sort.
 * 2. Terms (extracted from the body of the document, or from string-based indexed fields).
 *    See Body, Terms, InstanceBoost.
 * Quering a search index follows three main steps:
 * 1. Selecting potentially suitable documents to include in a result set.
 * 2. Ranking and sorting the documents based on configurable scoring and/or sorting rules.
 * 3. Computing aggregate statistical information from the result set.
 * </pre>
 *
 * Protobuf type <code>sajari.engine.query.v1.SearchRequest</code>
 */
class SearchRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Filter is a rule checked against document field values.
     * Only documents that match the filter will be included in the result.
     * By default all documents are included.
     * </pre>
     *
     * <code>.sajari.engine.query.v1.Filter filter = 1;</code>
     */
    private $filter = null;
    /**
     * <pre>
     * IndexQuery is the matching configuration for index-based matching.
     * </pre>
     *
     * <code>.sajari.engine.query.v1.SearchRequest.IndexQuery index_query = 2;</code>
     */
    private $index_query = null;
    /**
     * <pre>
     * Feature query is the matching configuration for feature-based matching.
     * </pre>
     *
     * <code>.sajari.engine.query.v1.SearchRequest.FeatureQuery feature_query = 3;</code>
     */
    private $feature_query = null;
    /**
     * <pre>
     * Offset is the offset to return results from.
     * </pre>
     *
     * <code>int32 offset = 4;</code>
     */
    private $offset = 0;
    /**
     * <pre>
     * Limit is the number of results to return.
     * </pre>
     *
     * <code>int32 limit = 5;</code>
     */
    private $limit = 0;
    /**
     * <pre>
     * Fields to be returned for each result in the results.
     * By default all fields are returned.
     * </pre>
     *
     * <code>repeated string fields = 6;</code>
     */
    private $fields;
    /**
     * <pre>
     * Sort ordering applied to results.
     * Multiple sorts can be applied sequentially.
     * By default all results are ordered by score.
     * </pre>
     *
     * <code>repeated .sajari.engine.query.v1.Sort sort = 7;</code>
     */
    private $sort;
    /**
     * <pre>
     * A set of Aggregates to be run on the result set.
     * </pre>
     *
     * <code>map&lt;string, .sajari.engine.query.v1.Aggregate&gt; aggregates = 8;</code>
     */
    private $aggregates;
    /**
     * <pre>
     * Transforms to be applied to the request before it is run.
     * </pre>
     *
     * <code>repeated .sajari.engine.query.v1.Transform transforms = 9;</code>
     */
    private $transforms;

    public function __construct() {
        \GPBMetadata\Sajari\Engine\Query\V1\Query::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Filter is a rule checked against document field values.
     * Only documents that match the filter will be included in the result.
     * By default all documents are included.
     * </pre>
     *
     * <code>.sajari.engine.query.v1.Filter filter = 1;</code>
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * <pre>
     * Filter is a rule checked against document field values.
     * Only documents that match the filter will be included in the result.
     * By default all documents are included.
     * </pre>
     *
     * <code>.sajari.engine.query.v1.Filter filter = 1;</code>
     */
    public function setFilter(&$var)
    {
        GPBUtil::checkMessage($var, \Sajari\Engine\Query\V1\Filter::class);
        $this->filter = $var;
    }

    /**
     * <pre>
     * IndexQuery is the matching configuration for index-based matching.
     * </pre>
     *
     * <code>.sajari.engine.query.v1.SearchRequest.IndexQuery index_query = 2;</code>
     */
    public function getIndexQuery()
    {
        return $this->index_query;
    }

    /**
     * <pre>
     * IndexQuery is the matching configuration for index-based matching.
     * </pre>
     *
     * <code>.sajari.engine.query.v1.SearchRequest.IndexQuery index_query = 2;</code>
     */
    public function setIndexQuery(&$var)
    {
        GPBUtil::checkMessage($var, \Sajari\Engine\Query\V1\SearchRequest_IndexQuery::class);
        $this->index_query = $var;
    }

    /**
     * <pre>
     * Feature query is the matching configuration for feature-based matching.
     * </pre>
     *
     * <code>.sajari.engine.query.v1.SearchRequest.FeatureQuery feature_query = 3;</code>
     */
    public function getFeatureQuery()
    {
        return $this->feature_query;
    }

    /**
     * <pre>
     * Feature query is the matching configuration for feature-based matching.
     * </pre>
     *
     * <code>.sajari.engine.query.v1.SearchRequest.FeatureQuery feature_query = 3;</code>
     */
    public function setFeatureQuery(&$var)
    {
        GPBUtil::checkMessage($var, \Sajari\Engine\Query\V1\SearchRequest_FeatureQuery::class);
        $this->feature_query = $var;
    }

    /**
     * <pre>
     * Offset is the offset to return results from.
     * </pre>
     *
     * <code>int32 offset = 4;</code>
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * <pre>
     * Offset is the offset to return results from.
     * </pre>
     *
     * <code>int32 offset = 4;</code>
     */
    public function setOffset($var)
    {
        GPBUtil::checkInt32($var);
        $this->offset = $var;
    }

    /**
     * <pre>
     * Limit is the number of results to return.
     * </pre>
     *
     * <code>int32 limit = 5;</code>
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * <pre>
     * Limit is the number of results to return.
     * </pre>
     *
     * <code>int32 limit = 5;</code>
     */
    public function setLimit($var)
    {
        GPBUtil::checkInt32($var);
        $this->limit = $var;
    }

    /**
     * <pre>
     * Fields to be returned for each result in the results.
     * By default all fields are returned.
     * </pre>
     *
     * <code>repeated string fields = 6;</code>
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * <pre>
     * Fields to be returned for each result in the results.
     * By default all fields are returned.
     * </pre>
     *
     * <code>repeated string fields = 6;</code>
     */
    public function setFields(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->fields = $var;
    }

    /**
     * <pre>
     * Sort ordering applied to results.
     * Multiple sorts can be applied sequentially.
     * By default all results are ordered by score.
     * </pre>
     *
     * <code>repeated .sajari.engine.query.v1.Sort sort = 7;</code>
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * <pre>
     * Sort ordering applied to results.
     * Multiple sorts can be applied sequentially.
     * By default all results are ordered by score.
     * </pre>
     *
     * <code>repeated .sajari.engine.query.v1.Sort sort = 7;</code>
     */
    public function setSort(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Sajari\Engine\Query\V1\Sort::class);
        $this->sort = $var;
    }

    /**
     * <pre>
     * A set of Aggregates to be run on the result set.
     * </pre>
     *
     * <code>map&lt;string, .sajari.engine.query.v1.Aggregate&gt; aggregates = 8;</code>
     */
    public function getAggregates()
    {
        return $this->aggregates;
    }

    /**
     * <pre>
     * A set of Aggregates to be run on the result set.
     * </pre>
     *
     * <code>map&lt;string, .sajari.engine.query.v1.Aggregate&gt; aggregates = 8;</code>
     */
    public function setAggregates(&$var)
    {
        $this->aggregates = $var;
    }

    /**
     * <pre>
     * Transforms to be applied to the request before it is run.
     * </pre>
     *
     * <code>repeated .sajari.engine.query.v1.Transform transforms = 9;</code>
     */
    public function getTransforms()
    {
        return $this->transforms;
    }

    /**
     * <pre>
     * Transforms to be applied to the request before it is run.
     * </pre>
     *
     * <code>repeated .sajari.engine.query.v1.Transform transforms = 9;</code>
     */
    public function setTransforms(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Sajari\Engine\Query\V1\Transform::class);
        $this->transforms = $var;
    }

}

