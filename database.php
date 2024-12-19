<?php
// Database configuration
$host = 'localhost';         // Hostname (usually 'localhost' for local development)
$dbname = 'cupcake_bliss';   // Name of your database
$username = 'root';          // Database username
$password = '';              // Database password (default is empty for XAMPP/MAMP)

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    // Set PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>