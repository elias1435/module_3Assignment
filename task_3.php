<?php
// Function to sort an array in descending order
function sortGradesDescending(&$grades) {
    rsort($grades);
}

// Create the array $grades with the specified values
$grades = [85, 92, 78, 88, 95];

// Call the function to sort the grades in descending order
sortGradesDescending($grades);

// Print the sorted grades as an array
print_r($grades);


//The output will be:
Array
(
    [0] => 95
    [1] => 92
    [2] => 88
    [3] => 85
    [4] => 78
)


?>
