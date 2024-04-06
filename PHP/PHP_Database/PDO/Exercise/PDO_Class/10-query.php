<?php

require_once '../../Connection/connection.php';

$sql = 'SELECT * FROM users';
foreach ($dbh->query($sql) as $row) {
    print $row['nama'] . "\t";
    print $row['email'] . "\t" . PHP_EOL;
}