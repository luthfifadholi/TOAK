<?php 
	include ('../config/koneksi.php');

	$id = $_GET['id'];

	$query=("DELETE FROM biodata WHERE id='$id'");
	mysql_query($query);
	header("Location: ../user/admin/admin_biodata.php");
 ?>