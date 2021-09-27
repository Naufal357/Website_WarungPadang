<?php

session_start();
if( $_SESSION['status'] != 'admin'){
    header("Location: ../login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Product</title>
	<link rel="stylesheet" href="../css/index.css">

	<style>
        img {
            width: 300px;
            height: 200px;
            border: 4px solid #575D63;
            padding: 10px;
        }
	</style>

	<div class="atas" align="middle">
      <img src="../image/nasi.jpg">
      <img src="../image/nasi3.jpg">
      <img src="../image/nasi4.jpg">
      <img src="../image/nasi2.jpg">
      <img src="../image/nasi5.jpg">
  	</div>
</head>
<body background="../image/background.jpg">

	<nav>
        <ul class="nav-flex-row">
            <li class="nav-item">
                <a href="../adminPanel.php">Admin Panel</a>
            </li>
            <li class="nav-item">
                <a href="admin.php">Edit Menu</a>
            </li>
            <li class="nav-item">
                <a href="adminUser.php">Edit User</a>
            </li>
            <li class="nav-item">
                <a href="../login.php">Login</a>
            </li>
            <li class="nav-item">
                    <a href="../logout.php">Logout</a>
            </li>
        </ul>
    </nav>

	<font color="brown" size="30" face="elephant">Edit Menu</font><br>
	<font color="brown" size="10" face="calibri">Silahkan Edit Menu </font>
	<hr width="100%" size="10" color="brown">

	<h1><a href="adminInsert.php"> Tambah Data </a></h1>
		<table align="center" bgcolor="white" border="1" width="90%">
			<tr>
				<th> Id</th>
				<th> Nama Produk</th>
				<th> Harga</th>
				<th> Aksi</th>
			</tr>
		<?php 
			//panggil file function.php yang sudah anda buat
			include "../function.php";

			$query = "SELECT * FROM menu";
			$result = mysqli_query($conn, $query);

			if (mysqli_num_rows($result)>0) {
				while ($row = mysqli_fetch_array($result)) {
		?>
			<tr>
				<td> <?php echo $row["Id_menu"] ?></td>
				<td> <?php echo $row["namaMenu"] ?></td>
				<td> <?php echo $row["harga"] ?></td>
				<td>
				<a href="adminEdit.php?Id_menu=<?php echo $row['Id_menu']; ?>">
					Edit &nbsp;</a>
				<a href="adminHapus.php?Id_menu=<?php echo $row['Id_menu']; ?>"> Hapus</a>
				</td>
		<?php 
				}
			}
			else{
				echo "0 result";
			}
		?>
	</table>
</body>
</html>