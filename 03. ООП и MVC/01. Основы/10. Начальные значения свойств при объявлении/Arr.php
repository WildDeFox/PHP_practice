<?php
class Arr {
    private $numbers = [];

    public function getSum() {
        return array_sum($this -> numbers);
    }

    public function addArr($arr) {
        $this -> numbers = array_merge($this -> numbers, $arr);
    }

    public function getAvg() {
        return $this -> getSum() / count($this -> numbers);
    }
}