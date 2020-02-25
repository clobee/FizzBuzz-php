<?php

declare(strict_types=1);

namespace php_exercices;

final class FizzBuzz
{
    public function process(
        int $number,
        int $fizzNumber = 3,
        int $buzzNumber = 5
    ) : string {
        $output = '';

        if ($number%$fizzNumber == 0) {
            $output .= 'Fizz';
        }

        if ($number%$buzzNumber == 0) {
            $output .= 'Buzz';
        }

        if ($output == '') {
            $output = "$number";
        }

        return $output;
    }
}
