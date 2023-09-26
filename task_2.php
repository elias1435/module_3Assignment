<?php
// Function to remove even numbers from an array
function removeEvenNumbers(&$numbers) {
    foreach ($numbers as $key => $value) {
        if ($value % 2 == 0) {
            unset($numbers[$key]);
        }
    }
}

// Create the array $numbers with numbers 1 to 10
$numbers = range(1, 10);

// Call the function to remove even numbers
removeEvenNumbers($numbers);

// Print the resulting array
print_r($numbers);

//The output will be:
Array
(
    [0] => 1
    [2] => 3
    [4] => 5
    [6] => 7
    [8] => 9
)


?>
