<!DOCTYPE html>
<html>
<head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
 <link rel="stylesheet" href="../style.php" media="screen">

    <title>Időpont foglaló rendszer - Regisztráció</title>
    <script>
        function validateForm() {
            var username = document.forms["registrationForm"]["username"].value;
            var email = document.forms["registrationForm"]["email"].value;
            var password = document.forms["registrationForm"]["password"].value;
            
            if (username === "" || email === "" || password === "") {
                alert("All fields must be filled out");
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
          <p class="mx-auto col-6 fs-3 fw-bold">
            Regisztráció időpont foglaláshoz</p>
       
          <p class="mx-auto col-8 fst-italic">
           Kérjük adja meg adatait, melynek segítségével időpontot tud foglalni hozzánk.
           Amennyiben már regisztrált nálunk, kérjük <a href="./userlogin.php">itt</a> jelentkezzen be.
            </p>
         </p>
    

    <form class="mx-auto col-8" name="registrationForm" action="register.php" method="post" onsubmit="return validateForm()">
        <div class=" d-flex justify-content-evenly">
            <div class="mx-auto mb-3 col-5">
                <label for="first_name" class="form-label">Keresztnév*</label>
                <input type="text" class="form-control" id="first_name" name="first_name" required>
              </div>
              <div class="mx-auto mb-3 col-5">
                <label for="last_name" class="form-label">Vezetéknév*</label>
                <input type="text" class="form-control" id="last_name" name="last_name" required>
              </div>
        </div>
       <div class="mx-auto mb-3">
                <label for="username" class="form-label">Felhasználó név</label>
                <input type="text" class="form-control" id="username" name="username" required>
              </div>
          <div class="mx-auto mb-3 ">
            <label for="InputEmail1" class="form-label">Email cím*</label>
            <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp"  name="email" required>
            <div id="emailHelp" class="form-text">Kérjük adjon meg egy érvényes e-mail címet.</div>
          </div>
       

        <div class="mx-auto mb-3 ">
          <label for="InputPassword" class="form-label">Jelszó</label>
          <input type="password" class="form-control" id="InputPassword" name="password" required>
   

        </div>
    
        <button type="submit" class="btn btn-primary">Regisztráció</button>
      </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>
