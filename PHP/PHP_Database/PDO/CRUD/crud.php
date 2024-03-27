<?php

require_once '../Connection/connection.php';

echo "Selamat Datang di Layanan Kami" . PHP_EOL;

// Create
function create($pdo): void
{
    echo "Masukkan nama Anda: ";
    $nama = trim(fgets(STDIN)) . PHP_EOL;

    echo "Masukkan email Anda: ";
    $email = trim(fgets(STDIN)) . PHP_EOL;

    $user = $pdo->prepare("INSERT INTO users (nama, email) VALUES (:nama, :email)");
    $user->execute(compact("nama", "email"));
    echo "User baru berhasil ditambahkan";
}


// Read
function read($pdo): void
{
    $getUsers = $pdo->query("SELECT * FROM users");
    $users = $getUsers->fetchAll(PDO::FETCH_ASSOC);
    if (!$users) {
        echo "Tidak ada user untuk ditampilkan";
        return;
    }

    foreach ($users as $user) {
        echo "Nama: " . $user['nama'];
        echo "Email: " . $user['email'] . PHP_EOL;
        echo " " . PHP_EOL;
    }
}


// Update
function update($pdo): void
{
    echo "Masukkan id user yang ingin di ubah: ";
    $id = intval(trim(fgets(STDIN)));
    $checkUser = $pdo->query("SELECT * FROM users WHERE id = $id")->fetch();
    if (!$checkUser) {
        die("Mohon maaf user tidak ada dalam database");
    }
    echo "Masukkan nama baru: ";
    $nama = trim(fgets(STDIN)) . PHP_EOL;
    echo "Masukkan email baru: ";
    $email = trim(fgets(STDIN)) . PHP_EOL;
    $user = $pdo->prepare("UPDATE users SET nama = :nama, email = :email WHERE id = :id");
    $user->execute(compact("id", "nama", "email"));
    echo "Data user berhasil diperbarui";
}


// Delete
function delete($pdo): void
{
    echo "Pilih id user yang ingin dihapus: ";
    $id = intval(trim(fgets(STDIN))) . PHP_EOL;
    $checkUser = $pdo->query("SELECT * FROM users WHERE id = $id")->fetch();
    if (!$checkUser) {
        die("Mohon maaf user tidak ada dalam database");
    }
    echo "Apakah Anda yakin ingin menghapus data tersebut [Ya/Tidak]: ";
    $answer = trim(fgets(STDIN));
    switch ($answer) {
        case "Ya":
            $pdo->query("DELETE FROM users WHERE id = $id");
            echo "Data user berhasil dihapus";
            break;
        case "Tidak":
            die("Penghapusan data user dibatalkan");
    }
}

// create($pdo);
// read($pdo);
// update($pdo);
// delete($pdo);