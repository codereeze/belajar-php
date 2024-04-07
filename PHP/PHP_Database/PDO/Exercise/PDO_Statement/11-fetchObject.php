<?php

require_once '../../Connection/connection.php';

$stmt = $dbh->prepare('SELECT id, nama FROM users');

// Mengeksekusi pernyataan SQL
$stmt->execute();

// Mengambil hasil setiap baris sebagai objek
while ($row = $stmt->fetchObject()) {
    // Menampilkan data dari setiap baris sebagai properti objek
    echo "ID: " . $row->id . ", Nama: " . $row->nama . PHP_EOL;
}
