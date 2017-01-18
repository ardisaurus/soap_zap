<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="sepatuInsert.php" method="post">
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>Brand</td>
				<td>:</td>
				<td><input type="text" name="brand" required></td>
			<tr>
				<td>Model</td>
				<td>:</td>
				<td><input type="text" name="model" size="30" required></td>
			</tr><tr>
				<td>Kategori</td>
				<td>:</td>
				<td><input type="text" name="kategori" required></td>
			</tr>
			<tr>
				<td>harga</td>
				<td>:</td>
				<td><input type="text" name="harga" required></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="simpan" value="Simpan"> <a href='sepatuClient.php'>Kembali</a></td>
			</tr>
		</table>
	</form>
</body>
</html>