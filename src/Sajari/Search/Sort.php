<?php

namespace Sajari\Search;

require_once __DIR__.'/../proto/engine/query/v1/query.php';

/**
 * Class Sort
 * @package Sajari\Search
 */
class Sort implements Proto
{
    /** @var string $field */
    private $field;

    /** @var int $order */
    private $order;

    /**
     * Sort constructor.
     * @param string $field
     * @param int $order
     */
    public function __construct($field, $order)
    {
        $this->field = $field;
        $this->order = $order;
    }

    /**
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * @return int
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param string $field
     * @return Sort
     */
    public static function Asc($field)
    {
        return new Sort($field, \sajari\engine\query\v1\Sort\Order::ASC);
    }

    /**
     * @param string $field
     * @return Sort
     */
    public static function Desc($field)
    {
        return new Sort($field, \sajari\engine\query\v1\Sort\Order::DESC);
    }

    /**
     * @return \sajari\engine\query\v1\Sort
     */
    public function Proto()
    {
        $s = new \sajari\engine\query\v1\Sort();
        $s->setField($this->field);
        $s->setOrder($this->order);
        return $s;
    }
}
