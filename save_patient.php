<?php
include 'db_config.php'; // Ensure correct DB connection

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"] ?? '';
    $age = $_POST["age"] ?? '';
    $email = $_POST["email"] ?? '';
    $phone = $_POST["phone"] ?? '';

    if (empty($name) || empty($age) || empty($email) || empty($phone)) {
        die("Error: Missing form fields.");
    }

    // Insert or Update (so data persists after refresh)
    $sql = "INSERT INTO patients (name, age, email, phone) VALUES ('$name', '$age', '$email', '$phone')
            ON DUPLICATE KEY UPDATE name='$name', age='$age', email='$email', phone='$phone'";

    if ($conn->query($sql) === TRUE) {
        echo "Patient details saved successfully!";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
