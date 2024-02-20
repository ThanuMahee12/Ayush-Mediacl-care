<?php
// Include the configuration file
require_once '../../config/db.php';

// Use the defined constants
$conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
?>