<?php 

$names = array('John', 'Jack', 'Jil');
$numbers = [1,2,3,4,5,6];

function inspect($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";    
}

inspect($names);
inspect($numbers);

echo $names[1];
echo "<br>";
echo $numbers[5];

// Add an element to array
$numbers[6] = 100;
$numbers[] = 101;
$numbers[] = 102;
$testnum = 123;
$numbers[] = $testnum;

// Add element to specific index
$numbers[3] = 200;

// Remove an element from array
unset($numbers[3]); // It removes the element with index from array

// To structure the values again in array format
$numbers = array_values($numbers);

inspect($numbers);