<?php

namespace Sajari\Query;

require_once __DIR__.'/../proto/api/query/v1/query.php';

/**
 * Class Tracking
 * @package Sajari\Query
 */
class Tracking implements \Sajari\Engine\Proto
{
  /** @var integer $type */
  private $type;

  /** @var string $query_id */
  private $query_id;

  /** @var integer $sequence */
  private $sequence;

  /** @var string $field */
  private $field;

  /** @var array $data */
  private $data;

    /**
     * Tracking constructor.
     */
    public function __construct()
  {
    $this->type = \sajariGen\api\query\v1\SearchRequest\Tracking\Type::NONE;
  }

    /**
     * @param string $field
     */
    public function click($field)
  {
    $this->field = $field;
    $this->type = \sajariGen\api\query\v1\SearchRequest\Tracking\Type::CLICK;
  }

    /**
     * @param string $field
     */
    public function posNeg($field)
  {
    $this->field = $field;
    $this->type = \sajariGen\api\query\v1\SearchRequest\Tracking\Type::POS_NEG;
  }

    /**
     * @param array $data
     */
    public function setData(array $data)
  {
      $this->data = $data;
  }

    /**
     * @return \sajariGen\api\query\v1\SearchRequest\Tracking
     */
    public function Proto()
  {
    $t = new \sajariGen\api\query\v1\SearchRequest\Tracking();

    $t->setQueryId($this->query_id);
    $t->setSequence($this->sequence);

    if (isset($this->data)) {
      foreach($this->data as $key => $value) {
        $dataEntry = new \sajariGen\api\query\v1\SearchRequest\Tracking\DataEntry();
        $dataEntry->setKey($key);
        $dataEntry->setValue($value);
        $t->addData($dataEntry);
      }
    }

    $t->setType($this->type);
    if ($this->type != \sajariGen\api\query\v1\SearchRequest\Tracking\Type::NONE) {
      $t->setField($this->field);
    }

    return $t;
  }
}
