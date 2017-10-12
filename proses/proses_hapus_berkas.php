<?php 
	include ('../config/koneksi.php');

	$id = $_GET['id'];

	$query=("DELETE FROM berkas WHERE id='$id'");
	mysql_query($query);
	header("Location: ../user/admin/admin_berkas.php");
 ?>