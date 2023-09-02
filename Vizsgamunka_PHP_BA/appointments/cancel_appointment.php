<?php
$servername = "localhost";
$username = "root";
$password = "Lak0k0csi";
$dbname = "appointment_system";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$appointment_id = $_GET['id'];

// Időpont adatainak kinyerése az adatbázisból a törlés előtt
$sql = "SELECT appointments.id, appointments.appointment_date, appointments.appointment_slot, users.email FROM appointments "
        . "INNER JOIN users ON appointments.user_id = users.id WHERE appointments.id = $appointment_id";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    
    $appointment_date = $row['appointment_date'];
    $appointment_slot = $row['appointment_slot'];
    $user_email = $row['email'];
    
 // E-mail küldése a foglalás törléséről a felhasználónak
    $subject = "Időpont törlése";
    $message = "Az Ön időpontja $appointment_date, $appointment_slot törlésre került, "
            . "hamarosan egy kollégánk felveszi Önnel a kapcsolatot új időpont egyeztetése érdekében.";
    
    mail($user_email, $subject, $message);

    // Időpont törlése az adatbázisból
    $delete_sql = "DELETE FROM appointments WHERE id = $appointment_id";
    
    if ($conn->query($delete_sql) === TRUE) {
        echo "Az időpont törlése sikeres, melyről az alábbi e-mail címre értesítést küldött a rendszer: $user_email.";
    } else {
        echo "Error deleting appointment: " . $conn->error;
    }
} else {
    echo "Appointment not found.";
}

$conn->close();
?>
