<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sajari/api/engine/engine.proto

namespace GPBMetadata\Sajari\Api\Engine;

class Engine
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Sajari\Rpc\GPBEmpty::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a8c020a1e73616a6172692f6170692f656e67696e652f656e67696e652e" .
            "70726f746f121173616a6172692e6170692e656e67696e651a1673616a61" .
            "72692f7270632f656d7074792e70726f746f221a0a0a436f6c6c65637469" .
            "6f6e120c0a046e616d65180120012809329a010a06456e67696e6512470a" .
            "10437265617465436f6c6c656374696f6e121d2e73616a6172692e617069" .
            "2e656e67696e652e436f6c6c656374696f6e1a142e73616a6172692e7270" .
            "632e475042456d70747912470a1044656c657465436f6c6c656374696f6e" .
            "121d2e73616a6172692e6170692e656e67696e652e436f6c6c656374696f" .
            "6e1a142e73616a6172692e7270632e475042456d707479620670726f746f" .
            "33"
        ));

        static::$is_initialized = true;
    }
}
