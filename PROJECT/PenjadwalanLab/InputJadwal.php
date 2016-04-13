
<?php
include('config.php');

$tanggal = $_POST['date'];
$DariPukul = $_POST['timefrom'];
$SampaiPukul = $_POST['timeto'];
$Kegiatan = $_POST['kegiatan'];
$Pjmk = $_POST['pjmk'];
$lokasi = $_POST['lokasi'];

$query = mysql_query("insert into penjadwalanlab values('', '$tanggal', '$DariPukul', '$SampaiPukul', '$Kegiatan', '$Pjmk', '$lokasi')") or die(mysql_error());

if ($query) {
	echo "<script>alert('Data berhasil di tambahkan!');history.go(-1);</script>";
}
?>