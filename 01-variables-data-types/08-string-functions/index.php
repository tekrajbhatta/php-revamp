<?php
$output = null;
$string = "Hello World!";

// strlen
$output = strlen($string);

// str_word_count
$output = str_word_count($string);

// strpos(finds the position of a substring)
$output = strpos($string, 'World');

// get specififc character by index
$output = $string[6];

// substr(finds the character from one specific index to another, thrid param is the number of charaters to find)
$output = substr($string, 6, 5);

// str_replace
$output = str_replace('World', 'Universe', $string);

// strtolower
$output = strtolower($string);

// strtoupper
$output = strtoupper($string);

// ucwords(first letter of each word upper) 
$output = ucwords($string);

// trim
$output = trim('        Hello world       ');

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
      <p class="text-xl"><?= $output ?></p>
    </div>
  </div>
</body>

</html>