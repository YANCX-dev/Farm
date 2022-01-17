<?php

namespace Animals\Chicken;

use Models\Bird\Bird;

class Chicken extends Bird
{

    public function getName(): string
    {
        return "Bird";
    }
}