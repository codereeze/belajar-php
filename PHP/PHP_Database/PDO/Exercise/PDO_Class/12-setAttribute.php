<?php

require_once '../../Connection/connection.php';

$dbh->setAttribute(PDO::ATTR_CASE, PDO::CASE_UPPER);

$sth = $dbh->prepare('SELECT * FROM users');
$sth->execute();

while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
    echo "Nama: " . $row['NAMA'] . PHP_EOL;
}