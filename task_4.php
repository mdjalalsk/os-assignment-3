<?php
function calculateAverageGrades($studentGrades) {
    foreach ($studentGrades as $student => $grades) {
        $average = array_sum($grades) / count($grades);
        echo "Average grade for student $student: $average" . PHP_EOL;
    }
}

$studentGrades = [
    'Student 1' => ['Math' => 90, 'English' => 88, 'Science' => 92],
    'Student 2' => ['Math' => 85, 'English' => 90, 'Science' => 87],
    'Student 3' => ['Math' => 78, 'English' => 85, 'Science' => 80]
];

calculateAverageGrades($studentGrades);