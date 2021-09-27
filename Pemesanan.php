<?php
require 'function.php';

session_start();
if( $_SESSION['status'] != 'pelanggan'){
    header("Location: login.php");
    exit;
}

if(isset($_POST ["pemesanan"] )){
    if(pemesanan($_POST) > 0){
        echo    "<script>
                alert('Pemesanan sedang diproses');
                </script>";
?>
    <center>Tunggu Kami akan melakukan konfirmasi</center> 
<?php
    }else{
        echo mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Pemesanan Tempat</title>
        <link rel="stylesheet" href="css/pemesanan.css">
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
                    <a href="Menu.php">Menu</a>
                </li>
                <li class="nav-item">
                    <a href="pemesanan.php">Pesan Tempat</a>
                </li>
                <li class="nav-item">
                    <a href="logout.php">Logout</a>
                </li>
            </ul>
        </nav>

        <h1 class="tengah">Form Pemesanan Meja</h1>

        <div class="konten">
        <div class="grup">
        </div>

        <form action="" method="post">
            <div class="grup">
                <label for="username">&nbsp;&nbsp; Pemesanan Atas Nama : </label>
                <input type="text" name="username" id="username">
            </div>

            <div class="grup">
                <label for="NoTlpn">&nbsp;&nbsp; Nomor telepon (untuk konfirmasi) : </label>
                <input type="text" name="NoTlpn" id="NoTlpn">
            </div>

            <div class="grup">
                <label for="email">&nbsp;&nbsp; Email : </label>
                <input type="text" name="email" id="email">
            </div>

            <div class="grup">
                <label for="hari">&nbsp;&nbsp; Hari Pemesanan : </label>
                <input type="text" name="hari" id="hari">
            </div>

            <div class="grup">
                <label for="jam">&nbsp;&nbsp; Meja dibooking pada jam (waktu dipesan): </label>
                <input placeholder="contoh: 12.00-13.00" type="text" name="jam" id="jam">
            </div>

            <div class="grup">
                <label for="orang">&nbsp;&nbsp; Jumlah orang (untuk persiapan kursi) : </label>
                <input type="text" name="orang" id="orang">
            </div>

            <div class="grup">
                <label for="makanan">&nbsp;&nbsp; Makan yang akan dipesan (opsional) : </label>
                <input type="text" name="makanan" id="makanan">
            </div>

            <div class="grup">
                <label for="minuman">&nbsp;&nbsp; Minuman yang akan dipesan (opsional) : </label>
                <input type="text" name="minuman" id="minuman">
            </div>

            <button type="submit" name="pemesanan">Pesan Sekarang </button>
        </form>
        </div>
            <div class="bawah tengah">
            </div>
        </div>

        <font color="yellow" size="3">Catatan : 
        <br>- Pemesanan diharapkan 3 hari sebelum waktu dipesan
        <br>- Setelah melakukan pemesanan anda akan kami hubungi untuk melakukan konfirmasi.
        </font>
    </body>
</html>