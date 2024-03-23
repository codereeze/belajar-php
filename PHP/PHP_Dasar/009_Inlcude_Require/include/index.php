<?php
/**
 * if you use the include keyword and the module file does not exist, PHP will send you a warning message, and the code program will be executed.
 */

include 'module.php';

echo plus(10, 10) . PHP_EOL;
echo minus(100, 50) . PHP_EOL;