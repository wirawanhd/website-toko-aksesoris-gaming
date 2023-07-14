
<?php
session_start();
include 'layout/header.php';


$data_akun = select("SELECT * From akun");

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
                    <?php foreach ($data_akun as $akun) :?>
                    <tr>
                        <td> <?=  $no++; ?></td>
                        <td> <?=  $akun['nama']; ?> </td>
                        <td> <?=  $akun['username']; ?></td>
                        <td> <?=  $akun['password']; ?></td>
                        <td> <?=  $akun['level']; ?></td>
                        <td width = "15%" class="text-center"> 
                            <a href="ubah_akun.php?id_akun=<?= $akun['id_akun']; ?>" class ="btn btn-success">ubah</a>
                            <a href="hapus_akun.php?id_akun=<?= $akun['id_akun']; ?>" class ="btn btn-danger" onclick = "return confirm('Yakin ingin menghapus?');">hapus</a>    
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
