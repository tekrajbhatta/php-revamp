<?php

$age = 15;

// // If statement
// if ($age >= 21 ) {
//     echo 'You are old enough to make a girlfriend.';
// }

// // If-Else
// if ($age >= 21 ) {
//     echo 'You are old enough to make a girlfriend.';
// } else {
//     echo 'you are not old enough to make a girlfriend';
// }

// // Nested if statement
// if ($age >= 21 ) {
//     echo 'You are old enough to make a girlfriend or vote.';
// } else {
//     if($age >= 18) {
//         echo 'You are old enough to vote but not old enough to make a girlfriend.';
//     } else {
//         echo 'You are NOT old enough to make a girlfriend or vote.';
//     }
// }

// If-Else-If
if ($age >= 21 ) {
    echo 'You are old enough to make a girlfriend or vote.';
} else if ($age >= 18) {
    echo 'You are old enough to vote but not old enough to make a girlfriend.';
} else {
    echo 'You are NOT old enough to make a girlfriend or vote.';
}
