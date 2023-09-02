<!DOCTYPE html>
<html>
<head>
    <title>Időpont foglaló rendszer - ADMIN</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="stylesheet" href="../style.php" media="screen">
</head>
<body>
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="../users/index.php">Regisztráció</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <a class="navbar-brand" href="../admin/adminlogin_page.php">Admin felület</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
       </button>
      <a class="navbar-brand" href="../admin/admin.php">Foglalt időpontok</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
          <a class="navbar-brand" href="../appointments/dashboard.php">Időpont foglaló oldal</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
           </button>
          <a class="navbar-brand" href="../users/userlogin.php">Felhasználói bejelentkezés</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>
    
    <h2>Foglalások</h2>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "Lak0k0csi";
    $dbname = "appointment_system";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    
    $sql = "SELECT appointments.id, users.username, appointments.appointment_date, appointments.appointment_slot,appointments.service "
            . "FROM appointments INNER JOIN users ON appointments.user_id = users.id";
    $result = $conn->query($sql);
   echo "<table><tr><th>ID</th><th>Felhasználó</th><th>Dátum</th> <th>Időpont</th><th>Szolgáltatás</th><th>Időpont törlése</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row['id'] . "</td><td>" . $row['username'] . "</td><td>" . $row['appointment_date'] .
            "</td><td>". $row['appointment_slot'] ."</td><td>" .$row['service']."</td>";
    echo "<td><a href='../appointments/cancel_appointment.php?id=" . $row['id'] . "'>Törlés</a></td>";
    
}
echo "</table>";
    $conn->close();
    ?>
</body>
</html>