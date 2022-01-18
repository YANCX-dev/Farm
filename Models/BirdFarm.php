<?php

namespace Models\BirdFarm;

use Models\Farm\Farm;

class BirdFarm extends Farm
{

    public function rollCall()
    {
        return "Bird on the farm:" . "<br/>" . parent::rollCall();
    }

}