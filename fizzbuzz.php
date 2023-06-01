<?php

use Shadowinek\Fizzbuzz\FizzBuzz;

include('vendor/autoload.php');

if ($argc !== 1) {
    $fizzbuzz = new FizzBuzz();
    $fizzbuzz->execute((int) $argv[1]);
    $fizzbuzz->print();
} else {
    echo 'Use "php fizzbuzz.php [amount]" to run this script.' . PHP_EOL;
}
