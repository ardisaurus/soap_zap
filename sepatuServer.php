<?php
require_once('lib/nusoap.php');
require_once('lib/adodb.inc.php');

$server = new soap_server();

$server->register('sepatu');

function sepatu() {
$db = &ADONewConnection('mysqlt'); 
$db->Connect('localhost', 'root', '', 'simple_zap');
$rs = $db->Execute("select * from sepatu");
	$result = $rs->GetArray();
    foreach($result as $row=>$value)
   	{ 
		$return_value[] = array(
				    'id'=> $value['id_sepatu'],
				    'brand'=> $value['brand'],
				    'model'=> $value['model'],
				    'harga'=> $value['harga'],
				    'kategori'=> $value['kategori']
				    );
	}
	return $return_value;
}

$server->register('sepatu_detail');

function sepatu_detail($param) {
	$db = &ADONewConnection('mysqlt');
	$db->Connect('localhost', 'root', '', 'simple_zap');
	$rs = $db->Execute("select * from sepatu where id_sepatu=".$param['id']);
	$result = $rs->GetArray();
	foreach($result as $row=>$value)
	{
		$return_value[] = array(
				    'id'=> $value['id_sepatu'],
				    'brand'=> $value['brand'],
				    'model'=> $value['model'],
				    'harga'=> $value['harga'],
				    'kategori'=> $value['kategori']
				    );
	}
	return $return_value;
}

$server->register('sepatu_delete');

function sepatu_delete($param) {
	$db = &ADONewConnection('mysqlt');
	$db->Connect('localhost', 'root', '', 'simple_zap');
	$rs = $db->Execute("delete from sepatu where id_sepatu=".$param['id']);
}


$server->register('sepatu_edit');

function sepatu_edit($param) {
	$db = &ADONewConnection('mysqlt');
	$db->Connect('localhost', 'root', '', 'simple_zap');
	$rs = $db->Execute("UPDATE `sepatu` SET `brand` = '".$param['brand']."', `model` = '".$param['model']."', `kategori` = '".$param['kategori']."', `harga` = '".$param['harga']."' WHERE `id_sepatu` = ".$param['id']);
}

$server->register('sepatu_insert');

function sepatu_insert($param) {
	$db = &ADONewConnection('mysqlt');
	$db->Connect('localhost', 'root', '', 'simple_zap');
	$rs = $db->Execute("INSERT INTO `sepatu` (`id_sepatu`, `brand`, `model`, `kategori`, `harga`) VALUES (NULL, '".$param['brand']."', '".$param['model']."', '".$param['kategori']."', '".$param['harga']."');");
}

$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$server->service($HTTP_RAW_POST_DATA);
?>
