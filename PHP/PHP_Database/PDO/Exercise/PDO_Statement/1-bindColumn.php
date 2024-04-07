<?php

require_once '../../Connection/connection.php';

$stmt = $dbh->prepare('SELECT id, nama FROM users WHERE id = :id');

// Mengikat kolom 'nama' ke variabel PHP
$stmt->bindColumn('nama', $nama);

// Mengeksekusi pernyataan SQL
$id = 2;
$stmt->execute([':id' => $id]);
$stmt->fetch(PDO::FETCH_BOUND);

echo "Nama user dengan ID $id adalah $nama";