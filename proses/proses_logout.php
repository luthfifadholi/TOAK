<?php
	session_start();
	if(isset($_SESSION['admin'])){
		session_destroy();
		echo "<script> alert('Berhasil Logout...');
		 	  window.location.href='../login.php';	</script>";
	}
?>