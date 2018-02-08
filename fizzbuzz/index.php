<?php
    require "vendor/autoload.php";

    use David\FizzBuzz;

    $fizzbuzzer = new FizzBuzz(100);// fizzbuzz until 100
    foreach ($fizzbuzzer->run() as $number) {
        echo $number . PHP_EOL;
    }