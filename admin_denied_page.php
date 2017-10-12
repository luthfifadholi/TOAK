<?php  
	include('koneksi_db/koneksi.php');
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Access is denied</title>
	<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/access.css">
	<style>
		/* General Styles */
		h4 { color: #c5c5c5; margin-top: 50px; }
		body { margin: 0; font-family: Arial; background-color: #fff; }
		ul#simple { display: table; list-style: none; margin: 0 auto; padding: 0; }
		ul#simple > li:last-child { margin-right: 0; }
		ul#simple > li > span { margin-bottom: 10px; }
	</style>

	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#dropdown-account > .account").click(function(){
				$("#dropdown-account > .dropdown").slideToggle("slow", function(){
					if($(this).css('display') == "none")
						$("#dropdown-account > .account").removeClass("active");
					else
						$("#dropdown-account > .account").addClass("active");
				});
			});
		});
	</script>
</head>
<body>
	<div class="atas">
		<img src="img/logorpl.png" class="logo">
		<ul id="simple" style="float:right">
			<li>
				<div id="dropdown-account">
					<div class="account">
						<img src="images/account.png" alt="Account"/>
						<?php echo $_SESSION['nama_user']; ?>
						<img src="images/arrow.png" alt="Dropdown"/>
					</div>
					<div class="dropdown" style="display:none;margin-top:10px;">
						<ul>
							<li style="height:60px;width:150px;">
								<table>
									<tbody>
										<tr>
											<td><img src="images/account.png" alt="Account" style="padding-left:5px;padding-top:5px;padding-right:5px" /></td>
											<td>
												<?php echo $_SESSION['nama_username']; ?><br>
												<?php echo $_SESSION['status']; ?><br>
											</td>
										</tr>
									</tbody>
								</table>									
							</li>
							<li><a href="#" style="text-align:left"><img src="images/messages.png" alt="Upload" style="float:left;width:15px" /> Pengaturan</a></li>
							<li><a href="proses/proses_logout.php" style="text-align:left"><img src="images/logout.png" alt="Upload" style="float:left;width:15px"/> Logout</a></li>
						</ul>
					</div>
				</div>
			</li>
		</ul>
	</div>
		<div class="objek">
			<img src="img/toak-secure.png" class="gambar">
			<div class="tulisan">
			<h2>Sorry this page only for admin, please logout and login as admin to access this page.</h2>
		</div>
	</div>
	<footer>
        Copyright &copy Toak - 2016, KT-E Project
    </footer>
</body>
</html>