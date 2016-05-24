<?php
$N = 4;
$power = ($N - 1);
$Number = pow(2, $N);
$Second = (pow(2, $power) - 1);
echo ($Number - $Second);

//  2^n - (2^(n-1) -1)