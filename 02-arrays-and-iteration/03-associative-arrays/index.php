<?php
$output = null;

$user = [
   'name' => 'John',
   'email' => 'john@gmail.com',
   'password' => '123456',
   'hobbies' => ['Tennis', 'Video Games']
];


// var_dump($user);

$output = $user['name'];
$output = $user['email'];
// $output = $user['name2'];

$output = $user['hobbies'][0];

$user['address'] = 'Downtown Street 3'; 

unset($user['address']);

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
            <h2 class="text-xl font-semibold my-4">
                <p>
                    <pre>
                        <?php var_dump($user) ?>
                    </pre>
                </p>
            </h2>
        </div>
    </div>
</body>

</html>