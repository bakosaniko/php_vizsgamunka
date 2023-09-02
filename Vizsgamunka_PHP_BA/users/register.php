<?php
$servername = "localhost";
$username = "root";
$password = "Lak0k0csi";
$dbname = "appointment_system";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

/** @var type $_POST */
$username = $_POST['username'];
$email = $_POST['email'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO users (username, first_name, last_name, email, password) VALUES ('$username','$first_name','$last_name', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Sikeres regisztráció!"
    . "Kérjük, a megadott adatokkal <a href=./userlogin.php>ezen az oldalon</a> jelentkezzen be időpont foglalásához.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
