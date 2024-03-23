<?php

/**
 * visibility/access modifier - rules
 * --------------------------
 * 
 * public  =>>> property or method can be accessed by parent class, child class, and non-derived class
 * protected =>>> property or method can only be accessed by the parent class and the child class
 * private =>>> property or method can only be accessed by the class itself
 * 
 */


class Person
{
    public $name;
    public $age;
    protected $gender;

    // construct function It's the first execute method while the object class is being instanced
    public function __construct(string $name, int $age, string $gender)
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }
}


//  use extends keyword to create child class
class JohnDoe extends Person
{
    public $eye_color;
    public $hair_color;
    public $skin_color;
    private $code_person;

    public function __construct(string $name, int $age, string $gender, string $eye_color, string $hair_color, string $skin_color, string $code_person)
    {
        // properties from parent class
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
        
        $this->eye_color = $eye_color;
        $this->hair_color = $hair_color;
        $this->skin_color = $skin_color;
        $this->code_person = $code_person;
    }

    public function tellAboutMyself()
    {
        return <<<Myself
        ID : $this->code_person
        Name : $this->name
        Age : $this->age
        -----------------------
        Eye color : $this->eye_color
        Hair color : $this->hair_color
        Skin color : $this->skin_color
        Myself;
    }

    // this method automatically executes after an instance object is deleted
    public function __destruct()
    {
        echo "John Doe data has been deleted!";
    }
}

$john_doe = new JohnDoe('John Doe', 30, 'Pria', 'Brown', 'Pink', 'Black', '19230825');
echo $john_doe->tellAboutMyself() . PHP_EOL;

// delete instance to run destruct method
unset($john_doe);