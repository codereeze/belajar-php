<?php

// pow (pemangkatan)
$result = pow(10, 3);
echo $result . PHP_EOL; // 1000



// square root (akar kuadrat)
$a = 9;
echo sqrt($a) . PHP_EOL; // 3



// absolute (convert negative to positive)
$negative = -20;
echo abs($negative) . PHP_EOL; // 20



// get maximum and minimum number in array
$maximum = [10, 20, 30, 40, 50];
$minimum = [1, 100, 1000, 10000, 100000];

echo max($maximum) . PHP_EOL; // 50
echo min($minimum) . PHP_EOL; // 1



// rounding number
echo ceil(3.14) . PHP_EOL; // 4
echo floor(3.14) . PHP_EOL; // 3
echo round(3.14) . PHP_EOL; // 3
