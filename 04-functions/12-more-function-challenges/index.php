<?php
/*
  Challenge 1: Fahrenheit to Celsius
  Create a function called `fahrenheitToCelsius` that takes a Fahrenheit temperature as an argument. Return the temperature converted to Celsius.

  The formula to convert Fahrenheit to Celsius is: Celsius = (Fahrenheit - 32) * 5/9
*/

// Easier Way
function fahrenheitToCelsius($tempFahrenheit) {
  return $tempFahrenheit . 'F = ' . (($tempFahrenheit - 32) * (5/9)) . '&deg;C';
}

echo fahrenheitToCelsius(98.6);
echo '<br>';

// Easier Way using arrow fxn
$fahToCel = fn ($tempFahrenheit) => $tempFahrenheit . 'F = ' . (($tempFahrenheit - 32) * (5/9)) . '&deg;C';

echo $fahToCel(98.6);
echo '<br>';

// Harder Way
$basTemp = 32;
$tempInF = function ($fTemp) use (&$basTemp) {
  return $fTemp . 'F = ' . (($fTemp - $basTemp) * (5/9)) . '&deg;C';
};

echo $tempInF(98.6);
echo '<br>';
echo '<br>';

/*
  Challenge 2: Print names in uppercase
  Create a function called `printNamesToUpperCase` that takes an array of names as an argument. The function should loop through the array and print each name to the screen in uppercase letters.
*/

// using normal function
$names = ['John', 'David', 'Josh', 'Maccurie', 'Jonas'];
function printNamesToUpperCase($names) {
  foreach($names as $name) {
    $name = strtoupper($name);
    echo $name . '<br>';
  }
}

printNamesToUpperCase($names);
echo '<br>';

// using array map menthod
function namesToUpper($name) {
  $name = strtoupper($name);
  echo $name . '<br>';
}

$printNames = array_map('namesToUpper' , $names);

$printNames();
echo '<br>';

/*
  Challenge 3: Find the longest word
  1. Create a function called `findLongestWord` that takes a sentence as an argument.
  2. The function should return the longest word in the sentence.
  3. The output should look like this:
*/

$sentence = 'A quick brown fox jumpssss over the lazzzy dog.';

function findLongestWord($sent) {
  
}

$longestWord = findLongestWord($sentence);
echo $longestWord;