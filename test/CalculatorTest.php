<?php

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Constraint\Callback;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase {
    public static function additionProvider(): array {
        return [
            'adding zeros'  => [0, 0, 0],
            'zero plus one' => [0, 1, 1],
            'one plus zero' => [1, 0, 1],
            'one plus one'  => [1, 1, 2],
            "point nine plus point one" => [0.9, 0.1, 1]
        ];
    }

    #[DataProvider("additionProvider")]
    public function testAdd(float $a, float $b, float $expected): void {
        $calculator = new Calculator;

        $actual = $calculator->add($a, $b);

        $this->assertEquals($expected, $actual, "Addition failed:");
    }

    public static function subtractionProvider(): array {
        return [
            "subtracting zeros" => [0, 0, 0],
            "one minus zero" => [1, 0, 1],
            "zero minus one" => [0, 1, -1],
            "two minus one" => [2, 1, 1],
            "one point one minus point one" => [1.1, 0.1, 1]
        ];
    }

    #[DataProvider("subtractionProvider")]
    public function testSubtract(float $a, float $b, float $expected): void {
        $calculator = new Calculator;

        $actual = $calculator->subtract($a, $b);

        $this->assertEquals($expected, $actual, "Subtraction failed:");
    }

    public static function multiplicationProvider(): array {
        return [
            "multiplying zeros" => [0, 0, 0],
            "one multiply by zero" => [1, 0, 0],
            "one multiply by one" => [1, 1, 1],
            "one multiply by minus one" => [1, -1, -1],
            "two multiply by one" => [2, 1, 2],
            "one multiply by point one" => [1, 0.1, 0.1]
        ];
    }

    #[DataProvider("multiplicationProvider")]
    public function testMultiply(float $a, float $b, float $expected) {
        $calculator = new Calculator;

        $actual = $calculator->multiply($a, $b);

        $this->assertEquals($expected, $actual, "Multiplication failed:");
    }

    public static function divisionProvider(): array {
        return [
            "dividing zeros" => [0, 0, 0],
            "one divided by zero" => [1, 0, 0],
            "one divided by one" => [1, 1, 1],
            "minus one divided by one" => [-1, 1, -1],
            "four divided by two" => [4, 2, 2],
            "one point five divided by three" => [1.5, 3, 0.5]
        ];
    }

    #[DataProvider("divisionProvider")]
    public function testDivide(float $a, float $b, float $expected): void {
        $calculator = new Calculator;

        $actual = $calculator->divide($a, $b);

        $this->assertEquals($expected, $actual, "Division failed:");
    }
}
