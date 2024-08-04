<?php

ini_set('display_errors', 1);

// Arrow functions are a more concise way to write anonymous functions.
// simple arrow function to add two numbers
$add = fn ($a, $b) => $a + $b;

echo $add(1, 2);
echo '<br>';

// use arrow function to square the each element of an array(Use with Arrays)
$numbers = [1, 2, 3, 4, 5];

$sqauredNumbers = array_map(fn ($number) => $number *$number, $numbers);

var_dump($sqauredNumbers);
echo '<br>';

// arrow function another simple example => Capturing Variables from the Outer Scope
$multiplier = 3;
$digits = [1, 2, 3, 4, 5];

$multiplied = array_map(fn($n) => $n * $multiplier, $digits); // can directly acccess outer scope variable where as in anounymous fxn we need to use `use` syntax

var_dump($multiplied);
echo '<br>';

// arrow function another simple example // uppercase the each fruits name
$fruits = ['first_fruit' => 'Apple','second_fruit' =>  'Banana','third_fruit' =>  'Carrot','fourth_fruit' =>  'Grapes','fifth_fruit' =>  'Blueberries'];

// uppercase the fruits name
$fruitsNameUpper = array_map(fn($fruitsUp) => strtoupper($fruitsUp), $fruits);

var_dump($fruitsNameUpper);
echo '<br>';
// var_dump($fruits);

// uppercase the fruits index using `array_change_key_case` fxn
$fruitsIndexUpper = array_map(fn($fruitsArr) => $fruitsArr, $fruits);
$fruitsIndexUpper = array_change_key_case($fruitsIndexUpper, CASE_UPPER);
var_dump($fruitsIndexUpper);
echo '<br>';

// // uppercase the fruits index using 
// $fruitsIndexUpper1 = array_map(fn(($fruitsInUp as $key => $value)) => strtoupper($key), $fruits);// array_map does not directly support passing both keys and values to the callback function
// solution is to use the foreach loop
$fruitsIndexUpper1 = array_map(fn($fruitsArr) => $fruitsArr, $fruits);
$fruitsIndexUpper2 = [];
foreach ($fruitsIndexUpper1 as $key => $value) {
    $upperKey = strtoupper($key);
    $fruitsIndexUpper2[$upperKey] = $value;
}
var_dump($fruitsIndexUpper2);
echo '<br>';
