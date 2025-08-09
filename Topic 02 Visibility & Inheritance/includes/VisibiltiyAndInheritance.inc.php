<?php

class Person
{
    protected $first = "Malik";
    protected $last = "Bhatti";
    private $age = 25;
    public function owner()
    {
        $str = $this->first . $this->last;
        return $str;
    }
}

class Pet extends Person
{
    public function owner()
    {
        $str = "Hi There";
        return $str;
    }

    public function hello()
    {
        $str = $this->first . $this->last;
        return $str;
    }
}