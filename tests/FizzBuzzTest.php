<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;

final class FizzBuzzTest extends TestCase
{
    /**
     * @dataProvider provideArrayData()
     */
    public function test_fizz_buzz_is_returned(
        int $key,
        string $value
    ) {
        $result = new php_exercices\FizzBuzz();

        assertEquals(
            $result->process($key),
            $value,
            "{$key} should return {$value}"
        );
    }

    public function provideArrayData() : array
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
