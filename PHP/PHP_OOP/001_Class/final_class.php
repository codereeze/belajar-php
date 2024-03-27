<?php

final class Person
{
    public $name = "John Doe";

    public function sayHello()
    {
        echo "Hello World from {$this->name}";
    }
}

// Error: doesn't have a child class
// class JaneDoe extends Person{

// }