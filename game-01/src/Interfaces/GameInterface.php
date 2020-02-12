<?php

interface GameInterface{   
    public function testCanBeGetSubset(Int $value): Array; 
} 

abstract class GameAbstract {
    /**
     * @var Array
     */
    protected $mainSet;

    /**
     * Class constructor
     *
     */
    public function __construct(Array $mainSet)
    {
        $this->mainSet = $mainSet;
    }
}