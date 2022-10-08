<?php
namespace App\Animals;

use App\Animal;

class Elephant extends Animal
{
    public function __construct($name){
        $this->name = $name;
    }

    protected function getNoise(): string{
        return 'The ' . $this->getName() . ' says "splash"';
    }
}