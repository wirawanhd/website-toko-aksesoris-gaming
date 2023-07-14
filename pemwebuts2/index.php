
<?php
session_start();
include 'layout/header.php';


$data_barang = select("SELECT * From barang");

?>
    <div class="container mt-5">
            <h1>Data Barang</h1>
            <hr>

            <a href = "tambah_barang.php" class="btn btn-primary mb-2">Tambah</a>
            
            <table id = "example" class="table table-bordered table-striped" >
                <thead>
                    <tr>
                        <th> No </th>
                        <th>Nama </th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>tanggal</th>
                        <th>gambar</th>
                        <th>Aksi</th>

                    </tr>
                </thead>

                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($data_barang as $barang) :?>
                    <tr>
                        <td> <?=  $no++; ?></td>
                        <td> <?=  $barang['nama']; ?> </td>
                        <td> <?=  $barang['jumlah']; ?></td>
                        <td>Rp. <?=  number_format($barang['harga'],0,',','.'); ?></td>
                        <td> <?=  date('d/m/Y | H:i:s', strtotime($barang['tanggal'])); ?></td>
                        <td> <img src="assets/img/<?=$barang['gambar'];?>" alt="gambar" width = "100px" srcset=""></td>
                        <td width = "15%" class="text-center"> 
                            <a href="ubah_barang.php?id_barang=<?= $barang['id_barang']; ?>" class ="btn btn-success">ubah</a>
                            <a href="hapus_barang.php?id_barang=<?= $barang['id_barang']; ?>" class ="btn btn-danger" onclick = "return confirm('Yakin ingin menghapus?');">hapus</a>    
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
