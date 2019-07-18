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
				<h1 class="pull-left">Gempa Bumi Terkini</h1>
			</div>
		</div>
		<div class="container" style="text-align: center;">

			<table class="table table-hover">
			  <thead>
			    <tr>
			      <th scope="col">No</th>
			      <th scope="col">Waktu Gempa</th>
			      <th scope="col">Lintang</th>
			      <th scope="col">Bujur</th>
			      <th scope="col">Magnitudo</th>
			      <th scope="col">Kedalaman</th>
			      <th scope="col">Dirasakan</th>
			    </tr>
			  </thead>
			  <tbody>
			  <?php $No=1;?>
				<?php foreach ($gempa as $gempa): ?>
					<tr>
					<td width="150">
					<?php echo $No;?>
					<td>
					<?php echo $gempa->waktu_terjadi ?>
					</td>
					<td><?php echo $gempa ->lintang ?>
					</td>
					<td><?php echo $gempa->bujur ?>
					</td>
					<td><?php echo $gempa->magnitudo ?>					
					<td><?php echo $gempa->kedalaman ?> 												
					</td>
					<td><?php echo $gempa->wilayah ?>												
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