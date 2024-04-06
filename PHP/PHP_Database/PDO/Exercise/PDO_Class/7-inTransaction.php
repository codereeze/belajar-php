<?php

require_once '../../Connection/connection.php';

/**
 * Method ini digunakan untuk mengecek apakah kita masih didalam transaction atau tidak
 */


// before beginTransaction
var_dump($dbh->inTransaction()) . PHP_EOL;

// after beginTransaction
$dbh->beginTransaction();
var_dump($dbh->inTransaction()) . PHP_EOL;

// after rollback or commit
// $dbh->commit();
$dbh->rollBack();
var_dump($dbh->inTransaction()) . PHP_EOL; 