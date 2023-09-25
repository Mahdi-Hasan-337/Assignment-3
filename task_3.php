<?php

function task_3($grades){
    rsort($grades);
    print_r($grades);
}

$grades = array(85, 92, 78, 88, 95);
task_3($grades);