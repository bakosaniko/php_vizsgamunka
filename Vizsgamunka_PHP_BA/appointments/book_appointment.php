<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "Lak0k0csi";
$dbname = "appointment_system";

define("APPOINTMENT_SLOTS", ["8:00", "10:00", "12:00", "14:00", "16:00"]);
define("APPO_MIN", 1); // next day
define("APPO_MAX", 7); // next week

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user_id = $_SESSION['user_id'];
$service = $_POST['service'];
$appointment_date = $_POST['appointment_date'];
$appointment_slot = $_POST['appointment_slot'];

$query = "SELECT * FROM `appointments` WHERE `appointment_date`=? AND `appointment_slot`=?";
$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $appointment_date, $appointment_slot); 
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

if ($row) {
    echo "Sajnáljuk! A $appointment_date $appointment_slot időpont már foglalt.";
    print "<br>";
    print "<button><a href=./dashboard.php>Új időpont foglalása</a></button>";
    return false;
}

$sql = "INSERT INTO appointments (user_id, appointment_date, appointment_slot, service) "
        . "VALUES ('$user_id', '$appointment_date', '$appointment_slot', '$service')";

if ($conn->query($sql) === TRUE) {
    echo "Sikeres időpontfoglalás! Várjuk szeretettel $appointment_date-án $appointment_slot-kor a(z) $service-re.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
print "<br>";
print "<button><a href=./dashboard.php>Új időpont foglalása</a></button>";

$conn->close();
?>



