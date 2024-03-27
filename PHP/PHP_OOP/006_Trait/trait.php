<?php

trait Logger
{
    public function log($message)
    {
        echo "'{$message}' from class " . __CLASS__;
    }
}

class Hello
{
    use Logger;

    public function __construct()
    {
        $this->log("Hello World!");
    }
}

$hello = new Hello();


// trait overriding
trait Greetings {
    public function greet() {
        return "Hello from trait!";
    }
}

class MyClass {
    use Greetings;

    public function greet() {
        return "Hello from class!";
    }
}

$obj = new MyClass();
echo $obj->greet();
