<?php

namespace Sajari\Search;

require_once __DIR__.'/../proto/doc.php';
require_once __DIR__.'/../proto/query.php';

use sajari\engine\query\FieldBoost\Element as ProtoElement;
use sajari\engine\query\FieldBoost as ProtoFieldBoost;

class ElementFieldBoost extends FieldBoost
{
    /** @var string $field */
    private $field;
    /** @var string[] $elements */
    private $elements;

    /**
     * ElementFieldBoost constructor.
     * @param string $field
     * @param \string[] $elements
     */
    public function __construct($field, array $elements)
    {
        $this->field = $field;
        $this->elements = $elements;
    }

    /**
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * @return \string[]
     */
    public function getElements()
    {
        return $this->elements;
    }

    public function Proto()
    {
        $emb = new ProtoElement();
        $emb->setField($this->field);
        foreach ($this->elements as $element) {
            $emb->addElts($element);
        }

        $mb = new ProtoFieldBoost();
        $mb->setElement($emb);
        return $mb;
    }
}
