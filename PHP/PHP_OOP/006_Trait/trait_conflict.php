<?php

trait Greetings1 {
    public function greet() {
        return "Hello from trait 1!";
    }
}

trait Greetings2 {
    public function greet() {
        return "Hello from trait 2!";
    }
}

class MyClass {
    use Greetings1, Greetings2;
}

$obj = new MyClass();
echo $obj->greet(); // Error: Trait method greet has not been applied, because there are collision.
