<?php

class Person
{
    public $name;
    public $eyeColor;
    public $age;

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

    // Destructor
    public function __destruct()
    {
        
    }
}