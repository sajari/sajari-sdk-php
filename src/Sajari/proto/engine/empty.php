<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin 1.0
// Source: engine/XEmpty.proto
//   Date: 2017-01-10 02:02:10

namespace sajariGen\engine {

  class XEmpty extends \DrSlump\Protobuf\Message {


    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'sajari.engine.XEmpty');

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }
  }
}

