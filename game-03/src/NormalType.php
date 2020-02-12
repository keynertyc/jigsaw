<?php

namespace App;

use App\Abstracts\BaseGildedRose;

class NormalType extends BaseGildedRose
{
    public function tick()
    {
        $this->sellIn--;
        if($this->quality > 0){
            $this->quality--;
            if($this->sellIn <= 0){
                $this->quality--;
            }
        }
    }
}