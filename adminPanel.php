<?php
//panggil file koneksi.php yang sudah anda buat
require "function.php";

session_start();
if( $_SESSION['status'] != 'admin'){
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>

	<link rel="stylesheet" href="css/index.css">
	<title>Menu Restoran Padang</title>


	<style>
        img {
            width: 300px;
            height: 200px;
            border: 4px solid #575D63;
            padding: 10px;
        }
	</style>

	<div class="atas" align="middle">
      <img src="image/nasi.jpg">
      <img src="image/nasi3.jpg">
      <img src="image/nasi4.jpg">
      <img src="image/nasi2.jpg">
      <img src="image/nasi5.jpg">
  	</div>
</head>

<body background="image/background.jpg">

	<nav>
        <ul class="nav-flex-row">
            <li class="nav-item">
                <a href="adminPanel.php">Admin Panel</a>
            </li>
            <li class="nav-item">
                <a href="admin/admin.php">Edit Menu</a>
            </li>
            <li class="nav-item">
                <a href="admin/adminUser.php">Edit User</a>
            </li>
            <li class="nav-item">
                <a href="login.php">Login</a>
            </li>
            <li class="nav-item">
                    <a href="logout.php">Logout</a>
            </li>
        </ul>
    </nav>

	<font color="brown" size="30" face="elephant">Admin Panel</font><br>
	<font color="brown" size="10" face="calibri">Selamat Datang Admin </font>
	<hr width="100%" size="10" color="brown">

	<br>
	<center><font  color="684e32" size="15" face="Comic Sans">Data Pemesanan Tempat</font></center>

	<table align="center" bgcolor="white" border="1" width="90%">
       <thead>

       <tr bgcolor="fad643">
           <td>Id</td>
           <td>Nama Pemesan</td>
           <td>No Telepon</td>
           <td>Email</td>
           <td>Hari Permintaan</td>
           <td>Waktu Permintaan</td>
           <td>Jumlah Rombongan</td>
           <td>Makanan Diminta</td>
           <td>Minuman Diminta</td>
       </tr>
       </thead>

       <tbody>
			<?php
				//ambil data dari tb_admin di database
				$ambildata=mysqli_query($conn, "SELECT * FROM pemesanan order by id_pemesanan asc");
				while($a=mysqli_fetch_array($ambildata)){
    		?>
       		<tr>
           	<td><?php echo $a['id_pemesanan'];?></td>
           	<td><?php echo $a['username'];?></td>
           	<td><?php echo $a['NoTlpn'];?></td>
           	<td><?php echo $a['email'];?></td>
           	<td><?php echo $a['hari_pemesanan'];?></td>
           	<td><?php echo $a['waktu_pemesanan'];?></td>
           	<td><?php echo $a['orang_pemesanan'];?></td>
           	<td><?php echo $a['makanan_dipesan'];?></td>
           	<td><?php echo $a['minuman_dipesan'];?></td>
       		</tr>
			<?php
				}
			?>
		</tbody>
	</table>


    <br><br>
    <center><font  color="684e32" size="15" face="Comic Sans">Data User & Admin</font></center>

    <table align="center" bgcolor="white" border="1" width="90%">
       <thead>

       <tr bgcolor="fad643">
           <td>Id</td>
           <td>Username</td>
           <td>password</td>
           <td>Email</td>
           <td>No Telephone</td>
           <td>level</td>
       </tr>
       </thead>

       <tbody>
            <?php
                //ambil data dari tb_admin di database
                $ambildata=mysqli_query($conn, "SELECT * FROM user order by id_user asc");
                while($a=mysqli_fetch_array($ambildata)){
            ?>
            <tr>
            <td><?php echo $a['id_user'];?></td>
            <td><?php echo $a['username'];?></td>
            <td><?php echo $a['password'];?></td>
            <td><?php echo $a['email'];?></td>
            <td><?php echo $a['NoTlpn'];?></td>
            <td><?php echo $a['level'];?></td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</body>
</html>