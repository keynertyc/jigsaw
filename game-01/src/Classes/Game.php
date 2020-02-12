<?php
declare(strict_types=1);

class Game extends GameAbstract {

    /**
     * Function to find the first subset of 2 numbers of $mainSet
     * 
     * @param  Int  $value
     * 
     * @return Array
     */
    public function getSubset(Int $value): Array
    {
        for ($i = 0; $i <= count($this->mainSet)-1; $i++) {
            for ($j = $i+1; $j <= count($this->mainSet); $j++) {
                if ($this->mainSet[$i] + $this->mainSet[$j] == $value) {
                    return [$this->mainSet[$i], $this->mainSet[$j]];
                }
            }
        }
        return [];
    }
}