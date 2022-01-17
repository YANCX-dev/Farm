<?php
namespace Models\Bird;

use Models\Animal\Animal;

abstract class Bird extends Animal
{

    public function getName():string
    {
        return $this->getName();
    }


    public function isBird(): bool
    {
        return true;
    }
}