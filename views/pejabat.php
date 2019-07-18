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
				<h1 class="pull-left">PEJABAT BMKG DIY</h1>
			</div>
		</div>
		<div class="container">
			<h3><strong>A.	STASIUN GEOFISIKA YOGYAKARTA</strong>
		</div>
		<div class="container" style="text-align: center;">
			<table class="table table-hover">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Jabatan</th>
			      <th scope="col">Nama</th>
			      <th scope="col">Foto</th>
			    </tr>
			  </thead>
			   <tbody>
			  <?php $No=1;?>
				<?php foreach ($pejabat as $pejabat): ?>
					<tr>
					<td width="150">
					<?php echo $No;?>
					<td>
					<?php echo $pejabat->jabatan ?>
					</td>
					<td><?php echo $pejabat ->nama ?>
					</td>
					<td> 
					<img src="<?php echo base_url()."../File_BMKG/Profil/Pegawai/".$pejabat->gambar;
					 ?>"
					 style="width: 100px; height: 100px;" >; 
					</td>
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