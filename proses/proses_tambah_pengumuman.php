<?php 
	include ('../config/koneksi.php');
	$judul = $_POST['judul'];
	$tempat = $_POST['tempat'];
	$tanggal = $_POST['tanggal'];
	$waktu = $_POST['waktu'];
	$status = $_POST['status'];

	if(isset($_POST['kirim'])){
		mysql_query("INSERT INTO pengumuman (judul, tempat, tanggal, waktu, status) VALUES ('$judul', '$tempat', '$tanggal', '$waktu', '$status')");
	 	header("Location: ../user/admin/admin_pengumuman.php");
	 }

 ?>