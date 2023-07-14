
<?php
session_start();
include 'layout/headeruser.php';

//$akun = select("SELECT * FROM akun WHERE id_akun = $id_akun")[0];

$data_barang = select("SELECT * From barang");

?>

    <div class="container mt-5">
            <hr>          
            <table id = "usir" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th> No </th>
                        <th>Nama </th>
                        <th>Jumlah</th>
                        <th>Harga</th>
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
                        <td> <img src="assets/img/<?=$barang['gambar'];?>" alt="gambar" width = "100px" srcset=""></td>
                        <td width = "15%" class="text-center"> 
                            <a href="transaksi.php?id_barang=<?= $barang['id_barang']; ?>" class ="btn btn-dark" onclick = "return confirm('Yakin ingin membeli?');">Beli</a>    
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>    
            </table>

            <script>
                $(document).ready(function () {
                $('#usir').DataTable();
                    });
            </script>
    </div>
<?php include 'layout/footer.php'; ?>
