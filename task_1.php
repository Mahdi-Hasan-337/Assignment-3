<?php

function task_1($text){
    $replaced = str_replace("brown", "red", $text);
    $lower = strtolower($replaced);
    echo $lower;
}

$text = "The quick brown fox jumps over the lazy dog.";

task_1($text);