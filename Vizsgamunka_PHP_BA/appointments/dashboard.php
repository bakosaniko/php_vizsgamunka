<!DOCTYPE html>

<html>
<head>
    <title>Időpont foglalási oldal</title>
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
            <a class="navbar-brand" href="../users/userlogin.php">Felhasználói bejelentkezés</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>
    

 <!--Felhasználónévvel üdvözlés, a bejelentkezési adatokból szedve-->  
    <h1>Üdvözöljük, <?php session_start();
    echo $_SESSION['username']; ?></h1>
    
</body>
</html>

<?php
// Adatbázis betöltése
$servername = "localhost";
$username = "root";
$password = "Lak0k0csi";
$dbname = "appointment_system";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Foglalt időpontok betöltése
$booked = array();
$sql = "SELECT appointment_date, appointment_slot FROM appointments";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $date = $row['appointment_date'];
        $slot = $row['appointment_slot'];
        
// Nested array-be tárolva az időpontok, mivel 2 tömbből állnak össze
        if (!isset($booked[$date])) {
            $booked[$date] = array();
        }
        $booked[$date][$slot] = true;
    }
}
$conn->close();

// Időpontok betöltése

require "idopontok.php";
$start = strtotime("+".APPO_MIN." day");
$end = strtotime("+".APPO_MAX." day");
//?>

<!-- Naptár, táblázat az időpont kiválasztásához -->
<h2>Kérjük, válassza ki a foglalni kívánt időpontot</h2>
  <form action="book_appointment.php" method="post">
<table>
    <thead>
        <tr>
            <th>Dátum</th>
            <?php foreach ($APPO_SLOTS as $slot) { ?>
                <th><?php echo $slot; ?></th>
            <?php } ?>
        </tr>
    </thead>
    <tbody >
        <?php
        for ($unix = $start; $unix <= $end; $unix += 86400) {
            $thisDate = date("Y-m-d", $unix);
            echo "<tr><th>$thisDate</th>";
            foreach ($APPO_SLOTS as $slot) {
    if (isset($booked[$thisDate][$slot])) {
        echo "<td class='booked'>Foglalt</td>";
    } else {
        echo "<td onclick=\"select(this, '$thisDate', '$slot')\"></td>";
    }
}
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

      <hr>
<!-- Időpont lefoglalása-->
<h2>Megerősítés</h2>
<form id="confirm" method="post" action="book_appointment.php">
          <label for="service">Válassza ki, az igénybevenni kívánt szolgáltatást:</label>
     <select id="service" name="service">
        <option value="Helyszíni konzultáció">Helyszíni konzultáció</option>
        <option value="Online konzultáció">Online konzultáció</option>
        <option value="Kerttervezés">Kerttervezés</option>
        <option value="Egyéb tanácsadás">Egyéb tanácsadás</option>
    </select>
          <br>
  <input type="hidden" name="user" value="1">
  <input type="text" id="appointment_date" name="appointment_date" readonly placeholder="Kérem, kattintson egy időpontra!">
  <input type="text" id="appointment_slot" name="appointment_slot" readonly>
  <input type="submit" id="reserve" value="Lefoglalom!">
</form>


  <script>
        function select(cell, date, slot) {
            // (A) UPDATE SELECTED CELL
            let last = document.querySelector("#select .selected");
            if (last != null) { last.classList.remove("selected"); }
            cell.classList.add("selected");

            // Megerősítés cellái
            document.getElementById("appointment_date").value = date;
            document.getElementById("appointment_slot").value = slot;
            document.getElementById("reserve").disabled = false;
        }
        
       
    </script>
