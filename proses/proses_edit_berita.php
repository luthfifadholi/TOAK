<?php
include ('../config/koneksi.php');

$id = $_POST['id'];
$judul = $_POST['judul'];
$author = $_POST['author'];
$isi = $_POST['isi'];
$gambar = $_FILES['foto']['name'];
move_uploaded_file($_FILES['foto']['tmp_name'], "img/".$_FILES['foto']['name']);
		$sql = "UPDATE berita SET judul='$judul', author='$author', gambar='$gambar' WHERE id='$id' ";
	 	$query = mysql_query($sql);
	echo"<script>alert('Berita Berhasil diedit !')</script>";
	header("Location: ../user/admin/admin_berita.php");

 ?>