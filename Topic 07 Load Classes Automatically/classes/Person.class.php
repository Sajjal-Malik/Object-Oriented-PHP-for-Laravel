<?php

class Person
{
    public $name;
    public $eyeColor;
    public $age;

    // Mutator / Setter
    public function setName(string $newName)
    {
        $this->name = $newName;
    }

    // Accessor / Getter
    public function getName()
    {
        return $this->name;
    }
    
}