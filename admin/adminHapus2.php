<?php 
	include "../function.php";

	$id = $_GET['id_user'];

	$query = "DELETE FROM user WHERE id_user='$id'";
	$result = mysqli_query($conn, $query);

	if ($result) {
		echo "Data berhasil dihapus";
?>
	<a href="admin.php"> Lihat data</a>
<?php 
	}
	else{
		echo "Data gagal dihapus" . mysqli_error($conn);
	}
?>