<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Laporan - Database Cambridge</title>
        <link rel="stylesheet" href="../styles/style.css">
    </head>
    
    <body>
        <h2>LAPORAN DATA SISWA</h2>
        <br/>

        <table class="table-data">
            <tr>
                <th>NO</th>
                <th>Nama Siswa</th>
                <th>No Telp</th>
                <th>Alamat</th>
                

            </tr>
            <?php 
                include 'koneksi.php';
                $no = 1;
                $data = mysqli_query($koneksi,"select * from siswa");
                while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['namaSiswa']; ?></td>
                <td><?php echo $d['noTelp']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
            </tr>
            <?php 
                }
            ?>
        </table>
        
        <script>
        window.print();
        </script>

    </body>
</html>
