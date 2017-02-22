<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sajari/api/query/v1/query.proto

namespace Sajari\Api\Query\V1;

/**
 * Protobuf enum <code>sajari.api.query.v1.SearchRequest.Tracking.Type</code>
 */
class SearchRequest_Tracking_Type
{
    /**
     * <pre>
     * No tracking will occur.
     * </pre>
     *
     * <code>NONE = 0;</code>
     */
    const NONE = 0;
    /**
     * <pre>
     * Click tracking will be used.
     * A click token will be generated for each result.  To register a click see &lt;the other
     * API calls&gt;.  Results which are returned and not clicked on will fall down rankings, and
     * similarly low-ranked documents which receive clicks will be moved up the rankings.
     * </pre>
     *
     * <code>CLICK = 1;</code>
     */
    const CLICK = 1;
    /**
     * <pre>
     * Pos/neg tokens will be generated for each result.  Each document in the result set can be
     * marked with pos/neg value for the search.  This is then fed back into the ranking algorithm
     * to improve future results.  Unlike CLICK, if no tokens are reported for documents then
     * no action is taken.
     * </pre>
     *
     * <code>POS_NEG = 2;</code>
     */
    const POS_NEG = 2;
}
