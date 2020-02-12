<?php

namespace App;

use App\Abstracts\BaseGildedRose;

class Conjured extends BaseGildedRose
{
    public function tick()
    {
        $this->sellIn--;
        if($this->quality > 0){
            $this->quality -= 2;
            if($this->sellIn <= 0){
                $this->quality -= 2;
            }
        }
    }
}