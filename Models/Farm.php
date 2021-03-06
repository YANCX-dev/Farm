<?php

namespace Models\Farm;

use Models\Animal\Animal;

class Farm
{
    public array $animals = [];

    public function addAnimal(Animal $animal)
    {
        $this->animals[] = $animal;
    }

    public function rollCall()
    {
        $out = "";
        shuffle($this->animals);
        foreach ($this->animals as $animal) {
            $out .= "Animal on the farm:" . $animal->getName() . "<br/>";
        }

        return $out;

    }

}