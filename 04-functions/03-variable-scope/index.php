<?php

ini_set('display_errors', 1);
// Global scope
$name = 'Alice';

function sayHello() {

    global $name; // to use global variable in local scope, define it as 'global' inside the function
    // Local scope
    $name = 'Bob';
    echo 'Hello ' . $name;
}

echo $name;
echo '<br>';
sayHello();
echo '<br>';
echo $name; // outputs 'Bob' because the global $name has been modified to 'Bob' within the sayHello() function
echo '<br>';

function sayGoodbye() {
    global $names; 
    $names = ['Jack', 'Jill'];
    echo 'Goodbye ' . $names[0];
}

// echo $names[0]; // It will cause the error bcoz the value is not assigned until function call
sayGoodbye();
echo '<br>';
echo $names[0];
