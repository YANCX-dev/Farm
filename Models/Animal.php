<?php

abstract class Animal
{
    public string $type;

    public function __construct($type)
    {
        $this->type = $type;
    }

    public function getName():string
    {
        return $this->type;
    }

    public function isBird():bool
    {
        return false;
    }
}
