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
				<h1 class="pull-left">Jaringan Dokumentasi Informasi Hukum</h1>
			</div>
		</div>
		<div class="container" style="text-align: center;">

			<table class="table table-hover">
			  <thead>
			    <tr>
			      <th scope="col">No</th>
			      <th scope="col">Jenis Peraturan</th>
			      <th scope="col">No Peraturan</th>
			      <th scope="col">Tentang</th>
			      <th scope="col">File</th>
			    </tr>
			  </thead>
			  <tbody>
			  <?php $No=1;?>
				<?php foreach ($jdih as $jdih): ?>
					<tr>
					<td width="150">
					<?php echo $No;?>
					<td>
					<?php echo $jdih->jenis_aturan ?>
					</td>
					<td><?php echo $jdih->nomor ?>
					</td>
					<td><?php echo $jdih->tentang ?>
					</td>
					<td><a href="<?php echo base_url()."../File_BMKG\jdih/".$jdih->pdf; ?>"><?php echo $jdih->pdf ?> </a> 					
					</tr>
					<?php $No++; ?>
				<?php endforeach; ?>

	          </tbody>
			</table>
		</div>
	</body>
	<footer class="footer">
		<?php $this->load->view("part/footer.php") ?>
	</footer>
</html>