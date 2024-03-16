<?php 
    
$name = 'John Doe';
$school = 'University of Indonesia';

function person($name, $school): string{
    return 'Hello my name is ' . $name . ', I come from ' . $school;
}