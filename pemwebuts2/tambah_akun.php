<?php   

include 'config/app.php';


if(isset($_POST['register'])){
    if (create_akun($_POST) > 0){
        echo "<script>
            alert('Data Berhasil Ditambahkan');
            document.location.href='register_admin.php';
            </script>";
    } else {
        echo "<script>
            alert('Data Gagal Ditambahkan');
            document.location.href='register_admin.php';
            </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<!-- Bootstrap core CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <div class="container mt-5">
            <h1>REGISTER HERE!</h1>
            
            <hr>
            <form action = "" method = "post" enctype = "multipart/form-data">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name = "nama" placeholder=""
                required>
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name = "username" placeholder=""
                required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name = "password" placeholder=""
                required>
            </div>
            <div class="mb-3">
                <label for="level">Level</label>
                <select name="level" id="level" placeholder= "Pilih Level" class="form-select form-select-sm" aria-label=".form-select-sm example" required>
                    <option value="Admin">admin</option>
                    <option value="User">user</option>
                </select>
            </div>
            <button type = "submit" name = "register" class = "btn btn-primary" style = "float :right;">register</button>
            </form>

    </div>
</html>

    