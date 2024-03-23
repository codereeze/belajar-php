<?php
require_once 'interface/Car.php';

use Interface\Car;

class Avanza implements Car{
    public function run(){
        echo "Avanza running at 50km/h";
    }
}

$avanza = new Avanza();
$avanza->run();