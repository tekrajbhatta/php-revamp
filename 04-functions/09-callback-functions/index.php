<?php

// Callback fxn ==> are the functions which are sent as an argument to another fxn in string value
// First callback mehtod: Anonymous function as parameter to another function
$numbers = [1, 2, 3, 4, 5, 6, 7];

$square = function ($number) {
    return $number * $number;
};

$sqauredNumbers = array_map($square, $numbers);

var_dump($sqauredNumbers);
echo '<br>';

// Example of callback fxn
function applyCallback($callback, $value) {
    return $callback($value);
}

$double = function($number) {
    return $number * 2;
};

$result = applyCallback($double, 5);

echo $result;
echo '<br>';

// Another example of callback fxn

function my_callback($item) {
    return strlen($item);
}

$strings = ["Apple", "Banana", "Pineapple"];

$lengths = array_map("my_callback", $strings);

print_r($lengths);
echo "<br>";

// A simple callback function with parameters
function my_callback_function($name) {
    echo "Hello, $name!";
}

// A function that accepts a callback function and a parameter
function greet($callback, $name) {
    // Call the callback function with the parameter
    call_user_func($callback, $name);
}

// Passing 'my_callback_function' as a callback to the 'greet' function
greet('my_callback_function', 'John');

