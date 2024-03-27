<?php

class MyClass {
    public $name = "John";
    protected $age = 30;

    public function greet() {
        return "Hello, my name is $this->name.";
    }
}

$reflectionClass = new ReflectionClass('MyClass');

echo "Class Name: " . $reflectionClass->getName() . "\n";
echo "Properties:\n";
foreach ($reflectionClass->getProperties() as $property) {
    echo "- " . $property->getName() . "\n";
}
echo "Methods:\n";
foreach ($reflectionClass->getMethods() as $method) {
    echo "- " . $method->getName() . "\n";
}
