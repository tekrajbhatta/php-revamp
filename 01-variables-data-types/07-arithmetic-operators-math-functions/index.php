<?php
/*
| Arithmetic Operators
| Operator | Description    |
| -------- | -------------- |
| `+`      | Addition       |
| `-`      | Subtraction    |
| `*`      | Multiplication |
| `/`      | Division       |
| `%`      | Modulus        |
*/

$output = null;
$num1 = 20;
$num2 = 10;

// Arithmetic Operators
$output = "$num1 + $num2 = " . $num1 + $num2;
$output = "$num1 - $num2 = " . $num1 - $num2;
$output = "$num1 * $num2 = " . $num1 * $num2;
$output = "$num1 / $num2 = " . $num1 / $num2;
$output = "$num1 % $num2 = " . $num1 % $num2;

// Assignment Operators
$num3 = 10;
// $num3 = $num3 + 20;
// $num3 += 20;
// $num3 -= 20;
$num3 /= 2;

// rand()
// $output = rand();
// $output = getrandmax();
$output = rand(1, 10);

// round()
$output = round(4.7);

// ceil()
$output = ceil(4.2);

// ceil()
$output = floor(4.7);

// sqrt()
$output = sqrt(64);

// pi()
$output = pi();

//abosolute()
$output = abs(-4.7);

// max()
// $output = max(1, 2, 3, 4, 5, 40);
// $output = max([1, 2, 23, 4, 5, 14 ]);

// min()
$output = min(1, 2, -3, 4, 5, 40);
$output = min([13, 32, 23, 44, 5, 14 ]);

//number_format()
$output = number_format(1234567.987654, 3, '.', ',');

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
    <p class="bg-white rounded-lg shadow-md p-6 mt-6 text-xl">
      <!-- Output -->
        <?= $output ?>
    </p>
  </div>
</body>

</html>