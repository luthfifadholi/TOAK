<?php
	include ('../config/koneksi.php');
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$email = $_POST['email'];
	$telepon = $_POST['telepon'];
	$status = $_POST['status'];
	$foto = $_FILES['foto']['name'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	move_uploaded_file($_FILES['foto']['tmp_name'], "img/".$_FILES['foto']['name']);
	$sql = "UPDATE biodata SET nama='$nama', alamat='$alamat', email='$email' telepon='$telepon' status='$status' foto='$foto' username='$username' password='$password' WHERE id='$id' ";
	$query = mysql_query($sql);
	echo"<script>alert('Biodata Berhasil diedit !')</script>";
	header("Location: ../user/admin/admin_biodata.php");

 ?>