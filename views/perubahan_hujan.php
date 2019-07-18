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
				<h1 class="pull-left">Informasi Perubahan Normal Curah Hujan</h1>
			</div>
		</div>
		<div class="container">

			<p>Indikasi fenomena perubahan iklim di Indonesia dapat diamati dari perubahan pola curah hujan rata-rata di beberapa wilayah di Indonesia. Guna mengidentifikasi wilayah-wilayah yang mengalami perubahan pola curah hujan jangka panjang di Indonesia, maka BMKG mengeluarkan produk informasi Perubahan Normal Curah Hujan dalam bentuk atlas.</p>
			<p>Perubahan normal curah hujan memuat informasi perubahan/ deviasi terhadap normal curah hujan 30 tahun di Indonesia. Data yang digunakan adalah data curah hujan rata-rata bulanan dari periode tahun 1980-2010. di Indonesia. Dalam gafik diperlihatkan perubahan/penyimpangan pola curah hujan dari normalnya pada 10 tahun terakhir di Indonesia.</p>
			
			<img id="myImg" class="center" src="<?php echo base_url();?>asset/img/perubahan hujan/PN_CH.jpg" style="max-width: 70%;margin: auto;" onclick="onClick(this)">

			<!-- The Modal -->
				<div id="modal01" class="w3-modal" onclick="this.style.display='none'">
				  <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
				  <div class="w3-modal-content w3-animate-zoom">
				    <img id="img01" style="width:100%" class="w3-hover-opacity">
				  </div>
				</div>


				<script>
				function onClick(element) {
				  document.getElementById("img01").src = element.src;
				  document.getElementById("modal01").style.display = "block";
				}
				</script>

			
		</div>
	</body>
	<footer class="footer">
		<?php $this->load->view("part/footer.php") ?>
	</footer>
</html>