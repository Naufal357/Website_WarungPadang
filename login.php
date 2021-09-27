<?php 
require 'function.php';

if( isset($_POST["login"])){

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
    $cek = mysqli_num_rows($result);

    //cek username
    if( mysqli_num_rows($result) == 1){
        //cek password
        $row = mysqli_fetch_assoc($result);

        if( password_verify($password, $row["password"]) ){
            if($row['level'] == "admin") {
                session_start();
                $_SESSION['status'] = 'admin';
                header("Location: adminPanel.php");
            }elseif($row['level'] == "pelanggan") {
                session_start();
                $_SESSION['username'] = $username;
                $_SESSION['status'] = 'pelanggan';
                header("Location: pemesanan.php");
            }
            exit;
        }
    }
    $error = true;
}
?>

<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="css/login.css">
    </head>
<body>
    <nav>
        <ul class="nav-flex-row">
            <li class="nav-item">
                <a href="index.html">Home</a>
            </li>
            <li class="nav-item">
                <a href="Menu.php">Menu</a>
            </li>
            <li class="nav-item">
                <a href="login.php">Login</a>
            </li>
        </ul>
    </nav>

    <h1 class="tengah">Form Login</h1>
    <div class="konten">
    <div class="atas">
    <div class="grup">
      </div>
      
        <?php if(isset($error)) : ?>
        <p style="color: red; font-style: italic;">username / password salah</p>
        <?php endif; ?>
      
         <form action="" method="post">
            <div class="grup">
                    <input input type="text" placeholder="Username" name="username" id="username">
                </div>
                <div class="grup">
                    <input type="password" placeholder="Password" name="password" id="password">
                </div>
                <div class="jarak">
                    <div class="tengah">
                        <button type="submit" name="login" class="tombol kirim">Kirim</button>
                        <button type="button" class="tombol refresh" onClick="window.location.reload();" >Refresh</button>
                    </div>
                </div>
                <div class="jarak1">
                    <div class="tengah">
                        <a href="registrasi.php">
                        <button type="button" class="tombol1 regis">Belum Punya Akun</button></a>
                    </div>
                </div>
                <div class="grup">
                    <div class="kiri">
                        </div>
                    <div class="kanan">
                        </div>
                </div>
        </form>
        </div>
        <div class="bawah tengah">
           </div>
    </div>
</body>
</html>