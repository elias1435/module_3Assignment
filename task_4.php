<?php
// Function to calculate and print the average grade for each student
function calculateAndPrintAverages($studentGrades) {
    foreach ($studentGrades as $student => $grades) {
        $total = array_sum($grades);
        $count = count($grades);
        $average = $total / $count;
        
        echo "Student $student Average Grade: $average\n";
    }
}

// Create the multidimensional array $studentGrades
$studentGrades = [
    'Student1' => ['Math' => 85, 'English' => 92, 'Science' => 78],
    'Student2' => ['Math' => 90, 'English' => 88, 'Science' => 95],
    'Student3' => ['Math' => 75, 'English' => 80, 'Science' => 92]
];

// Call the function to calculate and print the average grades
calculateAndPrintAverages($studentGrades);

// output
// Student Student1 Average Grade: 85
// Student Student2 Average Grade: 91
// Student Student3 Average Grade: 82.333333333333

?>
