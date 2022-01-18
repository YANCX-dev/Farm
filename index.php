<?php
require_once 'Models/Animal.php';
require_once 'Models/Bird.php';
require_once 'Models/Farm.php';
require_once 'Models/Farmer.php';
require_once 'Models/BirdFarm.php';

//Animal classes
require_once 'Animals/Chicken.php';
require_once 'Animals/Dog.php';
require_once 'Animals/Horse.php';
require_once 'Animals/Pig.php';
require_once 'Animals/Rabbit.php';
require_once 'Animals/Cockerel.php';
require_once 'Animals/Ostrich.php';

use Models\Animal;
use Models\Bird;
use Models\Farm\Farm;
use Models\Farmer\Farmer;
use Models\BirdFarm\BirdFarm;

//use animal classes
use Animals\Chicken\Chicken;
use Animals\Dog\Dog;
use Animals\Horse\Horse;
use Animals\Pig\Pig;
use Animals\Rabbit\Rabbit;
use Animals\Cockerel\Cockerel;
use Animals\Ostrich\Ostrich;


function outInfo($info)
{
    echo "<pre>";
    var_dump($info);
    echo "<pre>";

}

$Farm = new Farm;
$Farmer = new Farmer;
$BirdFarm = new BirdFarm();

$animals = [
    new Chicken(),
    new Dog(),
    new Horse(),
    new Pig(),
    new Rabbit(),
    new Cockerel(),
    new Ostrich()
];

$birdCount = 0;
$animalCount = 0;
foreach ($animals as $animal) {
    if ($animal->isBird()) {
        $Farmer->addAnimal($BirdFarm, $animal);
        $birdCount++;
    } else {
        $Farmer->addAnimal($Farm, $animal);
        $animalCount++;
    }
}


require_once $_SERVER["DOCUMENT_ROOT"] . '/index.view.php';



