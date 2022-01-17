<?php
namespace Models\Farmer;

use Models\Farm\Farm;
use Models\Animal\Animal;

class Farmer
{
    public function addAnimal(Farm $farm, Animal $animal)
    {
        $farm->addAnimal($animal);
    }

    public function rollCall(Farm $farm)
    {
        $farm->rollCall();
    }

}