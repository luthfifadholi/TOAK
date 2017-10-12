<?php 
	include ('../config/koneksi.php');

	$id = $_GET['id'];

	$query=("DELETE FROM pengumuman WHERE id='$id'");
	mysql_query($query);
	header("Location: ../user/admin/admin_pengumuman.php");
 ?>