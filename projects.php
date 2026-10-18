<?php
// api/projects.php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=UTF-8');
header('Access-Control-Allow-Methods: GET'); // Hanya mengizinkan GET (baca data)

require_once '../config/database.php';

$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'GET') {
    $sql = "SELECT * FROM projects ORDER BY id DESC";
    $result = $conn->query($sql);
    
    $projects = [];
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $projects[] = $row;
        }
    }
    
    echo json_encode(['status' => 'success', 'data' => $projects]);
} else {
    http_response_code(405);
    echo json_encode(['status' => 'error', 'message' => 'Akses ditolak. Penambahan data harus melalui database internal.']);
}

$conn->close();
?>