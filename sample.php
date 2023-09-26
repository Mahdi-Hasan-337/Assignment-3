<?php

$studentGrades = array(
    'student1' => array('Math' => 90, 'English' => 32, 'Science' => 70),
    'student2' => array('Math' => 75, 'English' => 50, 'Science' => 60),
    'student3' => array('Math' => 80, 'English' => 96, 'Science' => 66),
);

function task_4($studentGrades, $studentname){
    $studentgrade = $studentGrades[$studentname];

    foreach($studentgrade as $student => $grades){
        if($grades <= 33) return "Fail";
    }

    $sum =  array_sum($studentgrade);
    $length = count($studentgrade);
    $average = $sum / $length;
    $grade = '';

    if ($average >= 80 && $average <= 100) {
        $grade = 'A+';
    } elseif ($average >= 70 && $average <= 79) {
        $grade = 'A';
    } elseif ($average >= 60 && $average <= 69) {
        $grade = 'A-';
    } elseif ($average >= 50 && $average <= 59) {
        $grade = 'B';
    } elseif ($average >= 40 && $average <= 49) {
        $grade = 'C';
    } elseif ($average >= 33 && $average <= 39) {
        $grade = 'D';
    } else {
        $grade = 'F';
    }
    if($average > 50){
        $grade = 'pass';
    }
    return $grade;
    
}

// task_4($studentGrades);

foreach($studentGrades as $student => $studentgrade){
    $final = task_4($studentGrades, $student);
    echo $student ." : " .$final . "\n";
    // $final
}