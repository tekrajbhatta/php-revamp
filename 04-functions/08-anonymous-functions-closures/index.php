<?php

// anonymous function(lambda function) set to a variable
$sqaure = function ($number) {
    return $number * $number;
};

$result = $sqaure(5);

echo "The sqaure of 5 is: " . $result . "<br>";

// Closures
function createCounter() {
    $count = 0;

    $counter = function() use (&$count) { // to access the variable outside of the function scope use ampersand and variable name as(&$count)
       return ++$count;
    };

    return $counter;
}

$counter = createCounter();

echo $counter() . '<br>';
echo $counter() . '<br>';
echo $counter() . '<br>';
echo $counter() . '<br>';
echo $counter() . '<br>';