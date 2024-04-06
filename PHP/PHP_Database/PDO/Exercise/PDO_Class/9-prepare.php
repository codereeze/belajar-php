<?php

require_once '../../Connection/connection.php';

/**
 * method ini digunakan untuk mempersiapkan kode sql sebelum di eksekusi
 */

$sth = $dbh->prepare('SELECT * FROM users');
$sth->execute();

while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
    echo "Nama: " . $row['nama'] . PHP_EOL;
}