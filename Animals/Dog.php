<?php

namespace Animals\Dog;

use Models\Animal\Animal;

class Dog extends Animal
{
    public function getName()
    {
        return "Dog";
    }

}