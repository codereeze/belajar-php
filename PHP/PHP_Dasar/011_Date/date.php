<?php

/**
 * this is string format for date method
 * 
 * l => day complete name. ex: Saturday
 * L => day with number. ex: 1
 * 
 * d => date with number. ex: 16
 * D => date name with day abbreviation. ex: Sat
 * 
 * F => month complete name. ex: March
 * m => month with number. ex: 03
 * M => month name with abbreviation. ex: Mar
 * 
 * y => year with 2 digit last number. ex: 24
 * Y => year with complete number. ex: 2024
 * 
 * H => hour. ex: 23
 * i => minute. ex: 05
 * s => secound. ex: 38
 * 
 */



// complete format
echo date('l, d F Y - H:i:s') . PHP_EOL;


// with timestamp
echo date('l, d F Y - H:i:s', strtotime('2024-01-01')) . PHP_EOL;


// with time zone
date_default_timezone_set('Asia/Jakarta');
echo date('l, d F Y - H:i:s') . PHP_EOL;
