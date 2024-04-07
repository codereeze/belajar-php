<?php

require_once '../../Connection/connection.php';

$stmt = $dbh->prepare('SELECT id, nama FROM users');

// Mengeksekusi pernyataan SQL
$stmt->execute();

// Mengambil hasil setiap baris
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "ID: " . $row['id'] . ", Nama: " . $row['nama'] . PHP_EOL;
}

// Menutup kursor dan membersihkan sisa-sisa pernyataan
$stmt->closeCursor();

// Menyiapkan pernyataan SQL tambahan
$stmt = $dbh->prepare('SELECT COUNT(*) AS total FROM users');

// Mengeksekusi pernyataan SQL tambahan
$stmt->execute();

// Mengambil hasil pernyataan SQL tambahan
$row = $stmt->fetch(PDO::FETCH_ASSOC);
echo "Jumlah total pengguna: " . $row['total'];

// Menutup koneksi PDO
$dbh = null;