<?php  
	include('../../config/koneksi.php');
	session_start();
	if($_SESSION['status'] != "warga" && $_SESSION['status'] != "admin"){
		header("Location: ../../other_denied_page.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>TOAK | Pengumuman</title>
	<link rel="shortcut icon" href="../../assets/img/favicon.png" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="../../assets/css/main.css">
	<script type="text/javascript" src="../../assets/js/jquery-1.12.2.js"></script>
	<script type="text/javascript" src="../../assets/js/jquery.js"></script>	
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
			<img src="../../assets/img/logorpl.png" style="float:left; width: 150px; margin: 20px">
			<ul id="simple" style="float:right">
				<li>
					<div id="dropdown-account">
						<div class="account">
							<img src="../../assets/images/account.png" alt="Account"/>
							<?php echo $_SESSION['nama_user']; ?>
							<img src="../../assets/images/arrow.png" alt="Dropdown"/>
						</div>
						<div class="dropdown" style="display:none;margin-top:10px;">
							<ul>
								<li style="height:60px;width:150px;">
									<table>
										<tbody>
											<tr>
												<td><img src="../../assets/images/account.png" alt="Account" style="padding-left:5px;padding-top:5px;padding-right:5px" /></td>
												<td>
													<?php echo $_SESSION['nama_username']; ?><br>
													<?php echo $_SESSION['status']; ?><br>
												</td>
											</tr>
										</tbody>
									</table>									
								</li>
								<?php
									if($_SESSION['status'] == "admin"){
									echo "<li><a href='../admin/admin_pengumuman.php' style='text-align:left'><img src='../../assets/images/messages.png' style='float:left;width:15px' /> Admin Mode</a></li>";
								}?>
								<li><a href="#" style="text-align:left"><img src="../../assets/images/messages.png" alt="Upload" style="float:left;width:15px" /> Pengaturan</a></li>
								<li><a href="../../proses/proses_logout.php" style="text-align:left"><img src="../../assets/images/logout.png" alt="Upload" style="float:left;width:15px"/> Logout</a></li>
							</ul>
						</div>
					</div>
				</li>
			</ul>
		</header>
		<nav>
			<ul>
				<li><a href="berita.php">Berita</a></li>
				<li><a href="profil.php">Profil</a></li>
				<li><a href="biodata.php">Biodata</a></li>
				<li><a class="active" href="pengumuman.php">Pengumuman</a></li>
				<li><a href="berkas.php">Berkas</a></li>
				<li><a href="keluhan.php">Keluhan</a></li>
				<li><a href="kas.php">Kas RT</a></li>
			</ul>
		</nav>
		<section>
			<aside>
				<div id="tombolAlert">
					<div id="tombol">
						<a href=""><center>
							<img src="../../assets/img/api.png" style="width:70px;">
							<h2 style="color: white; padding-bottom: 50px;">Kebakaran</h2>
						</center></a>
					</div>	
					<div id="tombol1">
						<center>
							<img src="../../assets/img/maling.png" style="width:70px;">
							<h2 style="color: white; padding-bottom: 50px;">Maling</h2>
						</center>
					</div>
					<div id="tombol2">
						<center>
							<img src="../../assets/img/bencana.png" style="width:100px;">
							<h2 style="color: white; padding-bottom: 50px;">Bencana</h2>
						</center>
					</div>
				</div>
			</aside>
			<div id="berkas">
				<div class="bhead">
					<div>
						<h1 style="color: #31a9e1; width:660px; float:left;font-family:Calibri">Pengumuman</h1>
					</div>
				</div>
				<table class="jos_tabel_pengumuman">
					<thead>
						<tr>
							<td>Detail</td>
							<td>Diubah</td>
							<td>Status</td>
						</tr>
					</thead>
					<tbody>
						<?php 
							$query = "SELECT * FROM pengumuman ORDER BY id DESC";
							$hasil = mysql_query($query);
							while ($row = mysql_fetch_array($hasil)){
								$id = $row['id'];
								$judul = $row['judul'];
								$tempat = $row['tempat'];
								$tanggal = $row['tanggal'];
								$tanggalPosting = $row['tanggal_posting'];
								$waktu = $row['waktu'];
								$status = $row['status'];
								echo "<tr style='font-family:Calibri'>";
									echo "<td valign='top'>";
										echo "<div style='font-weight:bold;color:#31a9e1'>$judul</div>";
										echo "Tempat  : $tempat<br>";
										echo "Tanggal : $tanggal<br>";
										echo "Waktu : $waktu<br>";
									echo "</td>";
									echo "<td>$tanggalPosting</td>";
									echo "<td style='font-weight:bold;color:#31a9e1'>$status</td>";
								echo "</tr>";
							}
						?>	
					</tbody>
				</table>
			</div>
		</section>		
		<footer>
			Copyright &copy KT-E Project - 2016
		</footer>
	<!-- </div> -->
</body>
</html>