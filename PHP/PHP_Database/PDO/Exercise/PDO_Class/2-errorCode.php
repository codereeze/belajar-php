<?php

require_once '../../Connection/connection.php';


$dbh->exec("INSERT INTO users (nama) VALUES ('lucy')");

echo "\nPDO::errorCode(): ", $dbh->errorCode();