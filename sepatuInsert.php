<?php
require_once('lib/nusoap.php');
$client = new soapclient('http://127.0.0.1/soap_zap/sepatuServer.php');

$err = $client->getError();
if ($err) {
	echo '<h2>Constructor error</h2><pre>' . $err . '</pre>';
}

$param = array( 'brand'=>$_POST['brand'], 'model'=>$_POST['model'], 'kategori'=>$_POST['kategori'], 'harga'=>$_POST['harga']);
$result = $client->call('sepatu_insert',array($param));

echo "Insert Berhasil. <a href='sepatuClient.php'>Kembali</a></td>";

?>