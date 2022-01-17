<?php
namespace Models\BirdFarm;

use Models\Farm\Farm;

class BirdFarm extends Farm
{

    public function rollCall():string
    {
        return "Количество приц на ферме:" . parent::rollCall();
    }

}