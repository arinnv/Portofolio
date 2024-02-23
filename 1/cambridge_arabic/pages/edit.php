<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambridge arabic</title>
    <link rel="icon" type="image/x-icon" href="../assets/png/icons8-globe-64.png" />
    <link rel="stylesheet" href="../styles/style.css">
    <style>
        /* .hidden-menu {
            display: none;
        } */
    </style>
</head>

<body class="menu-utama">
    <div class="sidenav" id="mySidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="index.php?page=home">home</a>
        <a href="#">pendaftaran</a>
        <a href="index.php?page=about">about</a>
        <div id="navadm">
            <a href="index.php?page=login">admin</a>
        </div>
    </div>

    <!-- <div class="hidden-menu">
        <div class="sidenav" id="mySidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#">home</a>
            <a href="#">pendaftaran</a>
            <a href="#">about</a>
        </div>
        <div>
            <a href="">admin</a>
        </div>
    </div> -->

    <header>
        <nav class="navbar">
            <ul>
                <li>
                    <!-- <div class="navMenu 1"><img src="assets/png/three-dots.png" alt=""></div> -->
                    <div class="navMenu satu" onclick="openNav()"></div>
                    <!-- <a href="">
                    </a> -->
                </li>
                <li>
                    <!-- <div class="navMenu 2"><img src="assets/png/cambridge2.png" alt=""></div> -->
                    <div class="navMenu dua"></div>
                </li>
                <li>
                    <div class="navMenu tiga"></div>
                </li>
            </ul>
        </nav>
    </header>

    <main class="main-admin">
        
            <?php
                // page akan diisi sesuai input dari get
                //  kemudian memanggil file dengan switch
                // isset digunakan utk memeriksa isi dari get
                // apakah ada atau tidak
                // if( isset ($_GET['page'])){
                //     $page = $_GET['page'];
                    
                //     switch ($page) {
                //         case 'idxAdm':
                //             include "indexAdmin.php";
                //             break;
                //         case 'pendaftaran':
                //             include "tambah.php";
                //             break;
                //         case 'edit':
                //             include "edit.php";
                //             break;
                //         case 'hapus':
                //             include "hapus.php";
                //             break;
                //         default:
                //         // jika halaman tidak ada akan dijalankan
                //             echo "<div style='padding: 250px;'><center><h3>Maaf. Halaman tidak di temukan!</h3></center></div>";
                //         break;
                // }
                // // jika method get tidak ada maka akan menjalankan home
                // } else {
                //     include "index.php";
                // }
                
            ?>

    
        <div class="container-index-adm">
            <div class="article-adm">    
                <h2 style="text-align: center;">CRUD DATA SISWA</h2>
                <br/>
                <a href="indexAdmin.php">KEMBALI</a>
                <br/>
                <br/>
                <h3>EDIT DATA SISWA</h3>
                <?php
                    include 'koneksi.php';
                    $id = $_GET['id'];
                    $data = mysqli_query($koneksi, "select * from siswa where id='$id'");
                    while($d = mysqli_fetch_array($data)){
                ?>
                <form method="post" action="update.php">
                    <table>
                        <tr>
                            <td>Nama</td>
                            <td>
                                <input type="hidden" name="id" value="<?php echo $d['id'];?>">
                                <input type="text" name="namaSiswa" value="<?php echo $d['namaSiswa'];?>">
                            </td>
                        </tr>
                        <tr>
                            <td>No Telp</td>
                            <td>
                                <input type="text" name="noTelp" value="<?php echo $d['noTelp']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>
                                <input type="text" name="alamat" value="<?php echo $d['alamat']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" value="SIMPAN"></td>
                        </tr>
                    </table>
                </form>
                <?php
                    }
                ?>
            </div>
        </div>


        <div class="container-button-logout">
            <a href="logout.php" class="button-logout">LOGOUT</a>
        </div>


    </main>

    <footer>
        <div class="container-bawah satu">
            <div class="info" id="garis">
                <h3>Information</h3>
                <ul>
                    <li>
                        087xxx
                    </li>
                    <li>
                        jl. abcdefgh
                    </li>
                    <li>
                        kota abcdefgh
                    </li>
                </ul>

            </div>
            <div class="info">
                <h3>social media</h3>
                <div class="media-logo">
                    <a href="#wa">
                        <div class="social satu" id="wa"></div>
                    </a>
                    <a href="#ig">
                        <div class="social dua" id="ig"></div>
                    </a>
                    <a href="#twit">
                        <div class="social tiga" id="twit"></div>
                    </a>
                </div>
                
            </div>
        </div>
        <div class="container-bawah dua">
            <div id="logo-bawah">
                <!-- <img src="assets/png/cambridge2.png" alt=""> -->
            </div>
            <span>copyright 2023<sup>&copy;</sup> cambride</span>
        </div>
    </footer>

    <script src="js/fungsi.js"></script>
</body>

</html>