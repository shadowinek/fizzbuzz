<?php

namespace Shadowinek\Fizzbuzz;

class FizzBuzz
{
    private array $output = [];

    public function execute(int $amount)
    {
        for ($i=1;$i<=$amount;$i++) {
            $this->output[] = $this->getFizzBuzz($i);
        }
    }

    private function getFizzBuzz(int $value)
    {
        return $value;
    }

    public function print()
    {
        echo implode(PHP_EOL, $this->output);
        echo PHP_EOL;
    }

    public function getOutput()
    {
        return $this->output;
    }
}
