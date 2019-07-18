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
				<h1 class="pull-left">VISI DAN MISI BMKG DIY</h1>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col">
				<div class="text">
						<h5>A.	VISI</h5>
							<p>Mewujudkan UPT – BMKG yang handal, tanggap dan mampu dalam rangka mendukung keselamatan masyarakat serta keberhasilan pembangunan di wilayah DIY pada khususnya dan Pembangunan Nasional pada umumnya, serta dapat berperan aktif sebagai ujung tombak BMKG di wilayah DIY.</p>
						<h5>B.	MISI</h5>
							<ul>
								<li>Mengamati dan memahami fenomena meteorologi, klimatologi, kualitas udara, dan geofisika di wilayah DIY dan sekitarnya.</li>
								<li>Menyediakan data, informasi dan jasa meteorologi, kualitas udara, dan geofisika di wilayah DIY di sekitarnya yang handal dan terpercaya.</li>
								<li>Mengkoordinasikan kegiatan di bidang meteorologi, klimatologi, kualitas udara, dan geofisika di wilayah DIY dan sekitarnya.</li>
								<li>Berpartisipasi aktif dalam mendukung kegiatan Pemerintah Daerah di bidang meteorologi, klimatologi, kualitas udara, dan geofisika.</li>
							</ul>
					</div>
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
		</div>
	</body>
	<footer class="footer">
		<?php $this->load->view("part/footer.php") ?>
	</footer>
</html>]