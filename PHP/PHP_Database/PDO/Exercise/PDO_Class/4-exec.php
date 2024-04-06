<?php

require_once '../../Connection/connection.php';

$count = $dbh->exec("DELETE FROM transactions");

/* Mengembalikan angka row yang sudah di hapus */
print "Deleted $count rows.\n";
