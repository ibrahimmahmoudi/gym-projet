<?php

require_once('../vendor/autoload.php'); // Load Composer's autoloader

// Load environment variables from .env
$dotenv = Dotenv\Dotenv::createImmutable('../');
$dotenv->load();

$dbName = $_ENV['DB_NAME'];
$dbHost = $_ENV['DB_HOST'];
$dbUser = $_ENV['DB_USER'];
$dbPass = $_ENV['DB_PASS'];



try {
    $db = new PDO(
        "mysql:host=$dbHost;dbname=$dbName;charset=utf8",
        $dbUser,
        $dbPass
    );
} catch (PDOException $e) {
    echo 'Failed: ' . $e->getMessage();
}


