<?php

ini_set('display_errors', 1);

// anonymous function(lambda function) set to a variable
$sqaure = function ($number) {
    return $number * $number;
};

$result = $sqaure(5);

echo "The sqaure of 5 is: " . $result . "<br>";

// Closures ==> Anonymous fxns are called Closures
function createCounter() {
    $count = 0;

    $counter = function() use (&$count) { // to access the variable outside of the function scope use ampersand and variable name as`(&$count)` with the `use` keyword
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

// Note:- There are two ways to access the global variable inside a fxn
// 1st way:- pass the global variable as a paramter to the fxn
// 2nd way:- use the  `use` keyword with ampersand and variable name as`(&$variableName)`

// Passing anonymous function as an argument to a fxn // We can't pass a normal function as a argument
function display($a_fun) {
    return $a_fun();
}

echo display( function() {
    echo '<br>';
    return "Passing anonymous function from a fxn";
});

// Return anonymous function from a fxn // Geekyshows YT channel

function display1() {
    return function() {
        echo '<br>';
        return "Returning anonymous function from a fxn";
    };
}

$disp1 = display1();
echo $disp1();

// Return anonymous function from a fxn with parameter // Geekyshows YT channel
function display2($str) {
    return function($abc) use (&$str) {
        echo '<br>';
        return "$str $abc Returning anonymous function from a fxn with parameter";
    };
}

$disp2 = display2("Hello ");
echo $disp2('ABC, ');