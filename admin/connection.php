<?php
$conn = new mysqli("127.0.0.1", "root", "buithuyngoc2003", "BTTH01_CSE485");
$connPDO = new PDO("mysql:host=127.0.0.1;dbname=BTTH01_CSE485", "root", "buithuyngoc2003");

// Check connection
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}
