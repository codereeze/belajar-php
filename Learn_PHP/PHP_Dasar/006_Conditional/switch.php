<?php

/**
 * Switch statement only support equals comparison
 */

$grade = 'A';

switch ($grade) {
    case 'A':
        echo 'You graduated with honors';
        break;
    case 'B':
    case 'C':
        echo 'You graduated without honors';
        break;
    default:
        echo 'you did not graduate';
        break;
}
