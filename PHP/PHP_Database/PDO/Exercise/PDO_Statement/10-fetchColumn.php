<?php

require_once '../../Connection/connection.php';

$sth = $dbh->prepare("SELECT nama, email FROM users");
$sth->execute();

print "Fetch the first column from the first row in the result set:\n";
$result = $sth->fetchColumn();
print "nama = $result\n";

print "Fetch the second column from the second row in the result set:\n";
$result = $sth->fetchColumn(1);
print "email = $result\n";