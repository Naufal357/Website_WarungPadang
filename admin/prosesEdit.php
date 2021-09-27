<?php 
	include '../function.php';

	$id = $_GET['id'];
	$name = $_GET['name'];
	$harga = $_GET['price'];

	$query = "UPDATE menu SET namaMenu='$name', harga='$harga' WHERE Id_menu='$id'";
	$result = mysqli_query($conn, $query);

	if($result){
		echo "Berhasil update data";
?>
	<a href="admin.php"> Lihat data</a>
<?php 
	}
	else{
		echo "Gagal update data" . mysqli_error($conn);
	}	
?>