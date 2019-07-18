<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!doctype html>
<html lang="en">
	<head>
		<?php $this->load->view("part/head.php") ?>
	</head>
	<header class="header">
		<?php $this->load->view("part/header.php") ?>
	</header>
	<body>
		<div class="breadcrumbs breadcrumbs-light">
			<div class="container">
				<h1 class="pull-left">Citra Radar</h1>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col">
					<h3 class="sub-judul" style="margin-top: 20px;">Citra Radar Cuaca Mozaic Jawa Tengah Terkini</h3>
						<img id="myImg" src="http://dataweb.bmkg.go.id/MEWS/Radar/Citra_Radar_JOGJ.png" style="max-width: 100%;" onclick="onClick(this)">
				</div>
				<div class="col-5">
					<h5>Berita</h5>
					<div class="gp">
						<?php 
				  		foreach ($berita as $berita) {
						?>
							<div class="row-news">
				  				<div class="col-3">
									<div class="foto">
										<img src="<?php echo base_url()."../File_BMKG/Berita/".$berita->foto;
										?>" width="120" height="72" style="margin: 10px 10px 10px 5px;">
									</div>
				  				</div>
				  				<div class="col">
									<div class="blogg">
										<h5><a href="<?php echo base_url().('index.php/publikasi/detailberita?id=').$berita->id_berita ?>"><?php echo $berita->judul;  ?></a></h5>
											<ul class="blog-tgl">
												<li><?php echo date("d/m/Y",strtotime($berita->tanggal_input));  ?></li>
											</ul>
									</div>
				  				</div>
							</div>
						<?php
				  		}
						?>
					</div>
					<h5>Pengumuman</h5>
					<div class="gp">
						<?php 
						foreach ($pengumuman as $pengumuman) {
						?>
						<div class="row-news">
							<div class="blogg">
								<p><a href="<?php echo base_url().('index.php/publikasi/detailpengumuman?id=').$pengumuman->id_pengumuman ?>"><?php echo $pengumuman->judul;  ?></a></p>
									<ul class="blog-tgl">
										<li><?php echo date("d/m/Y",strtotime($pengumuman->tanggal_input));  ?></li>
									</ul>
							</div>
						</div>
						<?php
				  		}
						?>
					</div>
					<h5>Artikel</h5>
					<div class="gp">
						<?php 
				  		foreach ($artikel as $art) {
						?>
						<div class="row-news">
							<div class="blogg">
								<p><a href="<?php echo base_url().('index.php/publikasi/detailartikel?id=').$art->id_art ?>"><?php echo $art->judul;  ?></a></p>
									<ul class="blog-tgl">
										<li><?php echo date("d/m/Y",strtotime($art->tanggal_input));  ?></li>
									</ul>
							</div>
						</div>
						<?php
				  		}
						?>
					</div>
				</div>
			</div>		
			
				<!-- The Modal -->
				<div id="myModal" class="modal" onclick="this.style.display='none'">
				  <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
				  <img class="modal-content" id="img01">
				  <div class="w3-modal-content w3-animate-zoom">
				    <img id="img01" style="width:100%" class="w3-hover-opacity">
				  </div>
				 </div>

				<script>
				function onClick(element) {
				  document.getElementById("img01").src = element.src;
				  document.getElementById("myModal").style.display = "block";
				}
				</script>
			<div class="margin-bottom-30">Waktu Pengamatan dalam UTC / GMT ( WIB = UTC+7 )
			</div>
		</div>
	</body>
	<footer class="footer">
		<?php $this->load->view("part/footer.php") ?>
	</footer>
</html>