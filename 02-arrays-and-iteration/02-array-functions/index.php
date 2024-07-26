<?php
$output = null;

$ids = [10, 22, 15, 45, 67, 33];
$users = ['user1', 'user3', 'user2', 'abc'];

// count function
$output = count($ids);

// sort
sort($ids); // doesn't return array just manipulate the existing array
sort($users);

// rsort // reverse sort
rsort($ids);
rsort($users);

// array_push
array_push($ids, 100); // push the array on the end as last element
array_push($users, 'user4');

// array_pop
array_pop($ids); // pop up the last element from array
array_pop($users);

// array_shift
array_shift($ids); // removes the first element from an array
array_shift($users);

array_unshift($ids, 200); // add the first element to an array
array_unshift($users, 'user4');

// array_slice
$ids2 = array_slice($ids, 2, 3); // slice(cut off) some portion of the array and creates a new array from that array
// var_dump($ids2);

// array_splice
array_splice($ids, 1, 1, 'New ID'); // return a slice from array and do something with it
array_splice($users, 0, 2, 'New User');

// array_sum
$output = 'Sum of IDs is: ' . array_sum($ids);

// array_search
$output = 'ABC user is at index: ' . array_search('abc', $users); // search an array for given value and returns the index of that value

// array_push
array_push($users, 'user3');

// var_dump(in_array('user3', $users));

// in_array
$output = 'User3 exits: ' . in_array('user3', $users); // search an array and returns 1(boolean) if that element is present

// explode 
// turns a string into an array
$tags = 'tech,code,program,write';
$tagsArr = explode(',', $tags);
// var_dump($tagsArr);

// implode
// turns an array in to string
$output = implode(' ', $users);
// $output = gettype($output);

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
            <h2 class="text-xl font-semibold my-4">IDs Array:</h2>
            <p>
                <pre>
                    <?php print_r($ids); ?>
                </pre>
            </p>
            <h2 class="text-xl font-semibold my-4">Users Array:</h2>
            <p>
                <pre>
                    <?php
                    print_r($users);
                    ?>
                </pre>
            </p>
        </div>
    </div>
</body>

</html>