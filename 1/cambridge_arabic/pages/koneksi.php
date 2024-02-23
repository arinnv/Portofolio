<?php
    // $koneksi = mysqli_connect("localhost","root","","cambridge");
    $koneksi = mysqli_connect("localhost","id20171688_usercambridge","ftY1[D@f]Ma?pk%1","id20171688_cambridge");
    
    // Check connection
    if (mysqli_connect_errno()){
        echo "Koneksi database gagal : " . mysqli_connect_error();
    }