<?php

/*
Names Challenge:
1. Take the array of names below and loop through them. The type of loop is up to you.
2. Within the loop, use a conditional statement to check if the first letter of the name is 'A'.
3. If the first letter is 'A', skip that name and continue to the next iteration.
4. If the first letter is not 'A', reverse the string.
5. Make all names lowercase before printing them.
*/

$names = ['Alex', 'Beth', 'Caroline', 'Dave', 'Elanor', 'Anna', 'Freddie', 'Adam'];

// Solution 1
foreach($names as $name) {

    // both of these results same
    // substr($name, 0, 1);
    // $name[0];

    if($name[0] == 'A') {
        // go to next name
        continue;
    } else {
        // reverse the name
        $name = strtolower(strrev($name));
        // print the reversed name in lowercase
        echo $name . '<br>';
    }
}

echo "<hr>";

// Solution 2
for($i = 0; $i < count($names); $i++) {
    $name = $names[$i];
    if(substr($name, 0, 1) == 'A') {
        continue;
    } else {
        $name = strtolower(strrev($name));
        echo $name . '<br>';
    }
}

echo "<hr>";

// Reverse the array
for($i = count($names) - 1; $i >= 0; $i--) {
    $name = $names[$i];
    if(substr($name, 0, 1) == 'A') {
        continue;
    } else {
        $name = strtolower(strrev($name));
        echo $name . '<br>';
    }
}

echo "<hr>";