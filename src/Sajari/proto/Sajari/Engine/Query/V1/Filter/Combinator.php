<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sajari/engine/query/v1/query.proto

namespace Sajari\Engine\Query\V1\Filter;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Combinator is a filter which combines other filters.
 *
 * Generated from protobuf message <code>sajari.engine.query.v1.Filter.Combinator</code>
 */
class Combinator extends \Google\Protobuf\Internal\Message
{
    /**
     * The operator used to combine filters.
     *
     * Generated from protobuf field <code>.sajari.engine.query.v1.Filter.Combinator.Operator operator = 1;</code>
     */
    private $operator = 0;
    /**
     * The set of filters to combine using the specified Operator.
     *
     * Generated from protobuf field <code>repeated .sajari.engine.query.v1.Filter filters = 2;</code>
     */
    private $filters;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $operator
     *           The operator used to combine filters.
     *     @type \Sajari\Engine\Query\V1\Filter[]|\Google\Protobuf\Internal\RepeatedField $filters
     *           The set of filters to combine using the specified Operator.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Sajari\Engine\Query\V1\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * The operator used to combine filters.
     *
     * Generated from protobuf field <code>.sajari.engine.query.v1.Filter.Combinator.Operator operator = 1;</code>
     * @return int
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * The operator used to combine filters.
     *
     * Generated from protobuf field <code>.sajari.engine.query.v1.Filter.Combinator.Operator operator = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setOperator($var)
    {
        GPBUtil::checkEnum($var, \Sajari\Engine\Query\V1\Filter_Combinator_Operator::class);
        $this->operator = $var;

        return $this;
    }

    /**
     * The set of filters to combine using the specified Operator.
     *
     * Generated from protobuf field <code>repeated .sajari.engine.query.v1.Filter filters = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFilters()
    {
        return $this->filters;
    }

    /**
     * The set of filters to combine using the specified Operator.
     *
     * Generated from protobuf field <code>repeated .sajari.engine.query.v1.Filter filters = 2;</code>
     * @param \Sajari\Engine\Query\V1\Filter[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFilters($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Sajari\Engine\Query\V1\Filter::class);
        $this->filters = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Combinator::class, \Sajari\Engine\Query\V1\Filter_Combinator::class);
