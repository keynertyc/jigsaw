<?php

namespace App;

use App\Abstracts\BaseGildedRose;
class AgedBrie extends BaseGildedRose
{
    public function tick()
    {
        $this->quality++;
        $this->sellIn--;
        if ($this->sellIn <= 0) {
            $this->quality++;
        }
        if ($this->quality > 50) {
            $this->quality = 50;
        }
    }
}
