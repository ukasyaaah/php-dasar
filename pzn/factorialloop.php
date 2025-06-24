<?php

/// Daripada pake loop
function fl(int $nilai): int
{
    $total = 1;

    for ($i = 1; $i < $nilai; $i++) {
        $total *= $i;
    }

    return $total;
}

echo fl(6);
echo "\n";
echo 1 * 2 * 3;
echo "\n";

/// Pake Factorial Recursive
function factorialRecursive(int $value): int
{
    if ($value == 1) {
        return 1;
    } else {
        return $value * factorialRecursive($value - 1);
    }
}

var_dump(factorialRecursive(5));

/// Error StackOverFlow
function loop($value)
{
    if ($value == 0) {
        echo "Selesai" . PHP_EOL;
    } else {
        echo "Loop ke $value" . PHP_EOL;
        loop($value - 1);
    }
}


