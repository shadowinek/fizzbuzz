<?php

use Shadowinek\FizzBuzz\FizzBuzz;

include('vendor/autoload.php');

if ($argc !== 1) {
    $fizzBuzz = new FizzBuzz();
    $fizzBuzz->execute((int) $argv[1]);

    echo implode(PHP_EOL, $fizzBuzz->getOutput());
    echo PHP_EOL;
} else {
    echo 'Use "php fizzbuzz.php [amount]" to run this script.' . PHP_EOL;
}
