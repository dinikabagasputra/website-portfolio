<?php
// config/database.php

$host = 'localhost';
$user = 'root';        // Sesuaikan dengan username database hosting/XAMPP kamu
$pass = '';            // Sesuaikan dengan password database kamu
$db_name = 'db_portfoliodnk';

$conn = new mysqli($host, $user, $pass, $db_name);

if ($conn->connect_error) {
    header('Content-Type: application/json');
    http_response_code(500);
    echo json_encode(['status' => 'error', 'message' => 'Koneksi database gagal: ' . $conn->connect_error]);
    exit();
}

$conn->set_charset("utf8mb4");
?>