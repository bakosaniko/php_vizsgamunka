<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "Lak0k0csi";
$dbname = "appointment_system";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT id, username, password FROM admin WHERE username = '$username'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        header("Location: ./admin.php");
    } else {
        echo "Invalid password.";
    }
} else {
    echo "User not found.";
}
$conn->close();

?>
