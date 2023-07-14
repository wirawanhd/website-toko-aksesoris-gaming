<?php   

include 'layout/headeruser.php';


if(isset($_POST['checkout'])){
    if (create_transaksi($_POST) > 0){
        echo "<script>
            alert('Data Barang Berhasil Ditambahkan');
            document.location.href='user.php';
            </script>";
    } else {
        echo "<script>
            alert('Data Barang Gagal Ditambahkan');
            document.location.href='user.php';
            </script>";
    }
}
//Mengambil id barang dari URL
$id_barang = (int)$_GET['id_barang'];
$barang = select("SELECT * FROM barang WHERE id_barang = $id_barang")[0];



?>

    <div class="container mt-5">
            <h1>CHECKOUT</h1>
            <hr>

            <form action = "" method = "post" enctype="multipart/form-data">

            <div class="mb-3">
                <label style="font-size: 20px;"for="nama" class="form-label">Nama akun</label>
                <input style="font-size: 20px;"type="text" class="form-control" id="nama_akun" name = "nama_akun" value=""placeholder=""
                required>

                <input type ="hidden" name="id_barang" value = "<?= $barang['id_barang'];?>">
                <input type ="hidden" name="gambarlama" value = "<?= $barang['gambar'];?>">

            <div class="mb-3">
            <label for="nama" class="form-label" style="font-size: 20px;">Nama Barang :</label>

                <span  style="font-size: 20px;" name="nama_barang" id="nama_barang"><?= $barang['nama']; ?></span>
                <input type="hidden" class="form-control" name="nama_barang" id="nama_barang" value="<?= $barang['nama'];?> " placeholder=""
                required>
                
            </div>
            <div class="mb-3">
                <label style="font-size: 20px;"for="Jumlah" class="form-label">Jumlah Barang</label>
                <input type="text" class="form-control" id="jumlah_barang" name = "jumlah_barang" value="" placeholder=""
                required>
            </div>
            <div class="mb-3">
                <label style="font-size: 20px;" for="Harga" class="form-label">Harga Barang : RP. </label>
                <span style="font-size: 20px;"  ><?= $barang['harga']; ?></span>
                <input type="hidden" class="form-control" name="harga_barang" id="harga_barang" value="<?= $barang['harga'];?> " placeholder=""
                required>
            </div>
            <div class="mb-3">
                </p>
                <img src="assets/img/<?=$barang['gambar'];?>" alt="gambar" width = "500px" srcset="">
            </div>
            <button type = "submit" name = "checkout" class = "btn btn-primary" style = "float :right;">CHECKOUT</button>   
              
            </form>

    </div>
    