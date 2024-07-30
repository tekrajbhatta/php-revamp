<?php
declare(strict_types = 1);

ini_set('display_errors', 1);

function getSum(int $a, int $b): int {
    return $a + $b;
}

echo getSum(1, 2);

function greeting(string $name): void {
    echo 'Hello '. $name;
}

greeting('John');