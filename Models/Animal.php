<?php

namespace Models\Animal;

abstract class Animal
{

    abstract public function getName(): string;

    public function isBird()
    {
        return false;
    }
}
