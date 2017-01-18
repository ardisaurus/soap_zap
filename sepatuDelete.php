<?php
require_once('lib/nusoap.php');
$client = new soapclient('http://127.0.0.1/soap_zap/sepatuServer.php');

$err = $client->getError();
if ($err) {
	echo '<h2>Constructor error</h2><pre>' . $err . '</pre>';
}

$id = $_REQUEST['id'];

$param = array('id'=>$id);
$result = $client->call('sepatu_delete',array($param));

echo "Delete Berhasil. <a href='sepatuClient.php'>Kembali</a></td>";

?>
