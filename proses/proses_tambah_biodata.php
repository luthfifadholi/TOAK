<?php 
	include ('../config/koneksi.php');
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$email = $_POST['email'];
	$telepon = $_POST['telepon'];
	$status = $_POST['status'];
	$foto = $_FILES['foto']['name'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	move_uploaded_file($_FILES['foto']['tmp_name'], "../images/".$_FILES['foto']['name']);

	if(isset($_POST['kirim'])){
		mysql_query("INSERT INTO biodata (nama, alamat, email, telepon, status, foto, username, password) VALUES ('$nama', '$alamat', '$email', '$telepon', '$status', '$foto', '$username', '$password')");
	 	header("Location: ../user/admin/admin_biodata.php");
	 }

 ?>