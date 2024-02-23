<?php
    // menghubungkan dengan file koneksi, dimana ini
    // terhub. dengan database
    include 'koneksi.php';
    
    // mengambil id
    $id = $_GET['id'];

    // mengahapus data sesuai dengan id
    mysqli_query($koneksi,"DELETE FROM siswa WHERE id='$id'")or
    die(mysql_error());
    
    // mengarahkankan ke index jika sudah selesai
    header("location:indexAdmin.php?pesan=hapus");
?>