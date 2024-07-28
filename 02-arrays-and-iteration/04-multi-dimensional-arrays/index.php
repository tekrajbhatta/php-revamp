<?php

@ini_set('display_errors', 1);

$output = null;

$fruits = [
  ['Apple', 'Red'],
  ['Orange', 'Orange'],
  ['Banana', 'Yellow']
];

$output = $fruits[0][0];

$fruits[] = ['Grape', 'Purple'];

$users = [
  ['name' => 'John', 'email' => 'john@gmail.com', 'password' => '123456jphn'],
  ['name' => 'David', 'email' => 'david@gmail.com', 'password' => '123456david'],
  ['name' => 'Brad', 'email' => 'brad@gmail.com', 'password' => '123456Brad'],

];

$output = $users[1]['email'];

// add associative array as an element to array
$users[] = ['name' => 'New', 'email' => 'new@gmail.com', 'password' => '123456new'];

array_push($users, ['name' => 'Push', 'email' => 'push@gmail.com', 'password' => '123456piush']);

array_pop($users);

array_shift($users);

unset($users[0]);

$output = count($users);


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <!-- Output -->
      <p class="text-xl"><?= $output ?></p>

      <p class="text-xl"><?php 
      
      echo "<pre>";
      print_r($users);

      ?></p>

    </div>
  </div>
</body>

</html>