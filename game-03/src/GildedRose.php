<?php

namespace App;

use App\NormalType;
use App\AgedBrie;
use App\BackstagePasses;
use App\Sulfuras;
use App\Conjured;

class GildedRose
{
    private static $categories = [
        'Aged Brie' => AgedBrie::class,
        'Sulfuras, Hand of Ragnaros' => Sulfuras::class,
        'Backstage passes to a TAFKAL80ETC concert' => BackstagePasses::class,
        'Conjured Mana Cake' => Conjured::class,
    ];

    public static function of($name, $quality, $sellIn)
    {
        return array_key_exists($name, self::$categories)? new self::$categories[$name]($quality, $sellIn) : new NormalType($quality, $sellIn);
    }
}