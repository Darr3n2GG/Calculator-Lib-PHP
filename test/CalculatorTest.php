<?php

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase {
    #[DataProvider('additionProvider')]
    public function testAddSuccessful(float $a, float $b, float $expected): void {
        $calculator = new Calculator;

        $actual = $calculator->add($a, $b);

        $this->assertEquals($expected, $actual, "Addition failed.");
    }

    public static function additionProvider(): array {
        return [
            'adding zeros'  => [0, 0, 0],
            'zero plus one' => [0, 1, 1],
            'one plus zero' => [1, 0, 1],
            'one plus one'  => [1, 1, 2],
        ];
    }

    #[DataProvider('subtractionProvider')]
    public function testSubtract($a, $b, $expected): void {
        $calculator = new Calculator;

        $actual = $calculator->subtract($a, $b);

        $this->assertEquals($expected, $actual, "Subtraction failed.");
    }

    public static function subtractionProvider(): array {
        return [
            "subtracting zeros" => [0, 0, 0],
            "one minus zero" => [1, 0, 1],
            "zero minus one" => [0, 1, -1],
            "two minus one" => [2, 1, 1]
        ];
    }
}
