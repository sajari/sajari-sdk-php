<?php

class KeyTest extends \PHPUnit_Framework_TestCase
{
    private $protoKeyTestValues;

    public function __construct()
    {
        parent::__construct();
        $this->protoKeyTestValues = [
            1,
            "dog",
            [],
            [1, 2, 3],
            null
        ];
    }

    public static function makeProtoKey($field, $value)
    {
        $keyValue = new sajari\engine\Value();
        if (is_array($value)) {
            $keyValueRepeated = new sajari\engine\Value\Repeated();
            foreach ($value as $v) {
                $keyValueRepeated->addValues($v);
            }
            $keyValue->setRepeated($keyValueRepeated);
        } else if (is_null($value)) {
            $keyValue->setNull(true);
        } else {
            $keyValue->setSingle(sprintf("%s", $value));
        }
        $key = new \sajari\engine\Key();
        $key->setField($field);
        $key->setValue($keyValue);
        return $key;
    }

    public function testGetField()
    {
        $field = "test";
        $key = new \Sajari\Record\Key($field, "");
        $this->assertSame(
            $field,
            $key->getField()
        );
    }

    public function testGetValue()
    {
        $value = "test";
        $key = new \Sajari\Record\Key("", $value);
        $this->assertSame(
            $value,
            $key->getValue()
        );
    }

    public function testFromProto()
    {
        $field = "testField";
        foreach ($this->protoKeyTestValues as $protoKeyTestValue) {
            $this->assertEquals(
                new \Sajari\Record\Key($field, $protoKeyTestValue),
                \Sajari\Record\Key::FromProto($this->makeProtoKey($field, $protoKeyTestValue))
            );
        }
    }

    public function testToProto()
    {
        $field = "testField";
        foreach ($this->protoKeyTestValues as $protoKeyTestValue) {
            $this->assertEquals(
                $this->makeProtoKey($field, $protoKeyTestValue),
                (new \Sajari\Record\Key($field, $protoKeyTestValue))->Proto()
            );
        }
    }
}
