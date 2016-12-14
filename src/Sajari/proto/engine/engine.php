<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin 1.0
// Source: engine/engine.proto
//   Date: 2016-12-13 04:59:29

namespace sajari\engine {

  class Collection extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $project = null;
    
    /**  @var string */
    public $name = null;
    
    /**  @var string */
    public $path = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'sajari.engine.Collection');

      // OPTIONAL STRING project = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "project";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING name = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "name";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING path = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "path";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <project> has a value
     *
     * @return boolean
     */
    public function hasProject(){
      return $this->_has(1);
    }
    
    /**
     * Clear <project> value
     *
     * @return \sajari\engine\Collection
     */
    public function clearProject(){
      return $this->_clear(1);
    }
    
    /**
     * Get <project> value
     *
     * @return string
     */
    public function getProject(){
      return $this->_get(1);
    }
    
    /**
     * Set <project> value
     *
     * @param string $value
     * @return \sajari\engine\Collection
     */
    public function setProject( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <name> has a value
     *
     * @return boolean
     */
    public function hasName(){
      return $this->_has(2);
    }
    
    /**
     * Clear <name> value
     *
     * @return \sajari\engine\Collection
     */
    public function clearName(){
      return $this->_clear(2);
    }
    
    /**
     * Get <name> value
     *
     * @return string
     */
    public function getName(){
      return $this->_get(2);
    }
    
    /**
     * Set <name> value
     *
     * @param string $value
     * @return \sajari\engine\Collection
     */
    public function setName( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <path> has a value
     *
     * @return boolean
     */
    public function hasPath(){
      return $this->_has(3);
    }
    
    /**
     * Clear <path> value
     *
     * @return \sajari\engine\Collection
     */
    public function clearPath(){
      return $this->_clear(3);
    }
    
    /**
     * Get <path> value
     *
     * @return string
     */
    public function getPath(){
      return $this->_get(3);
    }
    
    /**
     * Set <path> value
     *
     * @param string $value
     * @return \sajari\engine\Collection
     */
    public function setPath( $value){
      return $this->_set(3, $value);
    }
  }
}

namespace sajari\engine {

  class Collections extends \DrSlump\Protobuf\Message {

    /**  @var \sajari\engine\Collection[]  */
    public $collections = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'sajari.engine.Collections');

      // REPEATED MESSAGE collections = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "collections";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\sajari\engine\Collection';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <collections> has a value
     *
     * @return boolean
     */
    public function hasCollections(){
      return $this->_has(1);
    }
    
    /**
     * Clear <collections> value
     *
     * @return \sajari\engine\Collections
     */
    public function clearCollections(){
      return $this->_clear(1);
    }
    
    /**
     * Get <collections> value
     *
     * @param int $idx
     * @return \sajari\engine\Collection
     */
    public function getCollections($idx = NULL){
      return $this->_get(1, $idx);
    }
    
    /**
     * Set <collections> value
     *
     * @param \sajari\engine\Collection $value
     * @return \sajari\engine\Collections
     */
    public function setCollections(\sajari\engine\Collection $value, $idx = NULL){
      return $this->_set(1, $value, $idx);
    }
    
    /**
     * Get all elements of <collections>
     *
     * @return \sajari\engine\Collection[]
     */
    public function getCollectionsList(){
     return $this->_get(1);
    }
    
    /**
     * Add a new element to <collections>
     *
     * @param \sajari\engine\Collection $value
     * @return \sajari\engine\Collections
     */
    public function addCollections(\sajari\engine\Collection $value){
     return $this->_add(1, $value);
    }
  }
}

namespace sajari\engine {

  class EngineClient extends \Grpc\BaseStub {

    public function __construct($hostname, $opts, $channel = null) {
      parent::__construct($hostname, $opts, $channel);
    }
    /**
     * @param sajari\engine\Collection $input
     */
    public function CreateCollection(\sajari\engine\Collection $argument, $metadata = array(), $options = array()) {
      return $this->_simpleRequest('/sajari.engine.Engine/CreateCollection', $argument, '\sajari\engine\Empty::deserialize', $metadata, $options);
    }
    /**
     * @param sajari\engine\Collection $input
     */
    public function LoadCollection(\sajari\engine\Collection $argument, $metadata = array(), $options = array()) {
      return $this->_simpleRequest('/sajari.engine.Engine/LoadCollection', $argument, '\sajari\engine\Empty::deserialize', $metadata, $options);
    }
    /**
     * @param sajari\engine\Collection $input
     */
    public function UnloadCollection(\sajari\engine\Collection $argument, $metadata = array(), $options = array()) {
      return $this->_simpleRequest('/sajari.engine.Engine/UnloadCollection', $argument, '\sajari\engine\Empty::deserialize', $metadata, $options);
    }
    /**
     * @param sajari\engine\Collection $input
     */
    public function DeleteCollection(\sajari\engine\Collection $argument, $metadata = array(), $options = array()) {
      return $this->_simpleRequest('/sajari.engine.Engine/DeleteCollection', $argument, '\sajari\engine\Empty::deserialize', $metadata, $options);
    }
    /**
     * @param sajari\engine\Empty $input
     */
    public function ListCollections(\sajari\engine\Empty $argument, $metadata = array(), $options = array()) {
      return $this->_simpleRequest('/sajari.engine.Engine/ListCollections', $argument, '\sajari\engine\Collections::deserialize', $metadata, $options);
    }
  }
}