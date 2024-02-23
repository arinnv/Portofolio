<?php
    // koneksi database dari file koneksi
    include 'koneksi.php';

    // menangkap data yang di kirim dari form
    $id = $_POST['id'];
    $nama = $_POST['namaSiswa'];
    $noTelp = $_POST['noTelp'];
    $alamat = $_POST['alamat'];
    
    // update data ke database, ini akan memasukkan data baru ke database
    mysqli_query($koneksi,"update siswa set namaSiswa='$nama', 
        noTelp='$noTelp', 
        alamat='$alamat' 
        where id='$id'");
    
    // mengalihkan halaman kembali ke index.php
    header("location:indexAdmin.php");
?>