<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
require __DIR__ . '/../config.php'; // DB connection file

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $email = trim($_POST['email']);
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        $_SESSION['error'] = "All fields are required.";
        header("Location: /sign_in.php");
        exit();
    }

    // Select only existing columns
    $stmt = $conn->prepare("SELECT id, name, password_hash, role FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($id, $name, $hashedPassword, $role);

    if ($stmt->num_rows == 1) {
        $stmt->fetch();
        if (password_verify($password, $hashedPassword)) {
            $_SESSION['user_id'] = $id;
            $_SESSION['user_name'] = $name;
            $_SESSION['user_email'] = $email;
            $_SESSION['user_role'] = $role;
            header("Location: ../dashboard.php"); // Protected page
            exit();
        } else {
            $_SESSION['error'] = "Incorrect password.";
            header("Location: /sign_in.php");
            exit();
        }
    } else {
        $_SESSION['error'] = "Email not registered.";
        header("Location: /sign_in.php");
        exit();
    }

    $stmt->close();
    $conn->close();
} else {
    header("Location: /sign_in.php");
    exit();
}
?>
