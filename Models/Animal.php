<?php

namespace Models\Animal;

abstract class Animal
{

    abstract public function getName();

    public function isBird(): bool
    {
        return false;
    }
}
