<?php

$add = fn ($a, $b) => $a + $b;

echo $add(1, 2);
echo '<br>';

$numbers = [1, 2, 3, 4, 5];

$sqauredNumbers = array_map(fn ($number) => $number *$number, $numbers);

var_dump($sqauredNumbers);