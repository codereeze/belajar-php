<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=db_exercise", username: 'root', password: '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (\Exception $e) {
    die($e->getMessage());
}
