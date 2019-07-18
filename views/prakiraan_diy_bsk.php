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
			<h1 class="pull-left">Prakiraan Cuaca Yogyakarta</h1>
		</div>
	</div>
	<div class="container">
		<ul class="nav nav-pills" style="margin-top: 30px;">
			<li class="nav-item">
				<a class="nav-link" href="<?php echo site_url('cuaca/prakiraan_cuaca') ?>">
					<?php
					$tgl=date(', d ');
					$year=date(' Y');
					$day = date('D');
					$dayList = array(
						'Sun' => 'Minggu',
						'Mon' => 'Senin',
						'Tue' => 'Selasa',
						'Wed' => 'Rabu',
						'Thu' => 'Kamis',
						'Fri' => 'Jumat',
						'Sat' => 'Sabtu'
						);
					$mon = date('m');
					$monList = array(
						'01' => 'Januari',
						'02' => 'Februari',
						'03' => 'Maret',
						'04' => 'April',
						'05' => 'Mei',
						'06' => 'Juni',
						'07' => 'Juli',
						'08' => 'Agustus',
						'09' => 'September',
						'10' => 'Oktober',
						'11' => 'November',
						'12' => 'Desember',
						);
					echo $dayList[$day]. $tgl. $monList[$mon]. $year;
					date_default_timezone_set('Asia/Jakarta');

					?></a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" href="<?php echo site_url('cuaca/prakiraan_cuaca_bsk') ?>"  style="background-color: #007bff;">
						<?php
						$tglbsk=date(', d ', strtotime("+1 day"));
						$year=date(' Y');
						$daybsk = date('D', strtotime("+1 day"));
						$dayList = array(
							'Sun' => 'Minggu',
							'Mon' => 'Senin',
							'Tue' => 'Selasa',
							'Wed' => 'Rabu',
							'Thu' => 'Kamis',
							'Fri' => 'Jumat',
							'Sat' => 'Sabtu'
							);
						$mon = date('m');
						$monList = array(
							'01' => 'Januari',
							'02' => 'Februari',
							'03' => 'Maret',
							'04' => 'April',
							'05' => 'Mei',
							'06' => 'Juni',
							'07' => 'Juli',
							'08' => 'Agustus',
							'09' => 'September',
							'10' => 'Oktober',
							'11' => 'November',
							'12' => 'Desember',
							);
						echo $dayList[$daybsk]. $tglbsk. $monList[$mon]. $year;
						date_default_timezone_set('Asia/Jakarta');

						?></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo site_url('cuaca/prakiraan_cuaca_ls') ?>"><?php
							$tglls=date(', d ', strtotime("+2 day"));
							$year=date(' Y');
							$dayls = date('D', strtotime("+2 day"));
							$dayList = array(
								'Sun' => 'Minggu',
								'Mon' => 'Senin',
								'Tue' => 'Selasa',
								'Wed' => 'Rabu',
								'Thu' => 'Kamis',
								'Fri' => 'Jumat',
								'Sat' => 'Sabtu'
								);
							$mon = date('m');
							$monList = array(
								'01' => 'Januari',
								'02' => 'Februari',
								'03' => 'Maret',
								'04' => 'April',
								'05' => 'Mei',
								'06' => 'Juni',
								'07' => 'Juli',
								'08' => 'Agustus',
								'09' => 'September',
								'10' => 'Oktober',
								'11' => 'November',
								'12' => 'Desember',
								);
							echo $dayList[$dayls]. $tglls. $monList[$mon]. $year;
							date_default_timezone_set('Asia/Jakarta');

							?></a>
						</li>
					</ul>
				</div>

				<div class="container" style="text-align: center;">
					<div class="table-responsive">
						<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th scope="col">Kabupaten</th>
									<th scope="col" colspan="4">Pagi</th>
									<th scope="col" colspan="4">Siang</th>
									<th scope="col" colspan="4">Malam</th>
									<th scope="col" colspan="4">Dinihari</th>
								</tr>
							</thead>
							<tbody>
							<?php echo $cuaca ?>		
							</tbody>
						</table>
					</div>
				</div>

	<footer class="footer">
		<?php $this->load->view("part/footer.php") ?>
	</footer>
</body>
</html>