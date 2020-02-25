<?php

declare(strict_types=1);

namespace php_exercices_tests;

use PHPUnit\Framework\TestCase;
use php_exercices\FizzBuzz;

final class FizzBuzzTest extends TestCase
{
    /**
     * @dataProvider provide_array_data()
     */
    public function test_fizz_buzz_is_returned(
        int $key,
        string $value
    ) : void {
        $result = new FizzBuzz();

        $this->assertEquals(
            $result->process($key),
            $value,
            "{$key} should return {$value}"
        );
    }

    public function provide_array_data() : array
    {
        return [
            [ 0 , 'FizzBuzz'],
            [ 1 , '1'],
            [ 2 , '2'],
            [ 3 , 'Fizz'],
            [ 4 , '4'],
            [ 5 , 'Buzz'],
            [ 6 , 'Fizz'],
            [ 7 , '7'],
            [ 8 , '8'],
            [ 9 , 'Fizz'],
            [ 10 , 'Buzz'],
            [ 11 , '11'],
            [ 12 , 'Fizz'],
            [ 13 , '13'],
            [ 14 , '14'],
            [ 15 , 'FizzBuzz'],
            [ 16 , '16'],
            [ 17 , '17'],
            [ 18 , 'Fizz'],
            [ 19 , '19'],
            [ 20 , 'Buzz']
        ];
    }
}
