<?php

$favColor = 'red';
$secondFavColor = 'green';

// using ternary operator
// $color = isset($favColor) ? $favColor : 'blue';

// using null coaleascing operator
// $color = $favColor ?? 'blue';

// using ternary operator
// $color = isset($favColor) ? $favColor : (isset($secondFavColor) ? $secondFavColor : 'blue');

// using null coaleascing operator
$color = $favColor ?? $secondFavColor ?? 'blue';

echo $color;