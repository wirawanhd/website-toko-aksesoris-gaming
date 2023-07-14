<?php   

include 'layout/header.php';

if(isset($_POST['tambah'])){
    if (create_barang($_POST) > 0){
        echo "<script>
            alert('Data Barang Berhasil Ditambahkan');
            document.location.href='index.php';
            </script>";
    } else {
        echo "<script>
            alert('Data Barang Gagal Ditambahkan');
            document.location.href='index.php';
            </script>";
    }
}
?>

    <div class="container mt-5">
            <h1>Tambah Barang</h1>
            <hr>

            <form action = "" method = "post" enctype = "multipart/form-data">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" id="nama" name = "nama" placeholder=""
                required>
            </div>
            <div class="mb-3">
                <label for="Jumlah" class="form-label">Jumlah Barang</label>
                <input type="number" class="form-control" id="jumlah" name = "jumlah" placeholder=""
                required>
            </div>
            <div class="mb-3">
                <label for="Harga" class="form-label">Harga Barang</label>
                <input type="text" class="form-control" id="harga" name = "harga" placeholder=""
                required>
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">gambar Barang</label>
                <input type="file" class="form-control" id="gambar" name = "gambar" placeholder=""
                required>
            </div>
         

            <button type = "submit" name = "tambah" class = "btn btn-primary" style = "float :right;">Tambah</button>
            </form>

    </div>
    