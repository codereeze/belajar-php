<?php

// pre-increment => + 1 before execute
$pre_number = 0;
$pre_inc = ++$pre_number;

echo $pre_number . PHP_EOL; // 1
echo $pre_inc . PHP_EOL; // 1


// post-increment => + 1 after executed
$post_number = 0;
$post_inc = $post_number++;

echo $post_number . PHP_EOL; // 1
echo $post_inc . PHP_EOL; // 0




// pre-decrement => - 1 before execute
$pre_number = 2;
$pre_dec = --$pre_number;

echo $pre_number . PHP_EOL; // 1
echo $pre_dec . PHP_EOL; // 1


// post-decrement => - 1 after execute
$post_number = 2;
$post_dec = $post_number--;

echo $post_number . PHP_EOL; // 1
echo $post_dec . PHP_EOL; // 2

