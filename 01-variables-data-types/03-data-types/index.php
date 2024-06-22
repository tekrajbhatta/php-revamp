<?php

/*
  PHP DATA TYPES:

- String
- Integer
- Float
- Boolean
- Array
- Object
- NULL
- Resource
*/

// string
$name1 = 'Saggy';
$name2 = "Tek Raj Bhatt";

var_dump($name1);
echo "<br />";
var_dump($name2);
echo "<br />";
echo gettype($name1);
echo "<br />";
echo gettype($name2);
echo "<br />";

// Integer
$age = 25;
var_dump($age);
echo "<br />";

// Float
$rating = 4.5;
echo($rating);
echo "<br />";

// Boolean
$isLoaded = true;
var_dump($isLoaded);
echo "<br />";

// Array
$friends = ['John', 'David', 'Saggy'];
var_dump($friends);
echo "<br />";

// Object
$person = new stdClass();
var_dump($person);
echo "<br />";

// Null
$car = null;
var_dump($car);
echo "<br />";

// Resource
$file = fopen('sample.txt', 'r');
var_dump($file);