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
			<h1 class="pull-left"><a href="<?php echo site_url('publikasi/artikel') ?>">Artikel</a></h1>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-7">
			<?php foreach ($detailartikel as $art) {
			?>
			<h2 class="font-weight-bold"><?php echo $art->judul;  ?></h2>
			<div class="pos" style="font-size: 10px">
				<p>Posted on <?php echo date("d/m/Y",strtotime($art->tanggal_input));  ?> by <?php echo $art->penyusun; ?></p>
			</div>
				<p><?php echo $art->isi; ?></p>
				<div class="container">
					<iframe src="<?php echo base_url()."../File_BMKG/Artikel/".$art->file;
					?>" style="width:800px;height:1200px"></iframe>		
				</div>
				<?php
			}
			?>
			</div>
		</div>	
	</div>
	</body>
	<footer class="footer">
		<?php $this->load->view("part/footer.php") ?>
	</footer>
	</html>