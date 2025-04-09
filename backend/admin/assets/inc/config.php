<?php
session_start();

require_once __DIR__ . '/../../../../vendor/autoload.php'; // Go up 4 levels from config.php

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../../../');
$dotenv->load();

$host = $_ENV['DB_HOST'];
$user = $_ENV['DB_USER'];
$pass = $_ENV['DB_PASS'];
$db   = $_ENV['DB_NAME'];

$mysqli = new mysqli($host, $user, $pass, $db);

// Optional: check connection
if ($mysqli->connect_error) {
    die("Database connection failed: " . $mysqli->connect_error);
}
?>
