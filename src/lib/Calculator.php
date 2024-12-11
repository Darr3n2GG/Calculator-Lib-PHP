<?php
class Calculator {
    public function add(float $a, float $b): float {
        return $a + $b;
    }

    public function subtract(float $a, float $b): float {
        return $a - $b;
    }

    public function multiply(float $a, float $b): float {
        return $a * $b;
    }

    public function divide(float $a, float $b): float {
        // Instead of throwing DivisionByZeroError, we return 0.
        if ($a == 0 || $b == 0) {
            return 0;
        }

        return $a / $b;
    }
}
