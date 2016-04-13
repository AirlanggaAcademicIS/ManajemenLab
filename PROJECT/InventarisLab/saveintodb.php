<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?php
include "koneksidb.php";
if($_POST['cari']){
$id_non=$_REQUEST['idBarang'];
$jb_non=$_REQUEST['jenisBarang'];
$merk_non=$_REQUEST['merk'];
$jml_non=$_REQUEST['jumlah'];
$deskripsi=$_REQUEST['deskripsi'];

$query = mysql_query("INSERT INTO `non_komputer`(`id_non`, `jb_non`, `merk_non`, `jml_non`, `deskripsi`) VALUES ($id_non,$jb_non,$merk_non,$jml_non,$deskripsi)", $connect_db);
}

?>
<body>
</body>
</html>
