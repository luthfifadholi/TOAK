<?php  
	include('../config/koneksi.php');
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin | Berita</title>
	<link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<link rel="stylesheet" type="text/css" href="../popup.css">

	<script type="text/javascript" src="../js/jquery-1.12.2.js"></script>
	<script type="text/javascript" src="../js/jquery.js"></script>	
	<script type="text/javascript">
		$(document).ready(function(){
			$("#tombol").click(function(){
				window.confirm("Apakah anda yakin ingin mengirim peringatan kebakaran?");
			});
		});
		$(document).ready(function(){
			$("#tombol1").click(function(){
				window.confirm("Apakah anda yakin ingin mengirim peringatan ada maling?");
			});
		});
		$(document).ready(function(){
			$("#tombol2").click(function(){
				window.confirm("Apakah anda yakin ingin mengirim peringatan bencana?");
			});
		});

	</script>
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
	<!-- <div id="wrapper"> -->
		<header id="header-top">
			<img src="../img/logorpl.png" style="float:left; width: 150px; margin: 20px">
			<ul id="simple" style="float:right">
				<li>
					<div id="dropdown-account">
						<div class="account">
							<img src="../images/account.png" alt="Account"/>
							<?php echo $_SESSION['nama_user']; ?>
							<img src="../images/arrow.png" alt="Dropdown"/>
						</div>
						<div class="dropdown" style="display:none;margin-top:10px;">
							<ul>
								<li style="height:60px;width:150px;">
									<table>
										<tbody>
											<tr>
												<td><img src="../images/account.png" alt="Account" style="padding-left:5px;padding-top:5px;padding-right:5px" /></td>
												<td>
													<?php echo $_SESSION['nama_username']; ?><br>
													<?php echo $_SESSION['status']; ?><br>
												</td>
											</tr>
										</tbody>
									</table>									
								</li>
								<li><a href="#" style="text-align:left"><img src="../images/messages.png" alt="Upload" style="float:left;width:15px" /> Pengaturan</a></li>
								<li><a href="../proses/proses_logout.php" style="text-align:left"><img src="../images/logout.png" alt="Upload" style="float:left;width:15px"/> Logout</a></li>
							</ul>
						</div>
					</div>
				</li>
			</ul>
		</header>
		<nav>
			<ul>
				<li><a class="active" href="admin_berita.php">Berita</a></li>
				<li><a href="admin_profil.php">Profil</a></li>
				<li><a href="admin_biodata.php">Biodata</a></li>
				<li><a href="admin_pengumuman.php">Pengumuman</a></li>
				<li><a href="admin_berkas.php">Berkas</a></li>
				<li><a href="admin_keluhan.php">Keluhan</a></li>
				<li><a href="admin_kas.php">Kas RT</a></li>
			</ul>
		</nav>
		<section>
			<aside>
				<div id="tombolAlert">
					<div id="tombol">
						<a href=""><center>
							<img src="../img/api.png" style="width:70px;">
							<h2 style="color: white; padding-bottom: 50px;">Kebakaran</h2>
						</center></a>
					</div>	
					<div id="tombol1">
						<center>
							<img src="../img/maling.png" style="width:70px;">
							<h2 style="color: white; padding-bottom: 50px;">Maling</h2>
						</center>
					</div>
					<div id="tombol2">
						<center>
							<img src="../img/bencana.png" style="width:100px;">
							<h2 style="color: white; padding-bottom: 50px;">Bencana</h2>
						</center>
					</div>
				</div>
			</aside>
			<div id="berkas">
				<a class="btn" data-popup-open="popup-1" href="#">Open Popup #1</a>
 				<p>aaaaaaa</p>
				<div class="popup" data-popup="popup-1">
				    <div class="popup-inner">
				        <img src="../img/icon-berita.png" style="width:50px;float:left"><h2 style="margin-left:80px;margin-top:9px">Berita</h2>
				        <p>Donec in volutpat nisi. In quam lectus, aliquet rhoncus cursus a, congue et arcu. Vestibulum tincidunt neque id nisi pulvinar aliquam. Nulla luctus luctus ipsum at ultricies. Nullam nec velit dui. Nullam sem eros, pulvinar sed pellentesque ac, feugiat et turpis. Donec gravida ipsum cursus massa malesuada tincidunt. Nullam finibus nunc mauris, quis semper neque ultrices in. Ut ac risus eget eros imperdiet posuere nec eu lectus.</p>
				        <p><a data-popup-close="popup-1" href="#">Close</a></p>
				        <a class="popup-close" data-popup-close="popup-1" href="#">x</a>
				    </div>
				</div>

			</div>
		</section>		
		<footer>
			Copyright &copy KT-E Project - 2016
		</footer>
	<!-- </div> -->
	<script type="text/javascript">
		$(function() {
		    //----- OPEN
		    $('[data-popup-open]').on('click', function(e)  {
		        var targeted_popup_class = jQuery(this).attr('data-popup-open');
		        $('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);
		 
		        e.preventDefault();
		    });
		 
		    //----- CLOSE
		    $('[data-popup-close]').on('click', function(e)  {
		        var targeted_popup_class = jQuery(this).attr('data-popup-close');
		        $('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);
		 
		        e.preventDefault();
		    });
		});
	</script>
</body>
</html>