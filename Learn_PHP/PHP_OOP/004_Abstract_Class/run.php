<?php

require_once "src/Animal.php";
require_once "Animal/Cat.php";

use Animal\Cat;

$cat = new Cat("Cat");
$cat->speak("Rawwrr");

