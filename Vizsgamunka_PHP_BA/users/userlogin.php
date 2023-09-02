<!DOCTYPE html>
<html>
<head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
 <link rel="stylesheet" href="../style.php" media="screen">

    <title>Bejelentkezés</title>
    <script>
        function validateForm() {
            var username = document.forms["loginForm"]["username"].value;
            var password = document.forms["loginForm"]["password"].value;
            
            if (username === "" || password === "") {
                alert("Minden mezőt ki kell tölteni!");
                return false;
            }
        }
    </script>
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
            <p class="mx-auto col-6 fs-2 fw-bold">
              
          Üdvözöljuk holnapunkon!</p>
       
          <p class="mx-auto col-6 fst-italic">
            Amennyiben már regisztrált nálunk, kérjük adatai megadásával jelentkezzen be.
          Ha új felhasználó, kérem <a href="./register.php">itt</a> regisztráljon. </p>

    
            <form name="loginForm" action="login.php" method="post" onsubmit="return validateForm()" class="mx-auto col-6">
        <div class="mx-auto mb-3 ">
          <label for="username" class="form-label">Felhasználó név</label>
          <input type="text" class="form-control" id="username" name="username" required aria-describedby="usernameHelp">
          <div id="emailHelp" class="form-text">Kérjük adja meg a regisztrációkor megadott felhasználó nevét.</div>
        </div>
        <div class="mx-auto mb-3 ">
          <label for="InputPassword1" class="form-label">Jelszó</label>
          <input type="password" class="form-control" id="InputPassword1" name="password" required>
      

        </div>
    
        <button type="submit" class="btn btn-primary">Bejelentkezés</button>
        <input type="submit" value="Bejelentkezés">
      </form>
            


</body>
</html>
