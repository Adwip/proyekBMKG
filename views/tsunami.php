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
				<h1 class="pull-left">Tsunami terkini di Indonesia</h1>
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
			    </tr>
			  </thead>
			  <tbody>
			  <?php $No=1;?>
				<?php foreach ($tsunami as $tsunami): ?>
					<tr>
					<td width="150">
					<?php echo $No;?>
					<td>
					<?php echo $tsunami->tanggal_kejadian ?> <?php echo $tsunami->waktu_kejadian ?>
					</td>
					<td><?php echo $tsunami ->lokasi ?>
					</td>
					<td><?php echo $tsunami->magnitude ?>
					</td>
					<td><?php echo $tsunami->kedalaman ?>					
					<td><?php echo $tsunami->Wilayah ?> 					
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