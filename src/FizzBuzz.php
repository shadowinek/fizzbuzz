<?php

namespace Shadowinek\FizzBuzz;

class FizzBuzz
{
    private array $output = [];

    public function execute(int $amount): void
    {
        for ($i=1;$i<=$amount;$i++) {
            $this->output[] = $this->getFizzBuzzValue($i);
        }
    }

    private function getFizzBuzzValue(int $value): int|string
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

    public function getOutput(): array
    {
        return $this->output;
    }
}
