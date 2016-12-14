<?php

namespace Sajari\Search;

require_once __DIR__.'/../proto/engine/query/v1/query.php';

use sajari\engine\query\v1\Aggregate\Count as EngineCount;
use sajari\engine\query\v1\Aggregate as EngineAggregate;
use sajari\engine\query\v1\SearchRequest\AggregatesEntry as EngineAggregatesEntry;

class CountAggregate extends Aggregate
{
    /** @var string $field */
    private $field;
    /** @var string $name */
    private $name;

    /**
     * CountAggregate constructor.
     * @param string $field
     * @param $name
     */
    public function __construct($field, $name)
    {
        $this->field = $field;
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }

    public function Proto()
    {
        $ca = new EngineCount();
        $ca->setField($this->field);

        $a = new EngineAggregate();
        $a->setCount($ca);

        $ae = new EngineAggregatesEntry();
        $ae->setKey($this->name);
        $ae->setValue($a);
        return $ae;
    }
}
