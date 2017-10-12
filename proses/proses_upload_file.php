<?php 
	include ('../config/koneksi.php');
	$file = $_FILES['dokumen']['name'];
	move_uploaded_file($_FILES['dokumen']['tmp_name'], "../berkas/".$_FILES['dokumen']['name']);

	mysql_query("INSERT INTO berkas (namafile) VALUES ('$file')");
 	header("Location: ../user/admin/admin_berkas.php");

 ?>