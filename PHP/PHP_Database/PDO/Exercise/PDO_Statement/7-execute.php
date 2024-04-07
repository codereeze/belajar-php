<?php

require_once '../../Connection/connection.php';

$stmt = $dbh->prepare('INSERT INTO users (nama, email, password) VALUES (:nama, :email, :password)');

// Variabel PHP untuk nilai parameter
$nama = 'John Test';
$email = 'test@example.com';
$password = 'testaja';

// Mengikat nilai ke parameter
$stmt->bindParam(':nama', $nama, PDO::PARAM_STR);
$stmt->bindParam(':email', $email, PDO::PARAM_STR);
$stmt->bindParam(':password', $password, PDO::PARAM_STR);

// Mengeksekusi pernyataan SQL
$stmt->execute();

echo "Data user telah ditambahkan.";