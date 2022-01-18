<?php

namespace Animals\Ostrich;

use Models\Bird\Bird;

class Ostrich extends Bird
{
    public function getName(): string
    {
        return "Ostrich";
    }

}