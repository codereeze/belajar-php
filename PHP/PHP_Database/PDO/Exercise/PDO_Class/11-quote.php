<?php

require_once '../../Connection/connection.php';

$string = 'Nice';
print "Unquoted string: $string\n";
print "Quoted string: " . $dbh->quote($string) . "\n";