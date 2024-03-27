<?php

require_once '../Connection/connection.php';

echo 'Selamat Datang di Layanan Kami' . PHP_EOL;

// Create
function create($conn): void
{
    echo 'TAMBAH USER BARU' . PHP_EOL;
    echo 'Masukkan nama user: ';
    $nama = trim(fgets(STDIN)) . PHP_EOL;
    echo 'Masukkan email user: ';
    $email = trim(fgets(STDIN)) . PHP_EOL;

    $query = "INSERT INTO users (nama, email) VALUES (?, ?)";
    $statement = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($statement, "ss", $nama, $email);
    mysqli_stmt_execute($statement);

    echo "Berhasil Menambahkan User Baru";
}

// Read
function read($conn): void
{
    $query = mysqli_query($conn, "SELECT * FROM users");

    if (!$query) {
        echo "Error: " . mysqli_error($conn);
        exit();
    }

    if (mysqli_num_rows($query) == 0) {
        echo "Tidak ada users yang ditampilkan";
        exit();
    }

    while ($user = mysqli_fetch_assoc($query)) {
        echo "Nama: " . $user['nama'] . PHP_EOL;
        echo "Email: " . $user['email'] . PHP_EOL;
        echo " " . PHP_EOL;
    }
}

// Update
function update($conn): void
{
    echo "Pilih id user yang ingin diubah: ";
    $id = intval(trim(fgets(STDIN)));

    $checkUser = mysqli_query($conn, "SELECT * FROM users WHERE id = $id");

    if (mysqli_num_rows($checkUser) == 0) {
        echo "Data user dengan ID $id tidak dapat ditemukan";
        return;
    }

    echo "Masukkan nama baru: ";
    $nama = trim(fgets(STDIN));
    echo "Masukkan email baru: ";
    $email = trim(fgets(STDIN));

    $query = "UPDATE users SET nama = ?, email = ? WHERE id = ?";
    $statement = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($statement, "ssi", $nama, $email, $id);
    mysqli_stmt_execute($statement);

    echo "Berhasil memperbarui data user";
}

// Delete
function delete($conn){
    echo "Pilih id user yang akan di hapus: ";
    $id = intval(trim(fgets(STDIN)));
    $checkUser = mysqli_query($conn, "SELECT * FROM users WHERE id = $id");

    if(mysqli_num_rows($checkUser) == 0){
        echo "Tidak ada user dengan ID $id";
        return;
    }

    mysqli_query($conn, "DELETE FROM users WHERE id = $id");
    echo "Data user berhasil dihapus";
}


// create($conn);
// read($conn);
// update($conn);
// delete($conn);
