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
			<h1 class="pull-left"><a href="<?php echo site_url('publikasi/berita') ?>">Berita</a></h1>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md">
			<?php foreach ($detail as $berita) {
			?>
			<h2 class="font-weight-bold"><?php echo $berita->judul;  ?></h2>
			<div class="pos" style="font-size: 10px">
				<p>Posted on <?php echo date("d/m/Y",strtotime($berita->tanggal_input));  ?> by <?php echo $berita->penyusun; ?></p>
			</div>
				<img class="gambar-berita" src="<?php echo base_url()."../File_BMKG/Berita/".$berita->foto;
				?>" style="width:100%">
				<p><?php echo $berita->isi; ?></p>
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