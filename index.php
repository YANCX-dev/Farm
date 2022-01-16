<?php
require_once 'Models/Farmer.php';
require_once 'Models/Bird.php';
require_once 'Models/BirdFarm.php';
require_once 'Models/Farm.php';
require_once 'Models/Animal.php';


$sucker = new BirdFarm();
var_dump($sucker);
$Farmer = new Farmer;
$Farmer->addAnimal("ХУЕСОС");
$Farmer->rollCall();


