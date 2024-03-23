<?php

/**
 * if you use the require keyword and the module file does not exist, PHP will stop the execution of the code.
 */

require 'module.php';

echo person($name, $school) . PHP_EOL;
echo person('Jane Doe', 'Telkom University');