<?php

namespace Shadowinek\Fizzbuzz;

class FizzBuzz
{
    private array $output = [];

    public function execute(int $amount): void
    {
        for ($i=1;$i<=$amount;$i++) {
            $this->output[] = $this->getFizzBuzz($i);
        }
    }

    private function getFizzBuzz(int $value): int|string
    {
        $modulo_3 = $value % 3 === 0;
        $modulo_5 = $value % 5 === 0;

        if ($modulo_3 && $modulo_5) {
            return "FizzBuzz";
        } elseif ($modulo_3) {
            return "Fizz";
        } elseif ($modulo_5) {
            return "Buzz";
        } else {
            return $value;
        }
    }

    public function print(): void
    {
        echo implode(PHP_EOL, $this->output);
        echo PHP_EOL;
    }

    public function getOutput(): array
    {
        return $this->output;
    }
}
