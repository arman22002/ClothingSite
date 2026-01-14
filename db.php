<?php
$conn = new mysqli("localhost", "root", "", "onlineshopdb");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
