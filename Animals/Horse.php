<?php

namespace Animals\Horse;

use Models\Animal\Animal;

class Horse extends Animal
{

    public function getName(): string
    {
        return "Horse";
    }

}