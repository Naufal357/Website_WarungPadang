<?php
//panggil file koneksi.php yang sudah anda buat
include "function.php";
?>

<!DOCTYPE html>
<html>
<head>
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
</head>

<body background="image/background.jpg">

    <font color="brown" size="30" face="elephant">Masakan Padang </font><br>
    <font color="brown" size="10" face="calibri">Menu Makanan & Minuman </font>

 	<hr width="100%" size="10" color="brown">
    
    <table align="center" bgcolor="white" border="1" width="40%">

       <thead>
       <td bgcolor="darkorange" colspan=3 align="center"><b>Menu Makanan</b></td>

       <tr bgcolor="#CD5C5C">
           <td>No</td>
           <td>Nama Makanan</td>
           <td>Harga</td>
       </tr>
       </thead>

       <tbody>
			<?php
				//ambil data dari tb_admin di database
				$ambildata=mysqli_query($conn, "SELECT * FROM menu order by Id_menu asc");
				while($a=mysqli_fetch_array($ambildata)){
    		?>
       		<tr>
           	<td><?php echo $a['Id_menu'];?></td>
           	<td><?php echo $a['namaMenu'];?></td>
           	<td><?php echo $a['harga'];?></td>
       		</tr>
			<?php
				}
			?>
		</tbody>

	</table>
</body>
</html>