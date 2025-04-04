<?php
include 'db_config.php';

$sql = "SELECT * FROM patients ORDER BY id DESC LIMIT 1"; // Fetch latest record
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo json_encode($result->fetch_assoc());
} else {
    echo json_encode(["name" => "", "age" => "", "email" => "", "phone" => ""]);
}

$conn->close();
?>
