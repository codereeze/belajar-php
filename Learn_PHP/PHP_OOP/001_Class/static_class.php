<?php

class Person
{
    public static $name = "Jamaludi Malik";
    public static $age = 30;
    public static $hobby = "Programming";

    public static function introduction()
    {
        // how to call static property? you can do it!
        echo "Name : " . Person::$name . PHP_EOL;
        // or you can use self keyword
        echo "Age : " . self::$age . PHP_EOL;
        echo "Hobby : " . self::$hobby . PHP_EOL;
    }
}

// call introduction method
// no need for object class instantiation
Person::introduction();
