<?php

require_once '../../config/db.php';

// Use the defined constants
$connect = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
if ($connect ->connect_error) {
    // If connection fails, send error response
    http_response_code(500); // Internal Server Error
    echo json_encode(['error' => 'Database connection failed']);
    exit;
}
?>
