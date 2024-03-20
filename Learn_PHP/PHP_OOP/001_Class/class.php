<?php

class Person{
    // this is properties
    public $name = "Jamaludi Malik";
    public $age = 30;
    public $hobby = "Programming";

    // if you want to create a constant property, you can use the const keyword.
    // the const keyword by default is static
    public const GOOD_BYE = 'Good bye!!!';

    // this is method
    public function introduction(){
        echo "Hello my name is {$this->name} and my age {$this->age} years old. My favorite hobby is {$this->hobby}";
    }
}

// create instance object Person
$person = new Person();

// call introduction method
$person->introduction();
$person::GOOD_BYE;

