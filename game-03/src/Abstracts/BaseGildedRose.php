<?php

namespace App\Abstracts;

use App\Interfaces\GildedRoseInterface;

abstract class BaseGildedRose implements GildedRoseInterface
{
    public $quality;

    public $sellIn;

    public function __construct($quality, $sellIn)
    {
        $this->quality = $quality;
        $this->sellIn = $sellIn;
    }

    public static function of($quality, $sellIn) 
    {
        return new static($quality, $sellIn);
    }

    public function tick()
    {
        
    }

}