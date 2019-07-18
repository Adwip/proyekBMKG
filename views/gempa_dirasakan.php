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
				<h1 class="pull-left">Gempa Bumi Dirasakan</h1>
			</div>
		</div>
		<div class="container" style="text-align: center;">
			<table class="table table-hover">
			    <tr>
			      <th scope="col">No</th>
			      <th scope="col">Waktu Gempa</th>
			      <th scope="col">Lintang</th>
			      <th scope="col">Bujur</th>
			      <th scope="col">Magnitudo</th>
			      <th scope="col">Kedalaman</th>
			      <th scope="col">Wilayah</th>
				  <th scope="col">Potensi Tsunami</th>
				  <th scope="col">Indeks MMI</th>
			  </thead>
			   <tbody>
			  <?php $No=1;?>
				<?php foreach ($gempa as $gempa): ?>
				<?php 
					if ($gempa->magnitudo >= 5){
				?>	<tr>
					<td width="150">
					<?php echo $No;?><td>
					<?php echo date('d-m-Y H:i:s',strtotime($gempa->waktu_terjadi)) ?></td>
					<td><?php echo $gempa ->lintang ?></td>
					<td><?php echo $gempa->bujur ?></td>
					<td><?php echo $gempa->magnitudo ?>					
					<td><?php echo $gempa->kedalaman ?></td>
					<td><?php echo $gempa->wilayah ?></td>
					<td><?php echo $gempa->potensi ?></td>
					<td><?php echo $gempa->skala_mmi ?></td>
					</tr>
					<?php $No++; 

					}
					?>
					
				<?php endforeach; ?>

	          </tbody>
			</table>
		</div>
	</body>
	<footer class="footer">
		<?php $this->load->view("part/footer.php") ?>
	</footer>
</html>