<?php
	include ('../config/koneksi.php');
	$id = $_POST['id'];
	$judul = $_POST['judul'];
	$tempat = $_POST['tempat'];
	$tanggal = $_POST['tanggal'];
	$waktu = $_POST['waktu'];
	$status = $_POST['status'];

	$sql = "UPDATE pengumuman SET judul='$judul', tempat='$tempat, tanggal='$tanggal' waktu='$waktu' status='$status' WHERE id='$id' ";
	$query = mysql_query($sql);
	echo "<script>alert('Pengumuman berhasil diedit !')</script>";
	header("Location: ../user/admin/admin_pengumuman.php");

 ?>