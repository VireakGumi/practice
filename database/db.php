<?php
$host = 'localhost';
$dbname = 'user_login';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
} catch (PDOException $e) {
    die("Could not connect to the database: " . $e->getMessage());
}
?>