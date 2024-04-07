<?php

require_once '../../Connection/connection.php';

$stmt = $dbh->prepare('INSERT INTO users (nama, email, password) VALUES (:nama, :email, :password)');

// Variabel PHP untuk nilai parameter
$nama = 'Jane Doe';
$email = 'jane@example.com';
$password = 'example';

// Mengikat value ke variabel PHP
$stmt->bindValue(':nama', $nama, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':password', $password, PDO::PARAM_STR);


// nilai yg diikat dengan bind value nilainya tetap sama seperti pertama di deklarasikan dan tidak akan berubah meskipun nilai variable sudah ditimpa nilai yg baru
// berbeda dengan bindParam yg mengikuti nilai variable paling baru
$nama = 'budi';
$email = 'budi@example.com';
$password = 'budiexample';

$stmt->execute();

echo "Data user telah ditambahkan.";