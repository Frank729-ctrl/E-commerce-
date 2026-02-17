<?php
// Database connection
$host = "localhost";
$user = "root";
$password = "$heQuan123";
$dbname = "snavearmy";

$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle filters (optional)
$category = $_GET['category'] ?? '';
$min_price = $_GET['min_price'] ?? 0;
$max_price = $_GET['max_price'] ?? 999999;

// Base query
$sql = "SELECT title, category, price, badge, image FROM products WHERE 1=1";

if(!empty($category)) {
    $sql .= " AND category='$category'";
}

$sql .= " AND price BETWEEN $min_price AND $max_price";

// Fetch products
$result = $conn->query($sql);
$products = [];
if ($result && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $products[] = $row;
    }
}
$conn->close();
?>
