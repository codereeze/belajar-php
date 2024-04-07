<?php

require_once '../../Connection/connection.php';

// belum fixxx
$id = 2;
$password = 'example';

$sth = $dbh->prepare('SELECT nama, email
    FROM users
    WHERE id < ? AND password = ?');
$sth->bindParam(1, $id, PDO::PARAM_INT);
$sth->bindValue(2, $password, PDO::PARAM_STR);
$sth->execute();

$sth->debugDumpParams();
