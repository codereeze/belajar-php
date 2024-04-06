<?php

require_once '../../Connection/connection.php';

$result = $dbh->exec("INSERT INTO users(nama) VALUES ('lucy')");
if ($result === false) {
    echo "Error occurred: ", $dbh->errorInfo()[2];
} else {
    echo "Number of rows affected: ", $result;
}