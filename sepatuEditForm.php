<?php
require_once('lib/nusoap.php');
$client = new soapclient('http://127.0.0.1/soap_zap/sepatuServer.php');

$err = $client->getError();
if ($err) {
	echo '<h2>Constructor error</h2><pre>' . $err . '</pre>';
}

$id = $_REQUEST['id'];

$param = array('id'=>$id);
$result = $client->call('sepatu_detail',array($param));

if (!empty($result)) {
	foreach ($result as $item) {
		$brand=$item['brand'];
		$model=$item['model'];
		$kategori=$item['kategori'];
		$harga=$item['harga'];
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="sepatuEdit.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>">	<!-- membuat inputan hidden dan nilainya adalah siswa_id -->
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>Brand</td>
				<td>:</td>
				<td><input type="text" name="brand" value="<?php echo $brand; ?>" required></td>	<!-- value diambil dari hasil query -->
			</tr>
			<tr>
				<td>Model</td>
				<td>:</td>
				<td><input type="text" name="model" size="30" value="<?php echo $model; ?>" required></td> <!-- value diambil dari hasil query -->
			</tr><tr>
				<td>Kategori</td>
				<td>:</td>
				<td><input type="text" name="kategori" value="<?php echo $kategori; ?>" required></td>	<!-- value diambil dari hasil query -->
			</tr>
			<tr>
				<td>Harga</td>
				<td>:</td>
				<td><input type="text" name="harga" value="<?php echo $harga; ?>" required></td>	<!-- value diambil dari hasil query -->
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
