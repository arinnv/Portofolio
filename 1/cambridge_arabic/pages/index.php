<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>
</head> -->

<!-- <body> -->
    <div class="container-index-adm">
        <div class="article-adm">
            <h2 style="text-align: center;">CRUD DATA SISWA</h2>
            <br/>
            <a href="indexAdmin.php?page=pendaftaran">+ TAMBAH SISWA</a><br>
            <a href="cetak.php">-> CETAK</a>
            <br/>
            <br/>
            <table class="table-data" >
                <tr>
                    <th>NO</th>
                    <th>Nama Siswa</th>
                    <th>No Telp</th>
                    <th>Alamat</th>
                    <th>OPSI</th>
                </tr>
                <?php
                    include 'koneksi.php';
                    $no = 1;
                    $data = mysqli_query($koneksi,"select * from siswa");
                    
                    // apakah ini fungsi utk membaca isi array?
                    while($d = mysqli_fetch_array($data)){
                ?>
                    <tr>
                        <td>
                            <?php echo $no++; ?>
                        </td>
                        <td>
                            <!-- apakah semua varibel d dimasukkan  dalam 1 array -->
                            <?php echo $d['namaSiswa']; ?>
                        </td>
                        <td>
                            <?php echo $d['noTelp']; ?>
                        </td>
                        <td>
                            <?php echo $d['alamat']; ?>
                        </td>
                        <td>
                            <a href="edit.php?id=<?php echo $d['id']; ?> ">EDIT</a>
                            <a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
                        </td>
                    </tr>
                    <?php
                        }
                    ?>
            </table> 
        </div>
    </div>
<!-- </body>
</html> -->