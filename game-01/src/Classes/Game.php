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
        array_walk_recursive($this->mainSet, function ($val, $key) use($value) {
            if ($key < count($this->mainSet)-1) {
                array_walk_recursive($this->mainSet, function ($val2, $key2) use($key, $value) {
                    if ($key2+$key+1 < count($this->mainSet)) {
                        if ($this->mainSet[$key] + $this->mainSet[$key2+$key+1] == $value) {
                            $this->subSet = [$this->mainSet[$key], $this->mainSet[$key2+$key+1]];
                            return;
                        } 
                    }
                });
            }
        });
        return $this->subSet;
    }

}