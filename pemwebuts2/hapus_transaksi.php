<?php

include 'config/app.php';

//memangil id barang dari URL
$id_transaksi = (int)$_GET['id_transaksi'];

if (delete_transaksi($id_transaksi) > 0){
    echo "<script>
        alert('Data akun Berhasil Dihapus');
        document.location.href='transaksi_admin.php';
        </script>";
} else {
    echo "<script>
        alert('Data akun Gagal Dihapus');
        document.location.href='transaksi_admin.php';
        </script>";
}
