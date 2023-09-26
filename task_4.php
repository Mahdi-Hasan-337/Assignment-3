<?php

$studentGrades = array(
    'student1' => array(
        'Math' => 'A+',
        'English' => 'A+',
        'Science' => 'A+',
    ),
    'student2' => array(
        'Math' => 'E',
        'English' => 'D',
        'Science' => 'D',
    ),
    'student3' => array(
        'Math' => 'A+',
        'English' => 'A+',
        'Science' => 'F',
    ),
);

task_5($studentGrades);

function task_5($studentGrades) {
    foreach ($studentGrades as $student => $grades) {
        $grade = calcGrade($grades);
        echo "$student : $grade" . PHP_EOL;
    }
}

function calcGrade($grades) {
    $subjectGrades = array_map('gradeToLetter', $grades);

    if (in_array(0.0, $subjectGrades)) {
        return 'F';
    }

    $rslt = array_sum($subjectGrades) / count($subjectGrades);

    $finalGrade = '';

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

    return $finalGrade;
}

function gradeToLetter($grade) { /// grade to point conversion
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