<?php
function manipulateString($text) {   
    $text = strtolower($text);
    $text = str_replace("brown", "red", $text);

    echo $text . PHP_EOL;
}
$text = "The quick brown fox jumps over the lazy dog.";
manipulateString($text);