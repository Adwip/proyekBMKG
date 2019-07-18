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
				<h1 class="pull-left">Ekstrem Perubahan Iklim</h1>
			</div>
		</div>
		<div class="container">

			<p>Peta anomali suhu udara tahun 2016 terhadap Normal (1981-2010) telah mununjukan bahwa tahun 2016 merupakan tahun terpanas sepanjang sejarah. Pengamatan BMKG yang sejalan dengan pernyataan organisasi meteorology dunia (WMO), menunjukkan bahwa tahun 2016 memiliki suhu rata-rata 1,2 °C lebih tinggi dibandingkan dengan Normalnya (yaitu rata-rata tahun 1981-2010). Bahkan anomali suhu tahun 2016 ini melampaui anomali suhu tahun 2015 yang mencapai 1 °C. Diketahui bahwa anomali suhu rata-rata untuk tahun 2015 sangat dipengaruhi oleh fenomena El-Nino yang menimbulkan kekeringan di Indonesia. Sementara untuk tahun 2016 tidak ada fenomena yang disebut El-Nino, hal ini mengindikasikan bahwa unsur gas rumah kaca menunjukkan pengaruhnya terhadap suhu udara.</p>
			<p>Peta anomali suhu tahun 2016 terhadap Normal di atas menunjukkan anomali suhu terbesar tercatat di provinsi DI. Yogyakarta yang mencapai 2,5 °C dan disusul kemudian oleh provinsi Bali yang mencapai anomali suhu sebesar 2 °C. Sementara anomali suhu udara di provinsi lainnya bervariasi di bawah 2 °C.</p>
			<p>Untuk keperluan yang lebih lanjut dan lebih mendetail, dapat dilakukan dengan menghubungi Pusat Informasi Perubahan Iklim BMKG. </p>
			<h4>Anomali Suhu Udara Tahun 2016 Terhadap Normal</h4>
			
			<img id="myImg" class="center" src="<?php echo base_url();?>asset/img/anomali_suhu_2016.png" style="max-width: 70%;margin: auto;" onclick="onClick(this)">

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