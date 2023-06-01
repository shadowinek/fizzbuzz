<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Shadowinek\FizzBuzz\FizzBuzz;

class FizzBuzzValueTest extends TestCase
{
    private FizzBuzz $fizzBuzz;
    private \ReflectionMethod $method;

    public function setUp(): void
    {
        $this->fizzBuzz = new FizzBuzz();

        $reflection = new \ReflectionClass(FizzBuzz::class);
        $this->method = $reflection->getMethod('getFizzBuzzValue');
    }

    /**
     * @dataProvider dataProvider
     */
    public function testFizzBuzzValue(int $input, int|string $output) {
        $this->assertSame($this->method->invoke($this->fizzBuzz, $input), $output);
    }

    public static function dataProvider() {
        return [
            [1, 1],
            [2, 2],
            [3, "Fizz"],
            [4, 4],
            [5, "Buzz"],
            [6, "Fizz"],
            [10, "Buzz"],
            [15, "FizzBuzz"],
            [30, "FizzBuzz"],
            [50, "Buzz"],
            [100, "Buzz"],
        ];
    }
}
