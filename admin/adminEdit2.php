<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
</head>
<body>
	<?php 
		include "../function.php";
		$id = $_GET['id_user'];
		$query = "SELECT * FROM user WHERE id_user='$id'";
		$result = mysqli_query($conn, $query);
	?>

	<link rel="stylesheet" href="../css/index.css">
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
      <img src="../image/nasi.jpg">
      <img src="../image/nasi3.jpg">
      <img src="../image/nasi4.jpg">
      <img src="../image/nasi2.jpg">
      <img src="../image/nasi5.jpg">
  	</div>
</head>

<body background="../image/background.jpg">
	<font color="brown" size="10" face="calibri">Halaman Edit User </font>
	<hr width="100%" size="10" color="brown">

	<table style="margin-left:auto;margin-right:auto" border="1">
		<form method="GET" action="prosesEdit2.php">
			<?php 
				while ($row=mysqli_fetch_array($result)) {
			?>
				<tr>
					<td> Id</td>
					<td> <input type="number" name="id_user" value="<?php echo $row['id_user']; ?>" readonly> </td>
				</tr>
				<tr>
					<td> email</td>
					<td> <input type="text" name="email" value="<?php echo $row['email']; ?>"> </td>
				</tr>
				<tr>
					<td> NoTlpn</td>
					<td> <input type="number" name="NoTlpn" value="<?php echo $row['NoTlpn']; ?>"> </td>
				</tr>
				<tr>
					<td> level</td>
					<td> <input type="text" name="level" value="<?php echo $row['level']; ?>"> </td>
				</tr>
				<tr>
					<td> <input type="submit" name="edit" value="Edit Data"></td>
				</tr>
				<?php
				}
				?>
		</form>
	</table>
</body>
</html>