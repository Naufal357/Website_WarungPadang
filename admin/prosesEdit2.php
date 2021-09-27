<?php 
	include '../function.php';

	$id = $_GET['id_user'];
	$email = $_GET['email'];
	$NoTlpn = $_GET['NoTlpn'];
	$level = $_GET['level'];

	$query = "UPDATE user SET id_user='$id', email='$email', NoTlpn='$NoTlpn', level='$level' WHERE id_user='$id'";

	$result = mysqli_query($conn, $query);

	if($result){
		echo "Berhasil update data";
?>
	<a href="adminUser.php"> Lihat data</a>
<?php 
	}
	else{
		echo "Gagal update data" . mysqli_error($conn);
	}	
?>