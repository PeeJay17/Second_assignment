<?php

function calculate_grade($cgpa) {
    // Define the grade criteria
    $grade_criteria = [
        'A' => 4.0,
        'B+' => 3.5,
        'B' => 3.0,
        'C+' => 2.5,
        'C' => 2.0,
        'F' => 0.0
    ];

    // Iterate through the grade criteria to determine the corresponding letter grade
    foreach ($grade_criteria as $grade => $threshold) {
        if ($cgpa >= $threshold) {
            return "CGPA: $cgpa, Grade: $grade";
        }
    }

    // If the CGPA does not meet any of the criteria, return Fail (F)
    return "CGPA: $cgpa, Grade: F";
}

// Example usage:
$cgpa = 3.8;
echo calculate_grade($cgpa);  // Output: CGPA: 3.8, Grade: B+

?>