<?php

namespace App\Interfaces;

interface GildedRoseInterface
{
    public static function of($quality, $sellIn);

    public function tick();
}
