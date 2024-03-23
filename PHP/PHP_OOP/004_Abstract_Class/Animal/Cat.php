<?php

namespace Animal;

use Source\Animal;

class Cat extends Animal{
    public function speak($sound){
        echo "{$this->name} sound likes {$sound}";
    }
}