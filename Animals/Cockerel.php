<?php

namespace Animals\Cockerel;

use Models\Bird\Bird;

class Cockerel extends Bird
{

    public function getName(): string
    {
        return "cockerel";
    }

}