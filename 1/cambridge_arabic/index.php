<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambridge arabic</title>
    <link rel="icon" type="image/x-icon" href="assets/png/icons8-globe-64.png" />
    <link rel="stylesheet" href="styles/style.css">
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
        <a href="index.php?page=pendaftaran">pendaftaran</a>
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

    <main class="main-home">
        
            <?php
                // page akan diisi sesuai input dari get
                //  kemudian memanggil file dengan switch
                // isset digunakan utk memeriksa isi dari get
                // apakah ada atau tidak
                if( isset ($_GET['page'])){
                    $page = $_GET['page'];
                    
                    switch ($page) {
                        case 'home':
                            include "pages/home.php";
                            break;
                        case 'pendaftaran':
                            include "pages/tambah.php";
                            break;
                        case 'about':
                            include "pages/about.php";
                            break;
                        case 'login':
                            include "pages/login.php";
                            break;
                        default:
                        // jika halaman tidak ada akan dijalankan
                            echo "<div style='padding: 250px;'><center><h3>Maaf. Halaman tidak di temukan!</h3></center></div>";
                        break;
                }
                // jika method get tidak ada maka akan menjalankan home
                } else {
                    include "pages/home.php";
                }
                
            ?>



        
        <!-- <div class="container-home">

            <article class="container-tengah satu">
                <div class="home-article satu">
                    <h2>selamat datang di cambridge arabic</h2>
                    <p>assalamualaikum semua </p>
                    <p>dengan semangat kami senantiasa mengembangkan karakter, kompetensi, dan akhlak yang berpedoman agama islam.</p>
                </div>
                <div class="home-gambar satu"></div>
            </article>

            <article class="container-tengah dua">
                <div class="home-gambar dua">
                    <div class="home-subgambar satu">
                    </div>
                    <div class="home-subgambar dua">
                    </div>
                </div>
                <div class="home-article dua">
                    <h2>pembelajaran berdasarkan <br>pada pengalaman</h2>
                    <br><br><br><br><br>
                    <h2>pendekatan yang menyuluruh</h2>
                    <ul>
                        <li>kurikulum berimbang <br>antara mata pelajaran akademik dan ukhrawl</li>
                    </ul>
                </div>
                <div class="home-gambar tiga">

                </div>
            </article>

            <article class="container-tengah tiga">
                <div class="home-article tiga">
                    <h2>mata pelajaran</h2>
                    <ul>
                        <li>bahasa inggris</li>
                        <li>bahasa arab</li>
                        <li>matematika</li>
                        <li>sains</li>
                        <li>ilmu agama islam</li>
                        <li>al-qur'an</li>
                    </ul>
                </div>
                <div class="home-subgambar tiga">

                </div>
                <div class="home-article empat">
                    <h2>pengembangan siswa</h2>
                    
                    <p>di sini, kami tidak hanya mengupayakan keunggulan akademik, tetapi kami juga menekankan akhlak, dan budi pekerti yang baik.</p>
                </div>
            </article>

            <article class="container-tengah empat">
                <div class="home-subgambar empat"></div>
                <div class="home-subgambar lima"></div>
                <div class="home-subgambar enam"></div>
                <div class="home-subgambar tujuh"></div>
                <div class="home-subgambar delapan"></div>
                <div class="home-subgambar sembilan"></div>
            </article>
        </div> -->

    

<!-- <br/>
        <br/>
        <form method="post" action="cek_login.php">
            <table>
                <tr>
                    <td>Username</td>
                    <td>:</td>
                    <td><input type="text" name="username" placeholder="Masukkan username"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type="password" name="password" placeholder="Masukkan password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="LOGIN"></td>
                </tr>
            </table>
        </form> -->



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
                <!-- <ul class="media-logo">
                    <li class="media">
                        <a href="">
                            <div class="social satu"></div>
                        </a>
                    </li>
                    <li class="media">
                        <a href="">
                            <div class="social dua"></div>
                        </a>
                    </li>
                    <li class="media">
                        <a href="">
                            <div class="social tiga"></div>
                        </a>
                    </li> -->
                <!-- <li><img src="" alt="">twitter</li>
                    <li><img src="" alt="">instagram</li>
                    <li><img src="" alt="">whatsap</li> -->
                </ul>
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