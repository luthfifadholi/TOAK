<?php  
	include ('../config/koneksi.php');

	$jenis = $_POST['jenis'];
	$nominal = $_POST['nominal'];
	$jumlah = $_POST['jumlah'];
	$satuan = $_POST['satuan'];
	$status = $_POST['status'];
	$bulan = $_POST['bulan'];

	$total = $nominal * $jumlah;

	mysql_query("INSERT INTO kas (jenis, nominal, jumlah, satuan, total, status, bulan) VALUES ('$jenis', '$nominal', '$jumlah', '$satuan','$total', '$status','$bulan')");

 	header("Location: ../user/admin/admin_kas.php");

?>