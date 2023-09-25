<?php

function task_2($numbers){
    return $numbers & 1;
}

$numbers = range(1, 10);

$filtered_array = array_filter($numbers, 'task_2');

print_r($filtered_array);