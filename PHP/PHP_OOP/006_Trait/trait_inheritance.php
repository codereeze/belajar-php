<?php
trait Greetings
{
    public function greet()
    {
        return "Hello!";
    }
}

trait Farewells
{
    public function farewell()
    {
        return "Goodbye!";
    }
}

trait Messages
{
    use Greetings, Farewells;
}

class MyClass
{
    use Messages;
}

$obj = new MyClass();
echo $obj->greet(); 
echo $obj->farewell(); 
