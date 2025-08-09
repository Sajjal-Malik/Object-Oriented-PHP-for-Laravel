<?php

class FirstClass
{
    const EXAMPLE = "You can't change this!";

    public static function test()
    {
        $testing = "This is a test!";
        return $testing;
    }
}

$firstClassObj1 = FirstClass::EXAMPLE;
echo $firstClassObj1;