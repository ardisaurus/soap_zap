<!DOCTYPE html>
<html>
<head>
	<title>Zapato Footwear | Daftar Sepatu</title>
</head>
<body>
	<?php
		require_once('lib/nusoap.php');
		$client = new soapclient('http://127.0.0.1/soap_zap/sepatuServer.php');
		$err = $client->getError();
		if ($err) {
		echo '<h2>Constructor error</h2><pre>' . $err . '</pre>';
		}
		$param="";
		$result = $client->call('sepatu',array($param));
		echo "<td> <a href='sepatuInsertForm.php'>Tambah</a>";
		if (!empty($result)) {
		echo "<table border=1>";
		echo "<tr>";
		echo "<th>Brand</th>";
		echo "<th>Model</th>";
		echo "<th>Harga</th>";
		echo "<th>Kategori</th>";
		echo "<th>Aksi</th>";
		echo "</tr>";
		foreach ($result as $item) {
		echo "<tr>";
		echo "<td>".$item['brand']."</td>";
		echo "<td>".$item['model']."</td>";
		echo "<td>".$item['harga']."</td>";
		echo "<td>".$item['kategori']."</td>";
		echo "<td> <a href='sepatuEditForm.php?id=".$item['id']."'>Edit</a>"." | "." <a href='sepatuDelete.php?id=".$item['id']."'>Delete</a></td>";
		echo "</tr>";
		}
		echo "</table>";
		}
	?>
</body>
</html>