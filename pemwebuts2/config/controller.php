<?php

//Fungsi menampilkan data
function select($query)
{
    //Memanggil koneksi database
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}
//Fungsi menambahkan data barang
function create_barang($post)
{
    global $db;

    //$id_barang  = Strip_tags($post['id_barang']);
    $nama       = Strip_tags($post ['nama']);
    $jumlah     = Strip_tags($post ['jumlah']);
    $harga      = Strip_tags($post ['harga']);
    $gambar = upload_file();

    if (!$gambar) {
        return false;
    }

    //query tambah data
    $query = "INSERT INTO barang VALUES (null, '$nama', '$jumlah', '$harga',  CURRENT_TIMESTAMP(),'$gambar')";

    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

//Fungsi menambahkan transaksi data barang
function create_transaksi($post)
{
    global $db;

    //$id_barang  = Strip_tags($post['id_barang']);
    $nama_akun       = Strip_tags($post ['nama_akun']);
    $nama_barang     = Strip_tags($post ['nama_barang']);
    $jumlah_barang      = Strip_tags($post ['jumlah_barang']);
    $harga_barang     = Strip_tags($post ['harga_barang']);


    //query tambah data
    $query = "INSERT INTO transaksi VALUES (null, '$nama_akun', '$nama_barang', '$jumlah_barang ','$harga_barang')";

    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

function create_akun($post)
{
    global $db;

    //$id_akun  = Strip_tags($post['id_akun']);
    $nama     = ($post ["nama"]);
    $username     = ($post ["username"]);
    $password = ($post ["password"]);
    $level = ($post ["level"]);

    //query tambah data
    $query = "INSERT INTO akun VALUES ('', '$nama', '$username', '$password', '$level')";

    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

//fungsi mengubah data barang
function update_akun($post)
{
    global $db;

    $id_akun  = Strip_tags($post ['id_akun']);
    $nama       = Strip_tags($post ['nama']);
    $username     = Strip_tags($post ['username']);
    $password      = Strip_tags($post ['password']);
    $level      = Strip_tags($post ['level']);
    

    //query ubah data
    $query = "UPDATE akun SET nama = '$nama', username = '$username', password ='$password', level ='$level' WHERE id_akun = $id_akun";

    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}
function update_barang($post)
{
    global $db;

    $id_barang  = Strip_tags($post ['id_barang']);
    $nama       = Strip_tags($post ['nama']);
    $jumlah     = Strip_tags($post ['jumlah']);
    $harga      = Strip_tags($post ['harga']);
    $gambarlama = Strip_tags($post ['gambarlama']);

    //cek foto baru
    if ($_FILES['gambar']['error'] == 4) {
        $gambar = $gambarlama;
    } else {
        $gambar = upload_file();
    }
    

    //query ubah data
    $query = "UPDATE barang SET nama = '$nama', jumlah = '$jumlah', harga ='$harga', gambar ='$gambar' WHERE id_barang = $id_barang";

    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}
//fungsi menghapus data barang

function delete_barang($id_barang)
{
    global $db;

    //query hapus data barang
    $query = " DELETE FROM barang WHERE id_barang = $id_barang";
    mysqli_query($db, $query); 
    return mysqli_affected_rows($db);

}

function delete_transaksi($id_transaksi)
{
    global $db;

    //query hapus data barang
    $query = " DELETE FROM transaksi WHERE id_transaksi = $id_transaksi";
    mysqli_query($db, $query); 
    return mysqli_affected_rows($db);

}

function delete_akun($id_akun)
{
    global $db;

    //query hapus data barang
    $query = " DELETE FROM akun WHERE id_akun = $id_akun";
    mysqli_query($db, $query); 
    return mysqli_affected_rows($db);

}

function upload_file()
{
    $namafile   = $_FILES['gambar']['name'];
    $ukuranfile = $_FILES['gambar']['size'];
    $error      = $_FILES['gambar']['error'];
    $tmpname    = $_FILES['gambar']['tmp_name'];

    //check file 
    $extensifileValid = ['jpg','jpeg','png'];
    $extensifile      = explode('.', $namafile);
    $extensifile      = strtolower(end($extensifile));

    if(!in_array($extensifile, $extensifileValid)){
        echo "<script>
                alert('format tidak valid')
                document.location.href = 'tambah_barang.php';
                </script>";
        die();
    }

    if($ukuranfile > 2048000){
        echo "<script>
                alert('Ukuran Max 2mb')
                document.location.href = 'tambah_barang.php';
              </script>";
    }

    //generate nama baru
    $namafileBaru = uniqid();
    $namafileBaru .= '.';
    $namafileBaru .= $extensifile;

    
    move_uploaded_file($tmpname, 'assets/img/'. $namafileBaru);
    return $namafileBaru;
}