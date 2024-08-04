<?php
session_start();

// Define your admin credentials
$admin_email = 'admin@example.com';
$admin_password = 'password123'; // It's better to hash this password in a real application

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Verify credentials
    if ($email === $admin_email && $password === $admin_password) {
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;
        header("Location: admin_dashboard.php");
        exit;
    } else {
        echo "Invalid email or password.";
    }
}
?>