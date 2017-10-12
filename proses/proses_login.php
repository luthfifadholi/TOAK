<?php  
	include('../config/koneksi.php');
	$user = $_POST['username'];
	$pass = $_POST['password'];

	if(isset($_POST['login'])){
		$sql = mysql_query("SELECT * FROM biodata WHERE username = '$user' and password = '$pass'");
		$result = mysql_fetch_array($sql);

		if($result){
			if($result['status']=="admin"){
				session_start();
				$_SESSION['admin']=$user;
				$_SESSION['nama_user']=$result['nama'];
				$_SESSION['nama_username']=$result['username'];
				$_SESSION['foto']=$result['foto'];
				$_SESSION['status']=$result['status'];
				$_SESSION['id_user']=$result['id'];
				echo "<script> alert('Anda Berhasil Login');
					window.location.href='../user/admin/admin_berita.php' </script>";
			}else{
				session_start();
				$_SESSION['admin']=$user;
				$_SESSION['nama_user']=$result['nama'];
				$_SESSION['nama_username']=$result['username'];
				$_SESSION['id_user']=$result['id'];
				$_SESSION['foto']=$result['foto'];
				$_SESSION['status']=$result['status'];
				echo "<script> alert('Anda Berhasil Login');
					window.location.href='../user/warga/berita.php' </script>";
			}
		}else{
			echo "<script> alert('Username atau Password anda salah !!');
				window.location.href='../login.php' </script>";
		}
	}
?>