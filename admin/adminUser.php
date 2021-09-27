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
	<title>Data User</title>
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

	<font color="brown" size="30" face="elephant">Edit User</font><br>
	<font color="brown" size="10" face="calibri">Silahkan Edit User</font>
	<hr width="100%" size="10" color="brown">
	
	<table align="center" bgcolor="white" border="1" width="90%">
		<tr>
			<th> Id</th>
			<th> Username</th>
			<th> password</th>
			<th> Email</th>
			<th> No Telephone</th>
			<th> level</th>
			<th> aksi</th>
		</tr>
		<?php 
			//panggil file function.php yang sudah anda buat
			include "../function.php";

			$query = "SELECT * FROM user";
			$result = mysqli_query($conn, $query);

			if (mysqli_num_rows($result)>0) {
				while ($row = mysqli_fetch_array($result)) {
		?>
		<tr>
			<td><?php echo $row['id_user'];?></td>
            <td><?php echo $row['username'];?></td>
            <td><?php echo $row['password'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['NoTlpn'];?></td>
            <td><?php echo $row['level'];?></td>
			<td>
				<a href="adminEdit2.php?id_user=<?php echo $row['id_user']; ?>">
					Edit &nbsp;</a>
				<a href="adminHapus2.php?id_user=<?php echo $row['id_user']; ?>"> Hapus</a>
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