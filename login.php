<?php
session_start();

// Dummy credentials (later replace with database)
$correct_username = "admin";
$correct_password = "12345";

$username = $_POST['username'];
$password = $_POST['password'];

if ($username === $correct_username && $password === $correct_password) {
    $_SESSION['username'] = $username;
    echo "<h2>Login Successful! Welcome to Shirt & Pant Store 🛍️</h2>";
} else {
    echo "<h2>Invalid username or password ❌</h2>";
}
?>
