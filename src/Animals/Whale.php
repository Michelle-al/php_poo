<?php
namespace App\Animals;

use App\Animal;

class Whale extends Animal
{
    public function __construct($name){
        parent::__construct($name);
    }

    protected function getNoise(): string{
        return 'The ' . $this->getName() . ' says "splash"';
    }
    public function __toString(): string
    {
        return $this->noise();
    }
}