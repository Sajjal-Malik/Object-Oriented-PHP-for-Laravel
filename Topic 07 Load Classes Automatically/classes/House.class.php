<?php

class House
{
    public $address;

    // Mutator / Setter
    public function setAddressName(string $newAddress)
    {
        $this->address = $newAddress;
    }

    // Accessor / Getter
    public function getAddressName()
    {
        return $this->address;
    }
}