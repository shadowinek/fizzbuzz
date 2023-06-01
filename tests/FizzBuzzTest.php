<?php

namespace Shadowinek\Fizzbuzz\Tests;

use PHPUnit\Framework\TestCase;
use Shadowinek\Fizzbuzz\FizzBuzz;

class FizzBuzzTest extends TestCase
{
    protected FizzBuzz $fizzBuzz;

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
        ];
    }
}
