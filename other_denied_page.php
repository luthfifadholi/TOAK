<?php  
	include('koneksi_db/koneksi.php');
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Access is denied</title>
		<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/access.css">
	</head>
	<body>
		<div class="atas">
			<img src="img/logorpl.png" class="logo">
			
		</div>
			<div class="objek">
				<img src="img/toak-secure.png" class="gambar">
				<div class="tulisan">
				<h2>Sorry, you must login to access this page.</h2>
				<button><a href="login.php">Go to login page</a></button>
			</div>
		</div>
		<footer>
	        Copyright &copy Toak - 2016, KT-E Project
	    </footer>
	</body>
</html>