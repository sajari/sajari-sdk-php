<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sajari/rpc/status.proto

namespace GPBMetadata\Sajari\Rpc;

class Status
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(hex2bin(
            "0a560a1773616a6172692f7270632f7374617475732e70726f746f120a73" .
            "616a6172692e72706322270a06537461747573120c0a04636f6465180120" .
            "012805120f0a076d657373616765180220012809620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
