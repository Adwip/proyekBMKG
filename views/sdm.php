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
				<h1 class="pull-left">SDM BMKG DIY</h1>
			</div>
		</div>
		<div class="container" style="text-align: center;">
		<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto">			
		</div>
		<table id="datatable">
		  <thead>
		    <tr>
		      <th></th>
		      <th>Laki-laki</th>
		      <th>Perempuan</th>
		    </tr>
		  </thead>
		  <tbody>
				<tr>
		      <th><=25 TH</th>
						<?php foreach ($grafik_umur_lk as $gul): ?>
							<td width="150">
								<?php echo $gul->umur_1 ?>
							</td>
						<?php endforeach; ?>
						<?php foreach ($grafik_umur_p as $gup): ?>
							<td width="150">
								<?php echo $gup->umur_1 ?>
							</td>		
						<?php endforeach; ?>																	
				</tr>
		    <tr>
		      <th>26-30 TH</th>
						<?php foreach ($grafik_umur_lk as $gul): ?>
							<td width="150">
								<?php echo $gul->umur_2 ?>
							</td>
						<?php endforeach; ?>
						<?php foreach ($grafik_umur_p as $gup): ?>
							<td width="150">
								<?php echo $gup->umur_2 ?>
							</td>		
						<?php endforeach; ?>																	
				</tr>
		    <tr>
		      <th>31-35 TH</th>
						<?php foreach ($grafik_umur_lk as $gul): ?>
							<td width="150">
								<?php echo $gul->umur_3 ?>
							</td>
						<?php endforeach; ?>
						<?php foreach ($grafik_umur_p as $gup): ?>
							<td width="150">
								<?php echo $gup->umur_3 ?>
							</td>		
						<?php endforeach; ?>																	
				</tr>
		    <tr>
		      <th>36-40 TH</th>
						<?php foreach ($grafik_umur_lk as $gul): ?>
							<td width="150">
								<?php echo $gul->umur_4 ?>
							</td>
						<?php endforeach; ?>
						<?php foreach ($grafik_umur_p as $gup): ?>
							<td width="150">
								<?php echo $gup->umur_4 ?>
							</td>		
						<?php endforeach; ?>																	
				</tr>
		    <tr>
		      <th>41-45 TH</th>
						<?php foreach ($grafik_umur_lk as $gul): ?>
							<td width="150">
								<?php echo $gul->umur_5 ?>
							</td>
						<?php endforeach; ?>
						<?php foreach ($grafik_umur_p as $gup): ?>
							<td width="150">
								<?php echo $gup->umur_5 ?>
							</td>		
						<?php endforeach; ?>																	
				</tr>
		    <tr>
		      <th>46-50 TH</th>
						<?php foreach ($grafik_umur_lk as $gul): ?>
							<td width="150">
								<?php echo $gul->umur_6 ?>
							</td>
						<?php endforeach; ?>
						<?php foreach ($grafik_umur_p as $gup): ?>
							<td width="150">
								<?php echo $gup->umur_6 ?>
							</td>		
						<?php endforeach; ?>																	
				</tr>
		    <tr>
		      <th>51-55 TH</th>
						<?php foreach ($grafik_umur_lk as $gul): ?>
							<td width="150">
								<?php echo $gul->umur_7 ?>
							</td>
						<?php endforeach; ?>
						<?php foreach ($grafik_umur_p as $gup): ?>
							<td width="150">
								<?php echo $gup->umur_7 ?>
							</td>		
						<?php endforeach; ?>																	
				</tr>
		    <tr>
		      <th>>= 56 TH</th>
						<?php foreach ($grafik_umur_lk as $gul): ?>
							<td width="150">
								<?php echo $gul->umur_8 ?>
							</td>
						<?php endforeach; ?>
						<?php foreach ($grafik_umur_p as $gup): ?>
							<td width="150">
								<?php echo $gup->umur_8 ?>
							</td>		
						<?php endforeach; ?>																	
				</tr>
		  </tbody>
		</table>
		<script type="text/javascript">
			Highcharts.chart('container', {
			  data: {
			    table: 'datatable'
			  },
			  chart: {
			    type: 'column'
			  },
			  title: {
			    text: 'GRAFIK DISTRIBUSI UMUR PNS BMKG DIY'
			  },
			  yAxis: {
			    allowDecimals: false,
			    title: {
			      text: 'Units'
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
		<hr class="featurette-divider">
		<div id="containers" style="min-width: 310px; height: 400px; margin: 0 auto">
			
		</div>
		<table id="datatables">
		  <thead>
		    <tr>
		      <th></th>
		      <th>Laki-laki</th>
		      <th>Perempuan</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <th>I</th>
		      <?php foreach ($grafik_gol_lk as $ggl): ?>
							<td width="150">
								<?php echo $ggl->golongan_1 ?>
							</td>
						<?php endforeach; ?>
						<?php foreach ($grafik_gol_p as $ggp): ?>
							<td width="150">
								<?php echo $ggp->golongan_1 ?>
							</td>		
						<?php endforeach; ?>					
		    </tr>
		    <tr>
		      <th>II</th>
		      <?php foreach ($grafik_gol_lk as $ggl): ?>
							<td width="150">
								<?php echo $ggl->golongan_2 ?>
							</td>
						<?php endforeach; ?>
						<?php foreach ($grafik_gol_p as $ggp): ?>
							<td width="150">
								<?php echo $ggp->golongan_2 ?>
							</td>		
						<?php endforeach; ?>					
		    </tr>
		    <tr>
		      <th>III</th>
		      <?php foreach ($grafik_gol_lk as $ggl): ?>
							<td width="150">
								<?php echo $ggl->golongan_3 ?>
							</td>
						<?php endforeach; ?>
						<?php foreach ($grafik_gol_p as $ggp): ?>
							<td width="150">
								<?php echo $ggp->golongan_3 ?>
							</td>		
						<?php endforeach; ?>					
		    </tr>
		    <tr>
		      <th>IV</th>
		      <?php foreach ($grafik_gol_lk as $ggl): ?>
							<td width="150">
								<?php echo $ggl->golongan_4 ?>
							</td>
						<?php endforeach; ?>
						<?php foreach ($grafik_gol_p as $ggp): ?>
							<td width="150">
								<?php echo $ggp->golongan_4 ?>
							</td>		
						<?php endforeach; ?>					
		    </tr>
		  </tbody>
		</table>
		<script type="text/javascript">
			Highcharts.chart('containers', {
			  data: {
			    table: 'datatables'
			  },
			  chart: {
			    type: 'column'
			  },
			  title: {
			    text: 'GRAFIK DISTRIBUSI GOLONGAN KEPANGKATAN PNS BMKG DIY'
			  },
			  yAxis: {
			    allowDecimals: false,
			    title: {
			      text: 'Units'
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
		<hr class="featurette-divider">
		<div id="containerss" style="min-width: 310px; height: 400px; margin: 0 auto">
			
		</div>
		<table id="datatabless">
		  <thead>
		    <tr>
		      <th></th>
		      <th>Laki-laki</th>
		      <th>Perempuan</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <th>SMA</th>
		      <?php foreach ($grafik_pen_lk as $gpl): ?>
							<td width="150">
								<?php echo $gpl->sma ?>
							</td>
						<?php endforeach; ?>
						<?php foreach ($grafik_pen_p as $gpp): ?>
							<td width="150">
								<?php echo $gpp->sma ?>
							</td>		
						<?php endforeach; ?>					
		    </tr>
		    <tr>
		      <th>D1</th>
		      <?php foreach ($grafik_pen_lk as $gpl): ?>
							<td width="150">
								<?php echo $gpl->d1 ?>
							</td>
						<?php endforeach; ?>
						<?php foreach ($grafik_pen_p as $gpp): ?>
							<td width="150">
								<?php echo $gpp->d1 ?>
							</td>		
						<?php endforeach; ?>					
		    </tr>
		    <tr>
		      <th>D2</th>
		      <?php foreach ($grafik_pen_lk as $gpl): ?>
							<td width="150">
								<?php echo $gpl->d2 ?>
							</td>
						<?php endforeach; ?>
						<?php foreach ($grafik_pen_p as $gpp): ?>
							<td width="150">
								<?php echo $gpp->d2 ?>
							</td>		
						<?php endforeach; ?>					
		    </tr>
		    <tr>
		      <th>D3</th>
		      <?php foreach ($grafik_pen_lk as $gpl): ?>
							<td width="150">
								<?php echo $gpl->d3 ?>
							</td>
						<?php endforeach; ?>
						<?php foreach ($grafik_pen_p as $gpp): ?>
							<td width="150">
								<?php echo $gpp->d3 ?>
							</td>		
						<?php endforeach; ?>					
		    </tr>
		    <tr>
		      <th>D4</th>
					<?php foreach ($grafik_pen_lk as $gpl): ?>
							<td width="150">
								<?php echo $gpl->d4 ?>
							</td>
						<?php endforeach; ?>
						<?php foreach ($grafik_pen_p as $gpp): ?>
							<td width="150">
								<?php echo $gpp->d4 ?>
							</td>		
						<?php endforeach; ?>					
		    </tr>
		    <tr>
		      <th>S1</th>
		      <?php foreach ($grafik_pen_lk as $gpl): ?>
							<td width="150">
								<?php echo $gpl->s1 ?>
							</td>
						<?php endforeach; ?>
						<?php foreach ($grafik_pen_p as $gpp): ?>
							<td width="150">
								<?php echo $gpp->s1 ?>
							</td>		
						<?php endforeach; ?>					
		    </tr>
		    <tr>
		      <th>S2</th>
		      <?php foreach ($grafik_pen_lk as $gpl): ?>
							<td width="150">
								<?php echo $gpl->s2 ?>
							</td>
						<?php endforeach; ?>
						<?php foreach ($grafik_pen_p as $gpp): ?>
							<td width="150">
								<?php echo $gpp->s2 ?>
							</td>		
						<?php endforeach; ?>					
		    </tr>
		    <tr>
		      <th>S3</th>
		      <?php foreach ($grafik_pen_lk as $gpl): ?>
							<td width="150">
								<?php echo $gpl->s3 ?>
							</td>
						<?php endforeach; ?>
						<?php foreach ($grafik_pen_p as $gpp): ?>
							<td width="150">
								<?php echo $gpp->s3 ?>
							</td>		
						<?php endforeach; ?>					
		    </tr>
		  </tbody>
		</table>
		<script type="text/javascript">
			Highcharts.chart('containerss', {
			  data: {
			    table: 'datatabless'
			  },
			  chart: {
			    type: 'column'
			  },
			  title: {
			    text: 'GRAFIK DISTRIBUSI TINGKAT PENDIDIKAN PNS BMKG DIY'
			  },
			  yAxis: {
			    allowDecimals: false,
			    title: {
			      text: 'Units'
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
		<hr class="featurette-divider">
		</div>
	</body>
	<footer class="footer">
		<?php $this->load->view("part/footer.php") ?>
	</footer>
	<script>
	$(document).ready(function(){
   	$("#datatable").hide();
   	$("#datatables").hide();
 	$("#datatables").hide();
	$("#datatabless").hide();
	});
	</script>

</html>