<?php
$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {

    $vowel = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];

    $count = 0;
    
    for ($i = 0; $i < strlen($string); $i++) {
        if (in_array($string[$i], $vowel)) {
            $count++;
        }
    }

    $rev = strrev($string);
    echo "Original String: $string, Vowel Count: $count, Reversed String: $rev\n";

}
