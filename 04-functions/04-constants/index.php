<?php

// Method 1: defining constant 
define('APP_NAME', 'My App');
define('VERSION_NUMBER', '1.0.0');

echo APP_NAME;
echo '<br>';
echo VERSION_NUMBER;
echo '<br>';

// Method 1: defining constant 
const DB_NAME = 'mydb';
const DB_HOST = 'localhost';

echo DB_NAME, DB_HOST;
echo '<br>';
echo DB_NAME;
echo '<br>';
echo DB_HOST;
echo '<br>';
echo '<hr>';

function run() {
    echo APP_NAME;
    echo '<br>';
    echo DB_NAME, DB_HOST;
}

run();

// define('APP_NAME', 'My App2'); // can't define a constant again
