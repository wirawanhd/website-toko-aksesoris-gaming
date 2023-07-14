<?php   

include 'layout/header.php';

//Mengambil id barang dari URL
$id_akun = (int)$_GET['id_akun'];
$akun = select("SELECT * FROM akun WHERE id_akun = $id_akun")[0];


if(isset($_POST['ubah'])){
    if (update_akun($_POST) > 0){
        echo "<script>
            alert('Data Barang Berhasil Diubah');
            document.location.href='register_admin.php';
            </script>";
    } else {
        echo "<script>
            alert('Data Barang Gagal Diubah');
            document.location.href='register_admin.php';
            </script>";
    }
}
?>

    <div class="container mt-5">
            <h1>Ubah Akun</h1>
            <hr>

            <form action = "" method = "post">
                <input type ="hidden" name="id_akun" value = "<?= $akun['id_akun'];?>">

            <div class="mb-3">
                <label for="nama" class="form-label">Nama akun</label>
                <input type="text" class="form-control" id="nama" name = "nama" value="<?= $akun['nama'];?> " placeholder=""
                required>
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">username</label>
                <input type="text" class="form-control" id="username" name = "username" value="<?= $akun['username'];?> " placeholder=""
                required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">password akun</label>
                <input type="text" class="form-control" id="password" name = "password"  value="<?= $akun['password'];?> " placeholder=""
                required>
            </div>
            <div class="mb-3">
                <label for="level" class="form-label">level akun</label>
                <input type="text" class="form-control" id="level" name = "level"  value="<?= $akun['level'];?> " placeholder=""
                required>
            </div>
            <button type = "submit" name = "ubah" class = "btn btn-primary" style = "float :right;">Ubah</button>
            </form>

    </div>
    