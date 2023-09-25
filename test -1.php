<!-- Task 1 -->
<?php
    $student = array(
        'name' => 'Alice',
        'age' => 22,
        'grade' => 'A'
    );

    echo $student['age'];
?>

<!-- Task 2 -->
<?php
    $student = array(
        'name' => 'Alice',
        'age' => 22,
        'grade' => 'A'
    );

    if (array_key_exists('grade', $student)) {
        echo "The 'grade' key exists in the array.";
    } else {
        echo "The 'grade' key does not exist in the array.";
    }
?>

<!-- Task 3 -->
<?php
    $numbers = array(100, 200, 50, 40, 50);

    foreach ($numbers as $number) {
        echo $number . " ";
    }
?>

<!-- Task 4 -->
<?php
    $names = array(
        'Talha', 
        'Afnan', 
        'Mashrufa', 
        'Zia', 
        'Iqbal', 
        'Habib', 
        'Airin', 
        'Moni',
    );

    function filterM ($name) {
        return substr($name, 0, 1) === 'M';
    }

    $filteredNames = array_filter($names, 'filterM');

    foreach ($filteredNames as $filteredName) {
        echo $filteredName . " ";
    }
?>

<!-- Task 5 -->
<?php
    $string = 'Hello, World!';

    $reversed_string = strrev($string);

    echo $reversed_string;
?>