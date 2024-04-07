<?php

require_once '../../Connection/connection.php';

$sth = $dbh->prepare("SELECT nama, email FROM users");

$col_count = $sth->columnCount();

print "total column sebelum eksekusi: $col_count" . PHP_EOL;

$sth->execute();

$col_count = $sth->columnCount();

print "total column setelah eksekusi: $col_count" . PHP_EOL;