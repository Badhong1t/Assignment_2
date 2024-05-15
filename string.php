<?php

$strings = ["Hello","World","PHP","Programming"];

foreach ($strings as $string) {

    $vowelCount = preg_match_all("/[aeiou]/i", $string, $matches);//Here i used this function for check every character of each string to verify is being matched with vowel or not!

    $stringReverse = strrev($string);

    echo "Original String: {$string}, Vowel Count: {$vowelCount}, Reversed String: {$stringReverse}"."\n";

}