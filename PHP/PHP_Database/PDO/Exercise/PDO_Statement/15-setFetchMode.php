<?php

require_once '../../Connection/connection.php';

$stmt = $dbh->prepare('SELECT id, nama FROM users');

// Mengatur mode pengambilan data ke FETCH_ASSOC
$stmt->setFetchMode(PDO::FETCH_ASSOC);

// Mengeksekusi pernyataan SQL
$stmt->execute();

// Mengambil data dengan menggunakan metode fetch()
while ($row = $stmt->fetch()) {
    // Menampilkan data dari setiap baris
    echo "ID: " . $row['id'] . ", Nama: " . $row['nama'] . PHP_EOL;
}
