<?php
// config.php
$host = 'localhost';
$db   = 'snavearmy'; // your database name
$user = 'root';      // your DB username
$pass = '$heQuan123';          // your DB password
$charset = 'utf8mb4';

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
