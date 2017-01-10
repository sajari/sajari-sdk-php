<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin 1.0
// Source: engine/value.proto
//   Date: 2017-01-10 02:02:10

namespace sajari\engine\Value {

  class Repeated extends \DrSlump\Protobuf\Message {

    /**  @var string[]  */
    public $values = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'sajari.engine.Value.Repeated');

      // REPEATED STRING values = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "values";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <values> has a value
     *
     * @return boolean
     */
    public function hasValues(){
      return $this->_has(1);
    }
    
    /**
     * Clear <values> value
     *
     * @return \sajari\engine\Value\Repeated
     */
    public function clearValues(){
      return $this->_clear(1);
    }
    
    /**
     * Get <values> value
     *
     * @param int $idx
     * @return string
     */
    public function getValues($idx = NULL){
      return $this->_get(1, $idx);
    }
    
    /**
     * Set <values> value
     *
     * @param string $value
     * @return \sajari\engine\Value\Repeated
     */
    public function setValues( $value, $idx = NULL){
      return $this->_set(1, $value, $idx);
    }
    
    /**
     * Get all elements of <values>
     *
     * @return string[]
     */
    public function getValuesList(){
     return $this->_get(1);
    }
    
    /**
     * Add a new element to <values>
     *
     * @param string $value
     * @return \sajari\engine\Value\Repeated
     */
    public function addValues( $value){
     return $this->_add(1, $value);
    }
  }
}

namespace sajari\engine {

  class Value extends \DrSlump\Protobuf\Message {

    /**  @var boolean */
    public $null = null;
    
    /**  @var string */
    public $single = null;
    
    /**  @var \sajari\engine\Value\Repeated */
    public $repeated = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'sajari.engine.Value');

      // OPTIONAL BOOL null = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING single = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "single";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE repeated = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "repeated";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\sajari\engine\Value\Repeated';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <null> has a value
     *
     * @return boolean
     */
    public function hasNull(){
      return $this->_has(1);
    }
    
    /**
     * Clear <null> value
     *
     * @return \sajari\engine\Value
     */
    public function clearNull(){
      return $this->_clear(1);
    }
    
    /**
     * Get <null> value
     *
     * @return boolean
     */
    public function getNull(){
      return $this->_get(1);
    }
    
    /**
     * Set <null> value
     *
     * @param boolean $value
     * @return \sajari\engine\Value
     */
    public function setNull( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <single> has a value
     *
     * @return boolean
     */
    public function hasSingle(){
      return $this->_has(2);
    }
    
    /**
     * Clear <single> value
     *
     * @return \sajari\engine\Value
     */
    public function clearSingle(){
      return $this->_clear(2);
    }
    
    /**
     * Get <single> value
     *
     * @return string
     */
    public function getSingle(){
      return $this->_get(2);
    }
    
    /**
     * Set <single> value
     *
     * @param string $value
     * @return \sajari\engine\Value
     */
    public function setSingle( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <repeated> has a value
     *
     * @return boolean
     */
    public function hasRepeated(){
      return $this->_has(3);
    }
    
    /**
     * Clear <repeated> value
     *
     * @return \sajari\engine\Value
     */
    public function clearRepeated(){
      return $this->_clear(3);
    }
    
    /**
     * Get <repeated> value
     *
     * @return \sajari\engine\Value\Repeated
     */
    public function getRepeated(){
      return $this->_get(3);
    }
    
    /**
     * Set <repeated> value
     *
     * @param \sajari\engine\Value\Repeated $value
     * @return \sajari\engine\Value
     */
    public function setRepeated(\sajari\engine\Value\Repeated $value){
      return $this->_set(3, $value);
    }
  }
}

