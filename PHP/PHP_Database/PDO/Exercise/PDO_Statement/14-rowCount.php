<?php

require_once '../../Connection/connection.php';

$stmt = $dbh->prepare('DELETE FROM users WHERE id = :id');

// Mengikat nilai ke parameter
$id = 7;
$stmt->bindParam(':id', $id, PDO::PARAM_INT);

// Mengeksekusi pernyataan SQL
$stmt->execute();

// Mengambil jumlah baris yang terpengaruh oleh operasi DELETE
$affectedRows = $stmt->rowCount();

echo "Jumlah baris yang terpengaruh: " . $affectedRows;