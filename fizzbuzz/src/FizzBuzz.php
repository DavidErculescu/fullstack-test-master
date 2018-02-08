<?php

namespace David;

class FizzBuzz {
    public function __construct($n) {
        $this->n = $n;
    }

    public $n;

    public function run(){
        $results = [];
        for ($i=1 ; $i<=$this->n ; $i++){
            $results[$i]=$this->check($i);
        }

        return $results;
    }

    public function check($x) {
        $result = '';

        if ($x == 3 || $x == 5) {
            return $x;
        }

        if ($x % 3 == 0){
            $result .='Fizz';
        }
        if ($x % 5 == 0){
            $result .='Buzz';
        }
        if ($result == '') {
            return $x;
        }

        return $result;
    }
}