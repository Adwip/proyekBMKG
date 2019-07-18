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
				<h1 class="pull-left">ALur Permohonan Informasi</h1>
			</div>
		</div>
		<div class="container">
		  <center>
			<?php foreach ($alur as $alur) :?>
			<img src="<?php echo base_url()."asset/img/".$alur->gambar; ?>" style="margin-bottom: 100px;width: 70%;">
			<?php endforeach; ?>
		  </center>

		</div>
	</body>
	<footer class="footer">
		<?php $this->load->view("part/footer.php") ?>
	</footer>
</html>]