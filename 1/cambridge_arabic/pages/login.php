
<?php
        if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "gagal"){
                echo "Login gagal! username dan password salah!";
            } else if($_GET['pesan'] == "logout"){
                echo "Anda telah berhasil logout";
            } else if($_GET['pesan'] == "belum_login"){
            echo "Anda harus login untuk mengakses halaman admin";
            }
        }
    ?>

<div class="container-luar-login">
            <div class="login-judul">
                <h2>Login</h2>
            </div>

            <form class="form-login" method="post" action="pages/cek_login.php">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, officia.</p>

                <label for="Username">Username</label><br />
                <input type="text" name="username" id="username" placeholder="" /><br />
                <br />
                <label for="Pass">Password</label><br />
                <input type="password" name="password" id="pass" placeholder=""  /><br>
                <!-- <p>lupa <span><a href="#">password</a></span></p> -->
                <input type="submit" value="Login">
                <br><br>
                <a href="../index.php?page=home">kembali ke home</a>
                <!-- <p>Belum daftar, silahkan registrasi <span><a href="register.html">disini</a></span></p> -->

            </form>
        </div>