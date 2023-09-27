<?php
function sortGradesDescending($grades) {
    rsort($grades);
    print_r($grades);
    echo PHP_EOL;
}

$grades = [85, 92, 78, 88, 95];
sortGradesDescending($grades);