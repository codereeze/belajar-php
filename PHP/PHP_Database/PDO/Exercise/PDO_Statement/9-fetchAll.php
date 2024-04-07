<?php

require_once '../../Connection/connection.php';

$sth = $dbh->prepare("SELECT nama, email FROM users");
$sth->execute();

/* Fetch all of the remaining rows in the result set */
print "Fetch all of the remaining rows in the result set:\n";
$result = $sth->fetchAll();
print_r($result);