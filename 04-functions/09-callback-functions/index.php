<?php

$numbers = [1, 2, 3, 4, 5, 6, 7];

$square = function ($number) {
    return $number * $number;
};

$sqauredNumbers = array_map($square, $numbers);

var_dump($sqauredNumbers);
echo '<br>';

function applyCallback($callback, $value) {
    return $callback($value);
}

$double = function($number) {
    return $number * 2;
};

$result = applyCallback($double, 5);

echo $result;