<?php   

include 'config/app.php';


if(isset($_POST['register'])){
    if (create_akun($_POST) > 0){
        echo "<script>
            alert('Data Berhasil Ditambahkan');
            document.location.href='login.php';
            </script>";
    } else {
        echo "<script>
            alert('Data Gagal Ditambahkan');
            document.location.href='login.php';
            </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
        <!-- Favicons -->
<link rel="icon" href="assets/img/T.svg">
<!-- Bootstrap core CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <div class="container mt-5">
    <body style="background-image: url('assets/img/wpp.jpg'); background-repeat: no-repeat; background-size: cover;"
  >
  <main class="form-signin">
    <div class="card" style="background-color: #ffffff;">
      <div class="card-body">
        <h1 class="text-center">REGISTER HERE!</h1>
        <hr>
        <form action="" method="post" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="nama" class="form-label" style="text-align: left;">Nama</label>
            <input type="text" class="form-control form-control-sm" id="nama" name="nama" placeholder="" required>
          </div>
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control form-control-sm" id="username" name="username" placeholder=""
              required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control form-control-sm" id="password" name="password" placeholder=""
              required>
            <input type="hidden" value="User" class="form-control" id="level" name="level">
          </div>
          <button type="submit" name="register" class="btn btn-primary" style="float: right;">Register</button>
        </form>
      </div>
    </div>
  </main>
</body>



    </div>
</html>

    