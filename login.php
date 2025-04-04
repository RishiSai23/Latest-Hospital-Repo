<?php
$servername = "localhost";
$username = "root"; // Default username in XAMPP
$password = ""; // Default password is empty
$dbname = "medcare";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<?php



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = md5($_POST['password']); // Encrypt the password

    $stmt = $conn->prepare("SELECT * FROM user WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
		header("Location: dashboard.php");
    } else {
        echo "Invalid username or password.";
    }

    $stmt->close();
}

