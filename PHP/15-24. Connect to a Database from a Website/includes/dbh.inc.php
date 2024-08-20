<?php 

$dsn = "mysql:host=localhost;dbname=mydatabase";
$dbusername = "root";
$dbpasswords = "";

try {
    $pdo = new PDO($dsn, $dbusername, $dbpasswords);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection Failed". $e->getMessage();
}