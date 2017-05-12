<?php

namespace Sajari\Query;

\Sajari\Internal\Utils::_require_all(__DIR__.'/../proto', 10);

class IndexQuery implements \Sajari\Internal\Proto
{

    /** @var Body[] body */
    private $body;

    /** @var InstanceBoost[] instanceBoosts */
    private $instanceBoosts;

    /** @var FieldBoost[] fieldBoosts */
    private $fieldBoosts;

    /**
     * @param Body[] $body
     * @return $this
     */
    public function setBody(array $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * @param InstanceBoost[] $instanceBoosts
     * @return $this
     */
    public function setInstanceBoosts(array $instanceBoosts)
    {
        $this->instanceBoosts = $instanceBoosts;
        return $this;
    }

    /**
     * @param FieldBoost[] $fieldBoosts
     * @return $this
     */
    public function setFieldBoosts(array $fieldBoosts)
    {
        $this->fieldBoosts = $fieldBoosts;
        return $this;
    }

    /**
     * @return \Sajari\Engine\Query\V1\SearchRequest\IndexQuery
     */
    public function Proto()
    {
        $fq = new \Sajari\Engine\Query\V1\SearchRequest_IndexQuery();

        // Body
        if (isset($this->body)) {
            $bodies = [];
            foreach ($this->body as $b) {
                $bodies[] = $b->Proto();
            }
            $repeatedBodies = \Sajari\Internal\Utils::MakeRepeated(
                $bodies,
                \Google\Protobuf\Internal\GPBType::MESSAGE,
                \Sajari\Engine\Query\V1\Body::class
            );
            $fq->setBody($repeatedBodies);
        }

        // InstanceBoosts
        if (isset($this->instanceBoosts)) {
            $ibs = [];
            foreach ($this->instanceBoosts as $b) {
                $ibs[] = $b->Proto();
            }
            $fq->setInstanceBoosts(\Sajari\Internal\Utils::MakeRepeated($ibs, \Google\Protobuf\Internal\GPBType::MESSAGE, \Sajari\Engine\Query\V1\InstanceBoost::class));
        }

        // FieldBoosts
        if (isset($this->fieldBoosts)) {
            $fbs = [];
            foreach ($this->fieldBoosts as $b) {
                $fbs[] = $b->Proto();
            }
            $fq->setFieldBoosts(\Sajari\Internal\Utils::MakeRepeated($fbs, \Google\Protobuf\Internal\GPBType::MESSAGE, \Sajari\Engine\Query\V1\FieldBoost::class));
        }

        return $fq;
    }
}
