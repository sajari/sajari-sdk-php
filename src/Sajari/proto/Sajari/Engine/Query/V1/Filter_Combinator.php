<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sajari/engine/query/v1/query.proto

namespace Sajari\Engine\Query\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Combinator is a filter which combines other filters.
 * </pre>
 *
 * Protobuf type <code>sajari.engine.query.v1.Filter.Combinator</code>
 */
class Filter_Combinator extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The operator used to combine filters.
     * </pre>
     *
     * <code>.sajari.engine.query.v1.Filter.Combinator.Operator operator = 1;</code>
     */
    private $operator = 0;
    /**
     * <pre>
     * The set of filters to combine using the specified Operator.
     * </pre>
     *
     * <code>repeated .sajari.engine.query.v1.Filter filters = 2;</code>
     */
    private $filters;

    public function __construct() {
        \GPBMetadata\Sajari\Engine\Query\V1\Query::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The operator used to combine filters.
     * </pre>
     *
     * <code>.sajari.engine.query.v1.Filter.Combinator.Operator operator = 1;</code>
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * <pre>
     * The operator used to combine filters.
     * </pre>
     *
     * <code>.sajari.engine.query.v1.Filter.Combinator.Operator operator = 1;</code>
     */
    public function setOperator($var)
    {
        GPBUtil::checkEnum($var, \Sajari\Engine\Query\V1\Filter_Combinator_Operator::class);
        $this->operator = $var;
    }

    /**
     * <pre>
     * The set of filters to combine using the specified Operator.
     * </pre>
     *
     * <code>repeated .sajari.engine.query.v1.Filter filters = 2;</code>
     */
    public function getFilters()
    {
        return $this->filters;
    }

    /**
     * <pre>
     * The set of filters to combine using the specified Operator.
     * </pre>
     *
     * <code>repeated .sajari.engine.query.v1.Filter filters = 2;</code>
     */
    public function setFilters(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Sajari\Engine\Query\V1\Filter::class);
        $this->filters = $var;
    }

}

