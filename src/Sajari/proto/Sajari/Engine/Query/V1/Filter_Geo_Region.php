<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sajari/engine/query/v1/query.proto

namespace Sajari\Engine\Query\V1;

/**
 * <pre>
 * Region is an enumeration that defines regions for geo-boosting.
 * </pre>
 *
 * Protobuf enum <code>sajari.engine.query.v1.Filter.Geo.Region</code>
 */
class Filter_Geo_Region
{
    /**
     * <pre>
     * Inside is used to configure a geo filter to be
     * satisfied on all points within the radius.
     * </pre>
     *
     * <code>INSIDE = 0;</code>
     */
    const INSIDE = 0;
    /**
     * <pre>
     * Outside is used to configure a geo filter to be
     * satisfied to all points outside the radius.
     * </pre>
     *
     * <code>OUTSIDE = 1;</code>
     */
    const OUTSIDE = 1;
}

