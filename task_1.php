<?php

function task_1($text, $search, $replace){
    $replaced = str_replace($search, $replace, $text);
    $lower = strtolower($replaced);
    echo $lower;
}

$text = "The quick brown fox jumps over the lazy dog.";
$search = "brown";
$replace = "red";

task_1($text, $search, $replace);