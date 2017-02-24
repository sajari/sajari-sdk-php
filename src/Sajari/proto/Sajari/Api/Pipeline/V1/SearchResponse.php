<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sajari/api/pipeline/v1/pipeline.proto

namespace Sajari\Api\Pipeline\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * SearchResponse is a response to a Search call.
 * </pre>
 *
 * Protobuf type <code>sajari.api.pipeline.v1.SearchResponse</code>
 */
class SearchResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Input values with updates/modifications by querying system.
     * </pre>
     *
     * <code>map&lt;string, string&gt; values = 1;</code>
     */
    private $values;
    /**
     * <pre>
     * SearchResponse from the engine request.
     * </pre>
     *
     * <code>.sajari.engine.query.v1.SearchResponse search_response = 2;</code>
     */
    private $search_response = null;
    /**
     * <pre>
     * Tokens which correspond to the result documents.
     * </pre>
     *
     * <code>repeated .sajari.api.query.v1.Token tokens = 3;</code>
     */
    private $tokens;

    public function __construct() {
        \GPBMetadata\Sajari\Api\Pipeline\V1\Pipeline::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Input values with updates/modifications by querying system.
     * </pre>
     *
     * <code>map&lt;string, string&gt; values = 1;</code>
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * <pre>
     * Input values with updates/modifications by querying system.
     * </pre>
     *
     * <code>map&lt;string, string&gt; values = 1;</code>
     */
    public function setValues(&$var)
    {
        $this->values = $var;
    }

    /**
     * <pre>
     * SearchResponse from the engine request.
     * </pre>
     *
     * <code>.sajari.engine.query.v1.SearchResponse search_response = 2;</code>
     */
    public function getSearchResponse()
    {
        return $this->search_response;
    }

    /**
     * <pre>
     * SearchResponse from the engine request.
     * </pre>
     *
     * <code>.sajari.engine.query.v1.SearchResponse search_response = 2;</code>
     */
    public function setSearchResponse(&$var)
    {
        GPBUtil::checkMessage($var, \Sajari\Engine\Query\V1\SearchResponse::class);
        $this->search_response = $var;
    }

    /**
     * <pre>
     * Tokens which correspond to the result documents.
     * </pre>
     *
     * <code>repeated .sajari.api.query.v1.Token tokens = 3;</code>
     */
    public function getTokens()
    {
        return $this->tokens;
    }

    /**
     * <pre>
     * Tokens which correspond to the result documents.
     * </pre>
     *
     * <code>repeated .sajari.api.query.v1.Token tokens = 3;</code>
     */
    public function setTokens(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Sajari\Api\Query\V1\Token::class);
        $this->tokens = $var;
    }

}

