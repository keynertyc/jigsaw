<?php
declare(strict_types=1);

class Game extends GameAbstract {

    private $subSet = [];

    /**
     * Function to find the first subset of 2 numbers of $mainSet
     * 
     * @param  Int  $value
     * 
     * @return Array
     */
    public function getSubset(Int $value)
    {
        $mainSetFiltered = array_filter($this->mainSet, function($val) use($value) {
            return ($val <= $value);
        });

        array_walk_recursive($mainSetFiltered, function ($val, $key) use($mainSetFiltered, $value) {
            if ($key < count($mainSetFiltered)-1) {
                array_walk_recursive($mainSetFiltered, function ($val2, $key2) use($mainSetFiltered, $key, $value) {
                    if ($key2+$key+1 < count($mainSetFiltered)) {
                        if ($mainSetFiltered[$key] + $mainSetFiltered[$key2+$key+1] == $value) {
                            $this->subSet = [$mainSetFiltered[$key], $mainSetFiltered[$key2+$key+1]];
                            return;
                        } 
                    }
                });
            }
        });
        return $this->subSet;
    }

}