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
				<h1 class="pull-left">STRUKTUR ORGANISASI</h1>
			</div>
		</div>
		<div class="container">
		  <center>
			<h3><strong>STRUKTUR ORGANISASI</strong></h3>
			<h3><strong>STASIUN GEOFISIKA YOGYAKARTA</strong></h3>
			<?php foreach ($struktur as $struktur) :?>
			<img src="<?php echo base_url()."../File_BMKG/Profil/".$struktur->isi; ?>" style="margin-bottom: 100px;width: 70%;">
			<?php endforeach; ?>
			<h3><strong>STRUKTUR ORGANISASI</strong></h3>
			<h3><strong>STASIUN KLIMATOLOGI MLATI</strong></h3>
			<?php foreach ($struktur_staklim as $struktur1) :?>
			<img src="<?php echo base_url()."../File_BMKG/Profil/".$struktur1->isi; ?>" style="margin-bottom: 100px;width: 70%;">
			<?php endforeach; ?>
		  </center>

		</div>
	</body>
	<footer class="footer">
		<?php $this->load->view("part/footer.php") ?>
	</footer>
</html>]