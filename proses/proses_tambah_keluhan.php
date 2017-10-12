<?php 
	session_start();
	include ('../config/koneksi.php');	
	$nama = $_SESSION['nama_user'];
	$isi = $_POST['keluhan'];

	if(isset($_POST['kirim'])){
		// var_dump($_SESSION['status']);die();
		mysql_query("INSERT INTO keluhan (nama, isi_keluhan) VALUES ('$nama','$isi')");
		if($_SESSION['status']=="warga"){
	 		echo "<script>window.location='../user/warga/keluhan.php'</script>";
	 	}else{
	 		echo "<script>window.location='../user/admin/admin_keluhan.php'</script>";
	 	}
	 }

 ?>