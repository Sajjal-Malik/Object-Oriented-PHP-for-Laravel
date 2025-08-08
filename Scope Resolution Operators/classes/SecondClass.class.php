<?php

class SecondClass extends FirstClass
{
    public static $staticProperty = "A Static Property";

    public static function anotherTest()
    {
        echo parent::EXAMPLE;
        echo self::$staticProperty;
    }
}

$secondClassObj1 = SecondClass::anotherTest();
echo $secondClassObj1;