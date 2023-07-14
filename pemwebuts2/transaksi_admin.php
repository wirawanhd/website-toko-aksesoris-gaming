
<?php
session_start();
include 'layout/header.php';


$data_transaksi = select("SELECT * From transaksi");

?>
    <div class="container mt-5">
            <h1>Data Akun</h1>
            <hr>

            <a href = "tambah_akun.php" class="btn btn-primary mb-2">Tambah</a>
            
            <table id = "example" class="table table-bordered table-striped" >
                <thead>
                    <tr>
                        <th> No </th>
                        <th>Nama </th>
                        <th>username</th>
                        <th>password</th>
                        <th>level</th>
                        <th>Aksi</th>

                    </tr>
                </thead>

                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($data_transaksi as $transaksi) :?>
                    <tr>
                        <td> <?=  $no++; ?></td>
                        <td> <?=  $transaksi['nama_akun']; ?> </td>
                        <td> <?=  $transaksi['nama_barang']; ?></td>
                        <td> <?=  $transaksi['jumlah_barang']; ?></td>
                        <td> <?=  $transaksi['harga_barang']; ?></td>
                        <td width = "15%" class="text-center"> 
                        
                            <a href="hapus_transaksi.php?id_transaksi=<?= $transaksi['id_transaksi']; ?>" class ="btn btn-danger" onclick = "return confirm('Yakin ingin menghapus?');">hapus</a>    
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>    
            </table>
            <script>
                    $(document).ready(function () {
                    $('#example').DataTable();
                    });
            </script>
    </div>
<?php include 'layout/footer.php'; ?>
