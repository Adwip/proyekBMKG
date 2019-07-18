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
				<h1 class="pull-left">SEJARAH BMKG DIY</h1>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="img">
						<img src="<?php echo base_url()."asset/img/STAKLIM MLATI.jpg"
						?>" style="width: 100%" ><br>
					</div>
					<div class="text">
						<p>Stasiun Geofisika Yogyakarta terletak di Jl. Wates Km.8 Jitengan, Balecatur, Gamping, Sleman, Daerah Istimewa Yogyakarta. Lokasi Stasiun Geofisika Yogyakarta jauh dari jalan raya karena Stasiun Geofisika Yogyakarta dilengkapi dengan peralatan pemantau gempabumi (seismograf) yang pemasangannya mengharuskan jauh dari gangguan aktivitas kendaraan berat maupun aktivitas pembangunan gedung tinggi.</p>
						<p>Stasiun Geofisika Yogyakarta mulai aktif beroperasi pada tahun 2004, sebagai pos pengamatan hujan, kemudian pada tahun 2005 berubah status menjadi Stasiun Geofisika Kelas IV Yogyakarta yang bertugas melakukan pengamatan, analisa dan pelayanan informasi geofisika. Pada pada tahun 2006 Stasiun Geofisika Kelas IV Yogyakarta meningkat menjadi Stasiun Geofisika Kelas I Yogyakarta dengan struktur organisasi yang berbeda. Stasiun ini merupakan ujung tombak Badan Meteorologi, Klimatologi, dan Geofisika di D.I. Yogyakarta dalam mengemban tugas negara sesuai Surat Keputusan Presiden RI No.45 tentang organisasi dan tata kerja yang meliputi: pengamatan, pengumpulan, analisa, penyebaran serta pelayanan geofisika.</p>
						<p>Berawal dari peristiwa gempabumi besar dan tsunami yang terjadi di Aceh, BMKG mulai membangun Pusat Gempa Nasional (PGN) yang berada di BMKG Pusat dibarengi dengan pembangunan sepuluh Pusat Gempa Regional (PGR) yang tersebar di Indonesia. Melalui keputusan Kepala Badan Meteorologi, Klimatologi, dan Geofisika pada awal 2007 tugas dan fungsi serta peran Stasiun Geofisika Yogyakarta ditingkatkan menjadi Pusat Gempa Regional Wilayah VII yang meliputi wilayah D.I. Yogyakarta, Jawa Tengah, sebagian Jawa Timur, dan Kalimantan Barat.</p>
						<p>Dalam rangka peningkatan pelayanan data dan informasi khususnya di bidang cuaca dan iklim, maka BMKG membangun Stasiun Klimatologi Kelas IV Mlati, salah satu Unit Pelaksana Teknis (UPT) yang pembangunannya dimulai pada tahun 2014.</p>
						<p>Stasiun Klimatologi Mlati berdiri di atas lahan seluas 8866 m2, terbagi menjadi 4 bagian utama yakni gedung operasional dan tata usaha (200 m2) yang terdiri dua lantai, gedung radar (64 m2) terdiri dari 4 lantai, taman alat (2400 m2), kebun percobaan (3600 m2). Stasiun Klimatologi Mlati terletak di Jalan Kabupaten Km 5.5, Duwet, Sendangadi, Mlati, Sleman, Daerah Istimewa Yogyakarta.</p>
						<p>Stasiun Klimatologi Mlati yang awalnya masih merupakan Pos Pengamatan Klimatologi dibawah Stasiun Geofisika Kelas I Yogyakarta, sudah beroperasi sejak pertengahan bulan April 2015. Stasiun Klimatologi Yogyakarta diresmikan oleh Mantan Wakil Gubernur Daerah Istimewa Yogyakarta, Kanjeng Gusti Pangeran Adipati Aryo (KGPAA) Paku Alam IX, Bendoro Raden Mas Haryo (Alm) pada tanggal 21 Oktober 2015. Terhitung Mulai Tanggal 29 November 2016, Pos Pengamatan Klimatologi Yogyakarta telah resmi ditetapkan dalam PERKA BMKG No. 9 Tahun 2016 untuk menjadi UPT tersendiri dengan nama Stasiun Klimatologi Kelas IV Mlati, Yogyakarta.</p>
						<p>Sampai saat ini di Daerah Istimewa Yogyakarta terdapat dua Unit Pelaksana Teknis (UPT) BMKG yaitu Stasiun Geofisika Yogyakarta dan Stasiun Klimatologi Mlati. Stasiun Geofisika Yogyakarta ditetapkan sebagai Stasiun Koordinator untuk UPT BMKG di wilayah Daerah Istimewa Yogyakarta. Dalam perkembangan pembangunan di masa yang akan datang tidak menutup kemungkinan adanya penambahan UPT di DIY sesuai dengan kebutuhan pemerintah dalam peningkatan pembangunan daerah. </p>
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