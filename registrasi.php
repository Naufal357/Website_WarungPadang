<?php
require 'function.php';

if(isset($_POST ["register"] )){
    if(registrasi($_POST) > 0){
        echo    "<script>
                alert('User Baru Berhasil Ditambahkan. Silahkan kembali ke haman login');
                </script>";
    }else{
        echo mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Registrasi</title>
        <link rel="stylesheet" href="css/regis.css">
            <style>
               label{
                    display:block;
                }
            </style>
    </head>
    <body>

        <nav>
            <ul class="nav-flex-row">
                <li class="nav-item">
                    <a href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a href="Menu.html">Menu</a>
                </li>
                <li class="nav-item">
                    <a href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a href="shop.html">Shop</a>
                </li>
            </ul>
        </nav>

        <h1 class="tengah">Form Registrasi Akun</h1>

        <div class="konten">
        <div class="atas">
        <div class="grup">
            </div>

        <form action="" method="post">
            <div class="grup">
                <label for="username">Username : </label>
                <input type="text" name="username" id="username">
            </div>

            <div class="grup">
                <label for="email">Email : </label>
                <input type="text" name="email" id="email">
            </div>

            <div class="grup">
                <label for="NoTlpn">Nomor telepon : </label>
                <input type="text" name="NoTlpn" id="NoTlpn">
            </div>

            <div class="grup">
                <label for="password">Password : </label>
                <input type="password" name="password" id="password">
            </div>

            <div class="grup">
                <label for="password2">Konfirmasi password : </label>
                <input type="password" name="password2" id="password2">
            </div>
            <button type="submit" name="register">Register </button>
        </form>
        </div>
            <div class="bawah tengah">
           </div>
        </div>
</body>
</html>