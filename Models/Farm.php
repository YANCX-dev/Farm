<?php


class Farm
{
    public array $animals = [];

    public function addAnimal($animal)
    {
        $this->animals = $animal;
    }

    public function rollCall()
    {
        shuffle($this->animals);
        foreach ($this->animals as $value) {
            echo "На ферме обитает:" . $value;
        }

    }

}