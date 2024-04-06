<?php

require_once '../../Connection/connection.php';


$stmt = $dbh->prepare("INSERT INTO users (nama, email, password) VALUES(?,?,?)");


$dbh->beginTransaction();

$stmt->execute( ['boboiboy', 'boboiboy@example.com', 'wkwkwkwk']);

$dbh->commit();

print $dbh->lastInsertId();