<?php
interface Greeting {
    public function greet();
}

$greet = new class implements Greeting {
    public function greet() {
        echo "Hello, World!";
    }
};

$greet->greet();
