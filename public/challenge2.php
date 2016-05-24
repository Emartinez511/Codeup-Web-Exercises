<?php

$start = 2333;

for ($i = $start + 1; $i < 30000; ++$i) {
    if ($i == strrev($i)) {
        print "Palindrome = " . $i . "\n";
        break;
    }
}




// Palindrome. Given a number find the next smallest palindrome.


