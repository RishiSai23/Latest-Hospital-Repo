<?php
$host = "localhost";
$user = "root";  // Default user for XAMPP
$password = "";  // Default password for XAMPP is empty
$database = "hospital_db";

$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
