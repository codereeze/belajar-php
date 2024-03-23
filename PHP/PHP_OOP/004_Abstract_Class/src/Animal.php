<?php

namespace Source;

abstract class Animal
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
    
    abstract public function speak($sound);
}
