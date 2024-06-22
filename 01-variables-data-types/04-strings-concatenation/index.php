<?php 

$firstName = 'Saggy';
$lastName = 'Bhatta';
$fullName = $firstName . ' ' . $lastName;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Learn PHP From Scratch</title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">Learn PHP From Scratch</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6">
      <!-- Output -->
      <?php echo 'Hello my name is ' . $fullName . '<br />' . 'New line text' . '<br />'; ?>
      <?php echo "Hello my name is $fullName <br>"; ?>
      <?= 'Hello my name is \'Saggy\'' ?>
    </div>
  </div>
</body>

</html>