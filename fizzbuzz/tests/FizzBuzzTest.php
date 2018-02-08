<?php

use David\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase {

    public function testCheckFizzBuzzReturnsProperValueForDivisibleBy3() {
        $fizzBuzz = new FizzBuzz(9);
        $numbers = $fizzBuzz->run();

        $this->assertEquals('Fizz', $numbers[6], '6 divides by 3 but program failed!');
        $this->assertEquals('Fizz', $numbers[9], '9 divides by 3 but program failed!');
    }

    public function testCheckFizzBuzzReturnsProperValueForDivisibleBy5() {
        $fizzBuzz = new FizzBuzz(20);
        $numbers = $fizzBuzz->run();

        $this->assertEquals('Buzz', $numbers[10], '10 divides by 5 but program failed!');
        $this->assertEquals('Buzz', $numbers[20], '20 divides by 5 but program failed!');
    }

    public function testCheckFizzBuzzReturnsProperValueForDivisibleBy3And5() {
        $fizzBuzz = new FizzBuzz(30);
        $numbers = $fizzBuzz->run();

        $this->assertEquals('FizzBuzz', $numbers[15], '15 divides by 3 and 5 but program failed!');
        $this->assertEquals('FizzBuzz', $numbers[30], '30 divides by 3 and 5 but program failed!');
    }

    public function testCheckFizzBuzzReturnsProperValueForNumbersNotDivisibleBy3Or5() {
        $fizzBuzz = new FizzBuzz(10);
        $numbers = $fizzBuzz->run();

        $this->assertEquals('7', $numbers[7], "7 dosen't divides by 3 or 5 but program failed!");
        $this->assertEquals('8', $numbers[8], "8 dosen't divides by 3 or 5 but program failed!");
    }

    public function testCheckFizzBuzzReturnsProperValueForExceptionNumbers() {
        $fizzBuzz = new FizzBuzz(5);
        $numbers = $fizzBuzz->run();

        $this->assertEquals('3', $numbers[3], "3 is an exception but program failed!");
        $this->assertEquals('5', $numbers[5], "5 is an exception but program failed!");
    }

    public function testRunFizzBuzzGeneratesTheRightAmountOfNumbers() {
        $fizzBuzz = new FizzBuzz(10);
        $numbers = $fizzBuzz->run();

        $this->assertEquals('10', count($numbers), "there were supposed to be 10 numbers but program failed!");
    }
}