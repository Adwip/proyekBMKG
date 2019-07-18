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
			<h1 class="pull-left">Prakiraan Hujan Bulanan</h1>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col">
			<h5>Curah Hujan</h5>
				<div class="row">
					<div class="col">
						<?php 
							$year=date(' Y');
							$mon = date('m');
							$monList = array(
								'01' => 'Januari',
								'02' => 'Februari',
								'03' => 'Maret',
								'04' => 'April',
								'05' => 'Mei',
								'06' => 'Juni',
								'07' => 'Juli',
								'08' => 'Agustus',
								'09' => 'September',
								'10' => 'Oktober',
								'11' => 'November',
								'12' => 'Desember',
								);
							date_default_timezone_set('Asia/Jakarta');
						?>
						<h5><?php echo $monList[$mon]. $year;?></h5>
						<?php foreach ($hujan_bulanancrh1 as $hujan_bulanan1){ ?>
							<img class="myImg" src="<?php echo base_url()."../File_BMKG/Iklim/Prakiraan_musim/Hujan_bulanan/".$hujan_bulanan1->curah_hujan;
								?>" style="max-width: 100%;margin: 10px 0 10px 0;" onclick="onClick(this)">
						<?php } ?>
					</div>
					<div class="col">
						<?php 
							$year=date(' Y');
							$monbsk = date('m', strtotime("+1 month"));
							$monList = array(
								'01' => 'Januari',
								'02' => 'Februari',
								'03' => 'Maret',
								'04' => 'April',
								'05' => 'Mei',
								'06' => 'Juni',
								'07' => 'Juli',
								'08' => 'Agustus',
								'09' => 'September',
								'10' => 'Oktober',
								'11' => 'November',
								'12' => 'Desember',
								);
							date_default_timezone_set('Asia/Jakarta');
						?>
						<h5><?php echo $monList[$monbsk]. $year;?></h5>
						<?php foreach ($hujan_bulanancrh2 as $hujan_bulanan2){ ?>
							<img class="myImg" src="<?php echo base_url()."../File_BMKG/Iklim/Prakiraan_musim/Hujan_bulanan/".$hujan_bulanan2->curah_hujan;
								?>" style="max-width: 100%;margin: 10px 0 10px 0;" onclick="onClick(this)">
						<?php } ?>
					</div>
					<div class="col">
						<?php 
							$year=date(' Y');
							$monls = date('m', strtotime("+2 month"));
							$monList = array(
								'01' => 'Januari',
								'02' => 'Februari',
								'03' => 'Maret',
								'04' => 'April',
								'05' => 'Mei',
								'06' => 'Juni',
								'07' => 'Juli',
								'08' => 'Agustus',
								'09' => 'September',
								'10' => 'Oktober',
								'11' => 'November',
								'12' => 'Desember',
								);
							date_default_timezone_set('Asia/Jakarta');
						?>
						<h5><?php echo $monList[$monls]. $year;?></h5>
						<?php foreach ($hujan_bulanancrh3 as $hujan_bulanan3){ ?>
							<img class="myImg" src="<?php echo base_url()."../File_BMKG/Iklim/Prakiraan_musim/Hujan_bulanan/".$hujan_bulanan3->curah_hujan;
								?>" style="max-width: 100%;margin: 10px 0 10px 0;" onclick="onClick(this)">
						<?php } ?>
					</div>
				</div>		
				<h5>Sifat Hujan</h5>
				<div class="row">	
					<div class="col">
						<h5><?php echo $monList[$mon]. $year;?></h5>
							<?php foreach ($hujan_bulanansft1 as $hujan_bulanansft1){ ?>
								<img class="myImg" src="<?php echo base_url()."../File_BMKG/Iklim/Prakiraan_musim/Hujan_bulanan/".$hujan_bulanansft1->sifat_hujan;
									?>" style="max-width: 100%;margin: 10px 0 10px 0;" onclick="onClick(this)">
							<?php } ?>
					</div>
					<div class="col">
						<h5><?php echo $monList[$monbsk]. $year;?></h5>
							<?php foreach ($hujan_bulanansft2 as $hujan_bulanansft2){ ?>
								<img class="myImg" src="<?php echo base_url()."../File_BMKG/Iklim/Prakiraan_musim/Hujan_bulanan/".$hujan_bulanansft2->sifat_hujan;
									?>" style="max-width: 100%;margin: 10px 0 10px 0;" onclick="onClick(this)">
							<?php } ?>
					</div>
					<div class="col">
						<h5><?php echo $monList[$monls]. $year;?></h5>
							<?php foreach ($hujan_bulanansft3 as $hujan_bulanansft3){ ?>
								<img class="myImg" src="<?php echo base_url()."../File_BMKG/Iklim/Prakiraan_musim/Hujan_bulanan/".$hujan_bulanansft3->sifat_hujan;
									?>" style="max-width: 100%;margin: 10px 0 10px 0;" onclick="onClick(this)">
							<?php } ?>
					</div>
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

		<!-- The Modal -->
		<div id="myModal" class="modal" onclick="this.style.display='none'">
			<span class="close">&times;</span>
			<img class="modal-content" id="img01">
			<div id="caption"></div>
		</div>

		
</div>
</body>
<footer class="footer">
	<?php $this->load->view("part/footer.php") ?>
</footer>
</html>