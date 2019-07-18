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
				<h1 class="pull-left">Skala MMI</h1>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<h3 class="font-weight-bold" style="margin-top: 20px;">Skala MMI (<em>Modified Mercalli Intensity</em>)</h3>
					<div class="breadcrumbs breadcrumbs-light">
						<p class="pull-left"><strong>Skala Mercalli </strong>adalah satuan untuk mengukur kekuatan gempa bumi. Satuan ini diciptakan oleh seorang vulkanologis dari Italia yang bernama Giuseppe Mercalli pada tahun 1902. Skala Mercalli terbagi menjadi 12 pecahan berdasarkan informasi dari orang-orang yang selamat dari gempa tersebut dan juga dengan melihat serta membandingkan tingkat kerusakan akibat gempa bumi tersebut. Oleh itu skala Mercalli adalah sangat subjektif dan kurang tepat dibanding dengan perhitungan magnitudo gempa yang lain. Oleh karena itu, saat ini penggunaan Skala Richter lebih luas digunakan untuk untuk mengukur kekuatan gempa bumi. Tetapi skala Mercalli yang dimodifikasi, pada tahun 1931 oleh ahli seismologi Harry Wood dan Frank Neumann masih sering digunakan terutama apabila tidak terdapat peralatan seismometer yang dapat mengukur kekuatan gempa bumi di tempat kejadian. </p>		
					</div>
					<div class="row-news">
						<div class="col">
							<h3>I MMI</h3>
							<p>Getaran tidak dirasakan kecuali dalam keadaan luarbiasa oleh beberapa orang</p>
						</div>
						<div class="col">
							<img src="<?php echo base_url()."asset/img/Skala/mmi1.png"; ?>">
						</div>
					</div>
					<div class="row-news">
						<div class="col">
							<img src="<?php echo base_url()."asset/img/Skala/mmi2.png"; ?>">
						</div>
						<div class="col">
							<h3>II MMI</h3>
							<p>Getaran dirasakan oleh beberapa orang, benda-benda ringan yang digantung bergoyang.</p>
						</div>
					</div>
					<div class="row-news">
						<div class="col">
							<h3>III MMI</h3>
							<p>Getaran dirasakan nyata dalam rumah. Terasa getaran seakan-akan ada truk berlalu.</p>
						</div>
						<div class="col">
							<img src="<?php echo base_url()."asset/img/Skala/mmi3.png"; ?>">
						</div>
					</div>
					<div class="row-news">
						<div class="col">
							<img src="<?php echo base_url()."asset/img/Skala/mmi4.png"; ?>">
						</div>
						<div class="col">
							<h3>IV MMI</h3>
							<p>Pada siang hari dirasakan oleh orang banyak dalam rumah, di luar oleh beberapa orang, gerabah pecah, jendela/pintu berderik dan dinding berbunyi.</p>
						</div>
					</div>
					<div class="row-news">
						<div class="col">
							<h3>V MMI</h3>
							<p>Getaran dirasakan oleh hampir semua penduduk, orang banyak terbangun, gerabah pecah, barang-barang terpelanting, tiang-tiang dan barang besar tampak bergoyang, bandul lonceng dapat berhenti.</p>
						</div>
						<div class="col">
							<img src="<?php echo base_url()."asset/img/Skala/mmi5.png"; ?>">
						</div>
					</div>
					<div class="row-news">
						<div class="col">
							<img src="<?php echo base_url()."asset/img/Skala/mmi6.png"; ?>">
						</div>
						<div class="col">
							<h3>VI MMI</h3>
							<p>Getaran dirasakan oleh semua penduduk. Kebanyakan semua terkejut dan lari keluar, plester dinding jatuh dan cerobong asap pada pabrik rusak, kerusakan ringan.</p>
						</div>
					</div>
					<div class="row-news">
						<div class="col">
							<h3>VII MMI</h3>
							<p>Tiap-tiap orang keluar rumah. Kerusakan ringan pada rumah-rumah dengan bangunan dan konstruksi yang baik. Sedangkan pada bangunan yang konstruksinya kurang baik terjadi retak-retak bahkan hancur, cerobong asap pecah. Terasa oleh orang yang naik kendaraan.</p>
						</div>
						<div class="col">
							<img src="<?php echo base_url()."asset/img/Skala/mmi7.png"; ?>">
						</div>
					</div>
					<div class="row-news">
						<div class="col">
							<img src="<?php echo base_url()."asset/img/Skala/mmi8.png"; ?>">
						</div>
						<div class="col">
							<h3>VIII MMI</h3>
							<p>Kerusakan ringan pada bangunan dengan konstruksi yang kuat. Retak-retak pada bangunan degan konstruksi kurang baik, dinding dapat lepas dari rangka rumah, cerobong asap pabrik dan monumen-monumen roboh, air menjadi keruh.</p>
						</div>
					</div>
					<div class="row-news">
						<div class="col">
							<h3>IX MMI</h3>
							<p>Kerusakan pada bangunan yang kuat, rangka-rangka rumah menjadi tidak lurus, banyak retak. Rumah tampak agak berpindah dari pondamennya. Pipa-pipa dalam rumah putus.</p>
						</div>
						<div class="col">
							<img src="<?php echo base_url()."asset/img/Skala/mmi9.png"; ?>">
						</div>
					</div>
					<div class="row-news">
						<div class="col">
							<img src="<?php echo base_url()."asset/img/Skala/mmi10.png"; ?>">
						</div>
						<div class="col">
							<h3>X MMI</h3>
							<p>Bangunan dari kayu yang kuat rusak,rangka rumah lepas dari pondamennya, tanah terbelah rel melengkung, tanah longsor di tiap-tiap sungai dan di tanah-tanah yang curam.</p>
						</div>
					</div>
					<div class="row-news">
						<div class="col">
							<h3>XI MMI</h3>
							<p>Bangunan-bangunan hanya sedikit yang tetap berdiri. Jembatan rusak, terjadi lembah. Pipa dalam tanah tidak dapat dipakai sama sekali, tanah terbelah, rel melengkung sekali.</p>
						</div>
						<div class="col">
							<img src="<?php echo base_url()."asset/img/Skala/mmi11.png"; ?>">
						</div>
					</div>
					<div class="row-news">
						<div class="col">
							<img src="<?php echo base_url()."asset/img/Skala/mmi12.png"; ?>">
						</div>
						<div class="col">
							<h3>XII MMI</h3>
							<p>Hancur sama sekali, Gelombang tampak pada permukaan tanah. Pemandangan menjadi gelap. Benda-benda terlempar ke udara.
							</p>
						</div>
					</div>
					<div class="alert">
						<strong>Info</strong><br>
						<p>Anda dapat mengunduh Poster Skala MMI BMKG dengan catatan :</p>
						<ul>
							<li>Tidak melakukan memodifikasi kalimat ataupun gambar yang ada di poster Skala MMI</li>
							<li>Hak kekayaan intelektual Poster MMI adalah milik BMKG</li>
						</ul>
						<a href="<?php echo base_url()."asset/poster_skala_gempa.tif"; ?>">Unduh Poster Skala MMI (TIFF File 93.3 MB)</a>
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
</html>