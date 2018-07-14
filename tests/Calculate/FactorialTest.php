<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use App\Calculate\Factorial;

class FactorialTest extends TestCase
{
    public function testCheckTypeNum(): void
    {
        $this->expectException(\TypeError::class);
        $factorial = new Factorial('string');
        $factorial->setFactorial('invalid');
    }

    public function testCalculateZeroOne(): void
    {
        $factorial = new Factorial(1000);
        $this->assertEquals(
            249,
            $factorial->calculateZero()
        );
    }

    public function testCalculateZeroTwo(): void
    {
        $factorial = new Factorial(19);
        $this->assertEquals(
            3,
            $factorial->calculateZero()
        );
    }

    public function testCalculateZeroThree(): void
    {
        $factorial = new Factorial(10000);
        $this->assertEquals(
            2499,
            $factorial->calculateZero()
        );
    }

    public function testCalculateZeroLast(): void
    {
        $factorial = new Factorial(4);
        $this->assertEquals(
            0,
            $factorial->calculateZero()
        );
    }

    public function testCalculateZeroBig(): void
    {
        $factorial = new Factorial(200);
        $this->assertEquals(
            49,
            $factorial->calculateZero()
        );
    }
}