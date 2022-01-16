<?php

namespace Models\Animal;

abstract class Bird extends Animal
{
    public function isBird():bool
    {
        return true;
    }
}