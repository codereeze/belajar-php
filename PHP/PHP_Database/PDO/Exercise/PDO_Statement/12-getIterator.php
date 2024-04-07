<?php

require_once '../../Connection/connection.php';

$stmt = $dbh->prepare('SELECT id, nama FROM users');

// Mengeksekusi pernyataan SQL
$stmt->execute();

// Mendapatkan iterator untuk menelusuri hasil setiap baris
$iterator = $stmt->getIterator();

// Melakukan perulangan foreach untuk mengambil setiap baris hasil kueri
foreach ($iterator as $row) {
    // Menampilkan data dari setiap baris
    echo "ID: " . $row['id'] . ", Nama: " . $row['nama'] . PHP_EOL;
}