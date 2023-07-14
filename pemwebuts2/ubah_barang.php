<?php   

include 'layout/header.php';

//Mengambil id barang dari URL
$id_barang = (int)$_GET['id_barang'];
$barang = select("SELECT * FROM barang WHERE id_barang = $id_barang")[0];






if(isset($_POST['ubah'])){
    if (update_barang($_POST) > 0){
        echo "<script>
            alert('Data Barang Berhasil Diubah');
            document.location.href='index.php';
            </script>";
    } else {
        echo "<script>
            alert('Data Barang Gagal Diubah');
            document.location.href='index.php';
            </script>";
    }
}
?>

    <div class="container mt-5">
            <h1>Ubah Barang</h1>
            <hr>

            <form action = "" method = "post" enctype="multipart/form-data">
                
                <input type ="hidden" name="id_barang" value = "<?= $barang['id_barang'];?>">
                <input type ="hidden" name="gambarlama" value = "<?= $barang['gambar'];?>">

            <div class="mb-3">
                <label for="nama" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" id="nama" name = "nama" value="<?= $barang['nama'];?> " placeholder=""
                required>
            </div>
            <div class="mb-3">
                <label for="Jumlah" class="form-label">Jumlah Barang</label>
                <input type="text" class="form-control" id="jumlah" name = "jumlah" value="<?= $barang['jumlah'];?> " placeholder=""
                required>
            </div>
            <div class="mb-3">
                <label for="Harga" class="form-label">Harga Barang</label>
                <input type="text" class="form-control" id="harga" name = "harga"  value="<?= $barang['harga'];?> " placeholder=""
                required>
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">gambar Barang</label>
                <input type="file" class="form-control" id="gambar" name = "gambar" placeholder="">
                <p>
                    <small>Gambar Sebelumnya</small>
                </p>
                <img src="assets/img/<?=$barang['gambar'];?>" alt="gambar" width = "100px" srcset="">
            </div>
            <button type = "submit" name = "ubah" class = "btn btn-primary" style = "float :right;">Ubah</button>
            </form>

    </div>
    