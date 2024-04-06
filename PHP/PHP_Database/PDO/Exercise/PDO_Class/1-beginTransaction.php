<?php

require_once '../../Connection/connection.php';

/**
 * rollback() digunakan untuk me-rollback jika ada kesalahan atau perubahan pada saat eksekusi kode sql
 * commit() digunakan untuk menetapkan perubahan
 * dengan syarat harus dimulai dengan method beginTransaction
 * note: beginTransaction hanya belaku pada operasi Insert, Update, dan Delete
 */


$dbh->beginTransaction();

try{
    $sth = $dbh->prepare("DELETE FROM users WHERE id = 1");
    $sth->execute();
    $dbh->commit();
}catch(\Exception $e){
    $dbh->rollBack();
    echo "Transaction dirollback: {$e->getMessage()}";
}