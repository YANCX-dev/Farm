<?php

use Models\Animal\Animal;

class Rabbit extends Animal
{
    public function getName(): string
    {
        return "Rabbit";
    }
}