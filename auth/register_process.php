<?php
session_start();
require '../config.php'; // DB connection file

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = trim($_POST['name']); // <- use name, not username
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // Basic validation
    if (empty($name) || empty($email) || empty($password)) {
        $_SESSION['register_error'] = "All fields are required.";
        header("Location: ../index.php");
        exit();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['register_error'] = "Invalid email format.";
        header("Location: ../index.php");
        exit();
    }

    // Check if email already exists
    $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        $_SESSION['register_error'] = "Email already registered.";
        header("Location: ../index.php");
        exit();
    }
    $stmt->close();

    // Hash password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert user (role default to 'buyer')
    $stmt = $conn->prepare("INSERT INTO users (name, email, password_hash, role) VALUES (?, ?, ?, 'buyer')");
    $stmt->bind_param("sss", $name, $email, $hashedPassword);
    if ($stmt->execute()) {
        $_SESSION['register_success'] = "Registration successful. Please login.";
        header("Location: ../index.php");
    } else {
        $_SESSION['register_error'] = "Something went wrong. Try again.";
        header("Location: ../index.php");
    }
    $stmt->close();
    $conn->close();
} else {
    header("Location: ../index.php");
    exit();
}
?>
