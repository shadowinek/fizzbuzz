<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Shadowinek\FizzBuzz\FizzBuzz;

class FizzBuzzTest extends TestCase
{
    private FizzBuzz $fizzBuzz;

    public function setUp(): void
    {
        $this->fizzBuzz = new FizzBuzz();
    }

    /**
     * @dataProvider dataProvider
     */
    public function testExecute(int $input, array $output) {
        $this->fizzBuzz->execute($input);
        $this->assertEquals($this->fizzBuzz->getOutput(), $output);
    }

    public static function dataProvider() {
        return [
            [1, [1]],
            [2, [1, 2]],
            [3, [1, 2, "Fizz"]],
            [4, [1, 2, "Fizz", 4]],
            [5, [1, 2, "Fizz", 4, "Buzz"]],
            [10, [1, 2, "Fizz", 4, "Buzz", "Fizz", 7, 8, "Fizz", "Buzz"]],
            [15, [1, 2, "Fizz", 4, "Buzz", "Fizz", 7, 8, "Fizz", "Buzz", 11, "Fizz", 13, 14, "FizzBuzz"]],
            // I would not use the 100 in a normal project, but I am adding it to fulfill the task requirements a bit more
            [100, [1, 2, "Fizz", 4, "Buzz", "Fizz", 7, 8, "Fizz", "Buzz", 11, "Fizz", 13, 14, "FizzBuzz", 16, 17, "Fizz", 19, "Buzz", "Fizz", 22, 23, "Fizz", "Buzz", 26, "Fizz", 28, 29, "FizzBuzz", 31, 32, "Fizz", 34, "Buzz", "Fizz", 37, 38, "Fizz", "Buzz", 41, "Fizz", 43, 44, "FizzBuzz", 46, 47, "Fizz", 49, "Buzz", "Fizz", 52, 53, "Fizz", "Buzz", 56, "Fizz", 58, 59, "FizzBuzz", 61, 62, "Fizz", 64, "Buzz", "Fizz", 67, 68, "Fizz", "Buzz", 71, "Fizz", 73, 74, "FizzBuzz", 76, 77, "Fizz", 79, "Buzz", "Fizz", 82, 83, "Fizz", "Buzz", 86, "Fizz", 88, 89, "FizzBuzz", 91, 92, "Fizz", 94, "Buzz", "Fizz", 97, 98, "Fizz", "Buzz"]],
        ];
    }
}
