<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sajari/engine/store/record/record.proto

namespace Sajari\Engine\Store\Record;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>sajari.engine.store.record.MutateRequest</code>
 */
class MutateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * List of record murations to apply.
     * </pre>
     *
     * <code>repeated .sajari.engine.store.record.MutateRequest.RecordMutation record_mutations = 1;</code>
     */
    private $record_mutations;

    public function __construct() {
        \GPBMetadata\Sajari\Engine\Store\Record\Record::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * List of record murations to apply.
     * </pre>
     *
     * <code>repeated .sajari.engine.store.record.MutateRequest.RecordMutation record_mutations = 1;</code>
     */
    public function getRecordMutations()
    {
        return $this->record_mutations;
    }

    /**
     * <pre>
     * List of record murations to apply.
     * </pre>
     *
     * <code>repeated .sajari.engine.store.record.MutateRequest.RecordMutation record_mutations = 1;</code>
     */
    public function setRecordMutations(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Sajari\Engine\Store\Record\MutateRequest_RecordMutation::class);
        $this->record_mutations = $arr;
    }

}

