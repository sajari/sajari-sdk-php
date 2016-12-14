<?php

namespace Sajari\Search;

require_once __DIR__.'/../proto/engine/query/v1/query.php';

use sajari\engine\query\v1\FieldBoost as EngineFieldBoost;
use sajari\engine\query\v1\FieldBoost\Interval as EngineInterval;

use Sajari\Search\IntervalFieldBoostPoint;

class IntervalFieldBoost extends FieldBoost
{
    /** @var string $field */
    private $field;
    /** @var IntervalFieldBoostPoint[] $point */
    private $points;

    /**
     * IntervalFieldBoost constructor.
     * @param string $field
     * @param IntervalFieldBoostPoint[] $points
     */
    public function __construct($field, array $points)
    {
        $this->field = $field;
        $this->points = $points;
    }

    /**
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * @return IntervalFieldBoostPoint[]
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * IntervalFieldBoostPoint constructor.
     * @param float $point
     * @param float $value
     * @return IntervalFieldBoostPoint
     */
    public static function Point($point, $value)
    {
      return new IntervalFieldBoostPoint($point, $value);
    }

    public function Proto()
    {
        $imb = new EngineInterval();
        $imb->setField($this->field);
        foreach ($this->points as $point) {
            $imb->addPoints($point->Proto());
        }

        $mb = new EngineFieldBoost();
        $mb->setInterval($imb);
        return $mb;
    }
}
