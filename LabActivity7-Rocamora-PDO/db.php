<?php
$host = 'localhost';
$db   = 'blog_site';
$user = 'root';
$pass = ''; // Adjust password as needed (e.g. '' for XAMPP or 'root' for MAMP)
$port = 3306;   // Adjust port as needed (e.g. 3306 or 8888)

$dsn = "mysql:host=$host;port=$port;dbname=$db;charset=utf8mb4";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    die("Database Connection Error: " . $e->getMessage());
}