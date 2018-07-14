<?php

namespace App\Calculate;
use PHPUnit\Framework\Error\Error;
use PHPUnit\Runner\Exception;

/**
 * Class Factorial
 */
class Factorial
{
    /**
     * Исходное число
     * @var int
     */
    private $number;

    /**
     * Факториал числа
     * @var int
     */
    private $factorial;

    function __construct(int $number)
    {
        if($number < 0){
            throw new Exception('Number can\'t be below zero');
        }
        $this->number = $number;
    }

    /**
     * Устанавливаем факториал
     * @param int $factorial
     * @return int
     */
    public function setFactorial(int $factorial): int
    {
        return $this->factorial = $factorial;
    }

    /**
     * Извлекаем факториал
     * @return int
     */
    public function getFactorial(): int
    {
        return $this->factorial;
    }

    /**
     * Подсчет количесва нулей в конце факториала
     * @return int
     */
    public function calculateZero(): int
    {
        $res = -1;
        $tmp = 1;
        for($i = 1; $tmp >= 1; $i++){
            $res += $tmp;
            $tmp = $this->number / 5**$i;
        }

        return $res;
    }
}