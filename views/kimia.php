<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!doctype html>
<html lang="en">
	<head>
		<?php $this->load->view("part/head.php") ?>
		<script src="https://code.highcharts.com/highcharts.js"></script>
		<script src="https://code.highcharts.com/modules/data.js"></script>
		<script src="https://code.highcharts.com/modules/exporting.js"></script>
		<script src="https://code.highcharts.com/modules/export-data.js"></script>

	</head>
	<header class="header">
		<?php $this->load->view("part/header.php") ?>
	</header>
	<body>
		<div class="breadcrumbs breadcrumbs-light">
			<div class="container">
				<h1 class="pull-left">Kimia Air Hujan</h1>
			</div>
		</div>
		<div class="container">
		<?php 
		$year=date(' Y');
		$bulan = date('m', time());
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
		?>
		<h3 class="font-weight-bold" style="margin-top: 20px;">Informasi Kimia Air Hujan</h3>
		<?php foreach ($ket as $ket){ ?>
			<p><?php echo $ket->isi ?></p>		
		<?php } ?>
		</div>
		<div class="container" style="text-align: center;">
		<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto">			
		</div>
			<table id="kimia">
				 <thead>
		    		<tr>
		      			<th></th>
		      			<th>Konsentrasi</th>
		   			</tr>
		  		</thead>
				<tbody>		
					<?php foreach ($kah as $kah): ?>
						<tr>
							<th width="150">
								<p>Minggu ke- <?php echo $kah->minggu ?></p>
							</th>
							<td width="150">
								<?php echo $kah->nilai_ph ?>
							</td>								
						</tr>
					<?php endforeach; ?>

				</tbody>
			</table>
		<script type="text/javascript">
			Highcharts.chart('container', {
			  data: {
			    table: 'kimia'
			  },
			  chart: {
			    type: 'column'
			  },
			  title: {
			    text: 'Pemantauan pH Air Hujan <?php echo $monList[$bulan].$year ?>'
			  },
			  yAxis: {
					plotLines: [{
                  value: 7,
                  width: 1,
                  color: 'red'
               }],
			    allowDecimals: true,
			    title: {
			      text: 'Konsentrasi pH'
					
			    }
			  },
			  tooltip: {
			    formatter: function () {
			      return '<b>' + this.series.name + '</b><br/>' +
			        this.point.y + ' ' + this.point.name.toLowerCase();
			    }
			  }
			});
		</script>
			<div class="keterangan" style="text-align:left;">
				<p>Keterangan :</p>
				<p>Garis merah merupakan ambang batas Ph</p>
			</div>
		</div>
	</body>
	<footer class="footer">
		<?php $this->load->view("part/footer.php") ?>
	</footer>
	<script>
	$(document).ready(function(){
   	$("#kimia").hide();
	});
	</script>
</html>