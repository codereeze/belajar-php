<?php
try {
    $dbh = new PDO("mysql:host=localhost;dbname=db_exercise", username: 'root', password: '');
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (\Exception $e) {
    die($e->getMessage());
}
