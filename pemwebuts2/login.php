<?php

session_start();
include 'config/app.php';

//check tombol login ditekan
$data_akun = select("SELECT * From akun");


if (isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];


    $login = mysqli_query($db, "SELECT * FROM akun WHERE username='$username' and password='$password'");
    $cek = mysqli_num_rows($login);
    if($cek > 0){

    $data = mysqli_fetch_assoc($login);
        if ($data['level']=="admin"){
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "admin";
            header("location:index.php");
        } else if ($data['level']=="User") {
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "User";
            header("location:user.php");
        }        
    }
    else{

        echo "<script> alert ('login gagal ! username dan password tidak benar ');</script>";
        echo "<script> window.location = 'login.php';</script>";
    }
}
?>
<html lang="en">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Favicons -->
<link rel="icon" href="assets/img/T.svg">
    <!-- Custom styles for this template -->
    <link href="assets/css/signin.css" rel="stylesheet">
  </head>
  <body style="background-image: url('assets/img/wpp.jpg'); background-repeat: no-repeat; background-size: cover;"
  class="text-center">
  <main class="form-signin">
    <div class="card" style="background-color: #ffffff;">
      <div class="card-body">
        <form action="" method="POST">
          <img class="mb-4" src="assets/img/T.svg" alt="" width="72" height="57">
          <h1 class="h3 mb-3 fw-normal">Sign in here!</h1>

          <div class="form-floating">
            <input type="text" name="username" class="form-control" id="floatingInput" placeholder="Username"
              required>
            <label for="floatingInput">Username</label>
          </div>
          <div class="form-floating">
            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password"
              required>
            <label for="floatingPassword">Password</label>
          </div>
          <p style="color: dark" class="login-card-footer-text">Already have an account? <a href="register_user.php"
              class="text-reset">Register Account</a></p>
              <button class="w-100 btn btn-lg btn-dark" type="submit" name="login">Login</button>
        </form>
        </form>
      </div>
    </div>
  </main>
</body>


</html>