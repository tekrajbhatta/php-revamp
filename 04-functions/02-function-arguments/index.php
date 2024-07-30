<?php

// function with parameters
function add($a = 2, $b = 3) {
    return $a + $b;
}

echo add(5, 10);
echo '<br>';
echo add(5, 5);
echo '<br>';
echo add(1, 10);
echo '<br>';
echo add();
echo '<br>';

// Difference between parameters and arguments
// parameters = added when defining the function eg. $a, $b in above example
// arguments = added while calling the function eg. 5, 10 in above example

function sayHello($name = 'World') {
    return 'Hello '. $name;
}

echo sayHello();
echo '<br>';
echo sayHello('John');
echo '<br>';

// parameter as splat operator
function addAll(...$numbers) {
    $total = 0;
    foreach($numbers as $number) {
        $total += $number;
    }
    return $total;
}

echo addAll(1,2,3,4,5,6,7,8,9,10);
echo '<br>';
