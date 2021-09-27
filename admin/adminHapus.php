<?php 
	include "../function.php";

	$id = $_GET['Id_menu'];

	$query = "DELETE FROM menu WHERE Id_menu='$id'";
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