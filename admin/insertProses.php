<?php 
	require '../function.php';

	$id = $_GET['Id_menu'];
	$name = $_GET['namaMenu'];
	$harga = $_GET['harga'];

	$sql= "INSERT INTO menu(Id_menu, namaMenu, harga)
	VALUES('$id', '$name', '$harga')";

	if (mysqli_query($conn, $sql)) {
		echo "Data berhasil Ditambahkan";
	}
	else{
		echo "Data gagal ditambahkan <br>" . mysqli_error($conn);
	}

	mysqli_close($conn);
?>