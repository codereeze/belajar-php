<?php
// variable with dollar ($) symbol, this variable have behavior mutable
$name = 'John Doe';
$age = 30;

echo 'Hello, my name is ' . $name . ', and my age is ' . $age . ' years old' . PHP_EOL;


// variable constanta with define method, this variable have behavior immutable
define("NAME", 'Jane Doe');
define("JOB", "Software developer");

echo "My name is " . NAME . ", i'am a " . JOB . " in Google Indonesia";
