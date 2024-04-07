<?php

require_once '../../Connection/connection.php';

$sth = $dbh->prepare("SELECT nama, email FROM users");
$sth->execute();

/* Exercise PDOStatement::fetch styles */
print "PDO::FETCH_ASSOC: ";
print "Return next row as an array indexed by column name\n";
$result = $sth->fetch(PDO::FETCH_ASSOC);
print_r($result);
print "\n";

print "PDO::FETCH_BOTH: ";
print "Return next row as an array indexed by both column name and number\n";
$result = $sth->fetch(PDO::FETCH_BOTH);
print_r($result);
print "\n";

print "PDO::FETCH_LAZY: ";
print "Return next row as a PDORow object with column names as properties\n";
$result = $sth->fetch(PDO::FETCH_LAZY);
print_r($result);
print "\n";

print "PDO::FETCH_OBJ: ";
print "Return next row as an anonymous object with column names as properties\n";
$result = $sth->fetch(PDO::FETCH_OBJ);
print $result->nama;
print "\n";