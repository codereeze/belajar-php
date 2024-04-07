<?php

require_once '../../Connection/connection.php';

$stmt = $dbh->prepare('
    SELECT id, nama FROM users;
    SELECT id, no_struk FROM transactions;
');

// Mengeksekusi pernyataan SQL
$stmt->execute();

// Mengambil data dari result set pertama
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    // Menampilkan data dari setiap baris
    echo "User - ID: " . $row['id'] . ", Nama: " . $row['nama'] . PHP_EOL;
}

// Maju ke result set berikutnya
$stmt->nextRowSet();

// Mengambil data dari result set kedua
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    // Menampilkan data dari setiap baris
    echo "Transactions - ID: " . $row['id'] . ", No struk: " . $row['no_struk'] . PHP_EOL;
}