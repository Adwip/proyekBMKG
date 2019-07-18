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
			<h1 class="pull-left">Berita</h1>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col">
			<?php foreach ($berita as $berita) {
			?>
			<div class="row" style="background: white;margin-left: 5px;margin-top: 10px">
				<div class=".col-md-">
					<img src="<?php echo base_url()."../File_BMKG/Berita/".$berita->foto;
					?>" style="width: 300px" >
				</div>
				<div class="col">
					<div class="judul-berita">
						<h3><a href="<?php echo base_url().('index.php/publikasi/detailberita?id=').$berita->id_berita ?>"><strong><?php echo $berita->judul;  ?></strong></a></h3>
					</div>
					<div class="isi">
						
						<p><?php
							$limited_word = character_limiter($berita->isi,30);
							
							echo $limited_word;  
							?></p>
						</div>
						<div class="pos" style="font-size: 10px">
							<p>Posted on <?php echo date("d/m/Y",strtotime($berita->tanggal_input));  ?></p>
						</div>
					</div>
				</div>
				<?php
			}
			?>
			</div>
			<div class="col-5">
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
			</div>
		</div>
	</div>
	</body>
	<footer class="footer">
		<?php $this->load->view("part/footer.php") ?>
	</footer>
	</html>