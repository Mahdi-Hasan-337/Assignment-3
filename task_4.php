<?php

function task_4($studentGrades, $key, $math, $english, $science){

    $math = gradeToLetter($studentGrades[$key][$math]);
    $english = gradeToLetter($studentGrades[$key][$english]);
    $science = gradeToLetter($studentGrades[$key][$science]);

    $rslt = ($math + $english + $science) / 3;
    
    $finalGrade = '';

    if ($math < 0.7 || $english < 0.7 || $science < 0.7) { /// If fails in a single subject then direct fail
        return 'F';
    } else {
        if ($rslt >= 3.85 && $rslt <= 4.0) {
            return 'A+';
        } elseif ($rslt >= 3.7 && $rslt < 3.85) {
            return 'A-';
        } elseif ($rslt >= 3.0 && $rslt < 3.7) {
            return 'A';
        } elseif ($rslt >= 2.7 && $rslt < 3.0) {
            return 'B+';
        } elseif ($rslt >= 2.3 && $rslt < 2.7) {
            return 'B';
        } elseif ($rslt >= 2.0 && $rslt < 2.3) {
            return 'B-';
        } elseif ($rslt >= 1.7 && $rslt < 2.0) {
            return 'C+';
        } elseif ($rslt >= 1.3 && $rslt < 1.7) {
            return 'C';
        } elseif ($rslt >= 1.0 && $rslt < 1.3) {
            return 'C-';
        } elseif ($rslt >= 0.7 && $rslt < 1.0) {
            return 'D+';
        } else {
            return 'F';
        }
    }
    return $finalGrade;
}


function gradeToLetter($grade) {
    switch ($grade) {
        case 'A+':
            return 4.0;
        case 'A':
            return 3.8;
        case 'A-':
            return 3.7;
        case 'B+':
            return 3.0;
        case 'B':
            return 2.7;
        case 'B-':
            return 2.3;
        case 'C+':
            return 2.0;
        case 'C':
            return 1.7;
        case 'C-':
            return 1.3;
        case 'D+':
            return 1.0;
        default:
            return 0.0;
    }
}

$studentGrades = array(
    'student1' => array(
        'Math' => 'A+', 
        'English' => 'A+', 
        'Science' => 'A+',
    ),
    'student2' => array(
        'Math' => 'A+', 
        'English' => 'C', 
        'Science' => 'B+',
    ),
    'student3' => array(
        'Math' => 'A+', 
        'English' => 'A+', 
        'Science' => 'F',
    ),
);

$student = readline('Enter the student name : ');

$final_rslt = task_4($studentGrades, $student, 'Math', 'English', 'Science');

echo $final_rslt;