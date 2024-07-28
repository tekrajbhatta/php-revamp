<?php

/*
  Challenge 1: Sum of an array
  
  1. Create an array of numbers 
  2. Get the sum of all of the numbers combined and put into a variable.
  4. Get the amount of numbers in the array and put into a variable.
  5. Print out 'The sum of the {amount} numbers is: {sum} '. For example, if the array is [1, 2, 3, 4, 5], the output should be 'The sum of the 5 numbers is: 15'. 
*/
echo '<h3>Sum Of An Array</h3>';

$numbers = [10, 20, 30, 40, 50];
$amount = count($numbers);
$sum = array_sum($numbers);

echo "The sum of the " . $amount . " numbers is: " . $sum;

/*
  Challenge 2: Colors array

  1. Reverse the `$colors` array.
  2. Add 'purple' and 'orange' to the end of the array.
  3. Replace the second color with 'pink'
  4. Remove the last element of the array.

You should end up with the following array: ['yellow', 'pink', 'blue', 'red', 'purple']
*/

echo '<h3>Colors Array</h3>';

$colors = ['red', 'blue', 'green', 'yellow'];

$colors = array_reverse($colors);

$new_colors = ['purple', 'orange'];

// one way to add new colors
$colors = array_merge($colors, $new_colors);

// another way to add new colors
// array_push($colors, 'purple', 'orange');

// one way to replce the second color
// $colors[1] = 'pink';

// anotehr way to replce the second color
array_splice($colors, 1, 1, 'pink');

array_pop($colors);

echo "<pre>";
print_r($colors);

/*
  Challenge 3: Job listings array

  1. Create a multi-dimensional array of associative arrays of 3 job listings with the fields id, job_title, company, contact_email, and contact_phone. Also add an array field for skills. The skills array should be an array of strings with each skill a person has. For example, 'PHP', 'MySQL', 'JavaScript', 'HTML', 'CSS', etc.
  2. Create a new listing using the `array_push()` function. The new listing should have the same fields as the others.
  3. Print out the job_title of the second job listing in the array.
  4. Print out the first skill of the third job listing in the array.
*/

echo '<h3>Job Listings</h3>';


$jobs = [
  [
    'id' => '1', 
    'job_title' => 'Front End Developer', 
    'company' => 'E-corp Private Limited', 
    'contact_email' => 'info@ecorppvtltd.com', 
    'contact_phone' => '+1 6778934132',
    'skills' => ['HTML', 'CSS', 'JavaScript', 'ReactJS']
  ],
  [
    'id' => '2', 
    'job_title' => 'Back End Developer', 
    'company' => 'Hilamayan Private Limited', 
    'contact_email' => 'info@himalayanpvtltd.com', 
    'contact_phone' => '+41 5466432727',
    'skills' => ['PHP', 'Laravel', 'Javascript', 'NodeJS', 'API']
  ],
  [
    'id' => '3', 
    'job_title' => 'Full Stack Developer', 
    'company' => 'MyNepal Private Limited', 
    'contact_email' => 'info@emynepalpvtltd.com', 
    'contact_phone' => '+977 983689390890',
    'skills' => ['HTML', 'CSS', 'JavaScript', 'ReactJS', 'PHP', 'Laravel', 'Javascript', 'NodeJS', 'API', 'AWS']
  ]
];

array_push(
  $jobs,
  [
    'id' => '4',
    'job_title' => 'Cloud Solutions Developer',
    'company' => 'RedHat Private Limited',
    'contact_email' => 'info@redhatpvtltd.com', 
    'contact_phone' => '+91 06986232435',
    'skills' => ['AWS', 'Git', 'CI/CD', 'Python']
  ]
);

echo "<pre>";
print_r($jobs);

$second_job_listings_title = $jobs[2]['job_title'];
echo $second_job_listings_title;

echo "<br>";
echo $jobs[2]['skills'][1];
echo "<br>";