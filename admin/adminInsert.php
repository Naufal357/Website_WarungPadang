<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
</head>
<body>
	<table>
		<form method="GET" action="insertProses.php">
			<tr>
				<td>Id</td>
				<td><input type="number" name="Id_menu"></td>
			</tr>
			<tr>
				<td> Nama Produk</td>
				<td> <input type="text" name="namaMenu"></td>
			</tr>
			<tr>
				<td> Harga</td>
				<td> <input type="number" name="harga"></td>
			</tr>
			<tr>
				<td> <input type="submit" name="tambah" value="Tambah Data"></td>
			</tr>
		</form>
	</table>
</body>
</html>