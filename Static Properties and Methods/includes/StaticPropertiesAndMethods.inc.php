<?php

class Human
{
    public $name;
    public $eyeColor;
    public $age;

    public static $drinkingAge = 21;

    // Constructor
    public function __construct($name, $eyeColor, $age)
    {
        $this->name = $name;
        $this->eyeColor = $eyeColor;
        $this->age = $age;
    }

    // Method (Setter)
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public static function setDrinkingAge($newDrinkingAge)
    {
        self::$drinkingAge = $newDrinkingAge;
    }

    public function getDrinkingAge()
    {
        return self::$drinkingAge;
    }
}
