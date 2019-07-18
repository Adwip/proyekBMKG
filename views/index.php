
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!doctype html>
<html lang="en">

<head>
	<?php $this->load->view("part/head.php") ?>
</head>
<header class="header">
	<?php $this->load->view("part/header.php") ?>
</header>

<body>
	<div class="bg" style="background-image:url('<?php echo base_url();?>asset/img/prambanan1.jpg'); background-repeat: no-repeat; height: 700px;">
		<div class="container">
			<div class="row" style="height:650px">
				<div class="col-md-8" style="background: #0000">
					<div class="berita">
						<h5 style="border-bottom-style: solid;border-bottom-width: 1px; width: 150px;">Berita Terkini</h5>
						<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
							<ol class="carousel-indicators">
								<li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
								<li data-target="#carouselExampleControls" data-slide-to="1"></li>
								<li data-target="#carouselExampleControls" data-slide-to="2"></li>
							</ol>
							<?php 
					  			foreach ($berita as $key => $beritas): ?>
							<div class="carousel-item <?php echo $key == 0 ?  " active" : null ?>">
								<img class="d-block w-100" src="<?php echo base_url()."../File_BMKG/Berita/".$beritas->foto;
									?>" style="width:40px;height:400px;">
								<div class="carousel-caption d-none d-md-block">
									<h5 class="font-weight-bold" style="text-align: left;"><a href="<?php echo site_url('publikasi/berita') ?>" style="text-decoration: none;color: white;"><?php echo $beritas->judul;  ?></h5>
								</div>
							</div>
							<?php endforeach;?>
							</div>
							<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
					<div class="cuaca-hari-ini" >
						<div align="center" style="border-bottom: 1px solid black;">
							<h4 id="city">BMKG DIY</h4>
						</div>
						<div id="list-cuaca">
							<ul id="daftar-cuaca">
							<li align="center" class="box-cuaca" style="background-color: #e1eafa;">
									<img style="margin-top: 8px;" width="65" height="90" src="http://localhost/kp/asset/img/logo_BMKG.PNG" alt=""><br><br>
									<h6>Data belum ada</h6>
									<h5><strong>Malam</strong></h5>
								</li>
								<li align="center" class="box-cuaca" style="background-color: #e1eafa;">
									<img style="margin-top: 8px;" width="65" height="90" src="http://localhost/kp/asset/img/logo_BMKG.PNG" alt=""><br><br>
									<h6>Data belum ada</h6>
									<h5><strong>Malam</strong></h5>
								</li>
								<li align="center" class="box-cuaca" style="background-color: #e1eafa;">
									<img style="margin-top: 8px;" width="65" height="90" src="http://localhost/kp/asset/img/logo_BMKG.PNG" alt=""><br><br>
									<h6>Data belum ada</h6>
									<h5><strong>Malam</strong></h5>
								</li>
								<li align="center" class="box-cuaca" style="background-color: #e1eafa;">
									<img style="margin-top: 8px;" width="65" height="90" src="http://localhost/kp/asset/img/logo_BMKG.PNG" alt=""><br><br>
									<h6>Data belum ada</h6>
									<h5><strong>Malam</strong></h5>
								</li>
							</ul>
						</div>
					</div>
			</div>
		<div class="col-md-4" style="background: #0000; ">
			<ul class="nav nav-pills" style="margin-top: 30px;">
				<li class="nav-item">
					<a class="nav-link active" href="<?php echo site_url('cuaca/prakiraan_cuaca') ?>" style="background-color: #007bff;">Prakiraan
						Cuaca Hari Ini</a>
				</li>
			</ul>
			<div class="cuaca" style="width: 300px;" >
				<div id="carouselExampleControl" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<?php echo $cuaca ?>						
						<a class="carousel-control-prev" href="#carouselExampleControl" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleControl" role="button" data-slide="next" style="right: 0;">
							<span class="carousel-control-next-icon"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>
			<div class="gempa">
				<ul class="nav nav-pills" style="margin-top: 30px;">
					<li class="nav-item">
						<a class="nav-link active" href="<?php echo site_url('gempa/gempa_dirasakan') ?>" style="background-color: #007bff;">Gempa
							dirasakan saat ini</a>
					</li>
				</ul>
				<div class="gp">
					<div class="row">
						<div class="col-md-6 col-xs-6">

							<img src="https://dataweb.bmkg.go.id/INATEWS/eqmap.gif" style="width: 150px;margin: 10px">
						</div>
						<div class="col-md-6 col-xs-6" style="padding-right: 0px !important;padding-left: 0px !important;">
							<?php 
							foreach ($gempa as $gempa) {
							?>
							<ul class="list-unstyled">
								<li><span>
										<?php echo $gempa->waktu_terjadi?></span></li>
								<li><span class="font-weight-bold">Kekuatan : </span></li>
								<li><span>
										<?php echo $gempa->magnitudo?></span></li>
								<li><span class="font-weight-bold">Kedalaman : </span></li>
								<li><span>
										<?php echo $gempa->kedalaman?></span></li>
								<li><span class="font-weight-bold">Lokasi : </span></li>
								<li><span>
										<?php echo $gempa->bujur?> BS
										<?php echo $gempa->lintang?> LS</span></li>
							</ul>
						</div>
					</div>
						<ul class="list-unstyled" style="margin-left: 15px;">
							<span class="font-weight-bold">Keterangan : </span>
							<span>
								<?php echo $gempa->wilayah?></span>
						</ul>

						<?php
						}
						?>

				</div>

				</div>
			</div>
		</div>
	</div>
	</div>
	</div>
	<section id="pengumuman">
		<div class="container">
			<div class="row" style="background: #eaeaea;">
					<div class="col-sm">
						<div class="berita">
							<h5 style="border-bottom-style: solid;border-bottom-width: 1px; width: 100px;">Berita</h5>
							<div id="foto" class="fade-in">
								<div class="blog">
								<?php 
				  				  	foreach ($beritaa as $berita) {
				  				  	?>
									<div class="berita-foto">
										<img src="<?php echo base_url()."../File_BMKG/Berita/".$berita->foto;
										?>" width="120" height="72">
									</div>
									<div class="blog-desc">
										<h3><a href="<?php echo base_url().('index.php/publikasi/detailberita?id=').$berita->id_berita ?>"><?php echo $berita->judul;  ?></a></h3>
										<ul class="blog-tgl">
											<li><?php echo date("d/m/Y",strtotime($berita->tanggal_input));  ?></li>
										</ul>
									</div>
									<?php
				  					}
				  				 ?>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm">
						<div class="artikel">
							<h5 style="border-bottom-style: solid;border-bottom-width: 1px; width: 100px;">Artikel</h5>
							<div class="blog">
								<div class="blog-desc">
								<?php 
				  				  	foreach ($artikel as $art) {
				  				  	?>
									<div class="blog-desc">
										<h3><a href="<?php echo base_url().('index.php/publikasi/detailartikel?id=').$art->id_art ?>"><?php echo $art->judul;  ?></a></h3>
										<ul class="blog-tgl">
											<li><?php echo date("d/m/Y",strtotime($art->tanggal_input));  ?></li>
										</ul>
									</div>
									<?php
				  					}
				  				 ?>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm">
						<div class="pengumuman">
							<h5 style="border-bottom-style: solid;border-bottom-width: 1px; width: 130px;">Pengumuman</h5>
							<div class="blog">
								<div class="blog-desc">
								<?php 
				  				  	foreach ($pengumuman as $pengumuman) {
				  				  	?>
									<div class="blog-desc">
										<h3><a href="<?php echo base_url().('index.php/publikasi/detailpengumuman?id=').$pengumuman->id_peng ?>"><?php echo $pengumuman->judul;  ?></a></h3>
										<ul class="blog-tgl">
											<li><?php echo date("d/m/Y",strtotime($pengumuman->tanggal_input));  ?></li>
										</ul>
									</div>
									<?php
				  					}
				  				 ?>
								</div>
							</div>
						</div>
					</div>
			</div>
		</div>
	</section>
</body>
<style>
	.carousel-control-prev-icon,
.carousel-control-next-icon {
  height: 100px;
  width: 100px;
  outline: black;
  background-image: none;
}

.carousel-control-next-icon:after
{
  content: '>';
  font-size: 55px;
  color: grey;
}

.carousel-control-prev-icon:after {
  content: '<';
  font-size: 55px;
  color: grey;
}
.cuaca-hari-ini{
	height: 220px;
	border: 1px solid black;
}
#list-cuaca ul{
	list-style-type: none;
	margin: 0 0 0 0px;
    padding: 0;
}
#list-cuaca ul li{
	float: left;
}
.box-cuaca{
	height: 100%;	
	width: 25%;
	border-right: 1px solid black;
}
.box-cuaca:last-child{
	height: 100%;	
	width: 25%;
	border: none;
}
</style>

<script>
	var cuaca = JSON.parse('<?php echo $list_cuaca ?>') ;
	var path = '<?php echo base_url('../File_BMKG/Cuaca/icon_cuaca/') ?>'
	var bmkg = '<?php echo base_url('asset/img/logo_BMKG.PNG') ?>'
	var kota = new Array('Yogyakarta','Sleman','Bantul','Kulonprogo','Gunungkidul')
	var waktu = new Array('Pagi','Siang','Malam','Dini hari')
	var list= new Array();
	for (var i = 0; i < 5; i++) {
		list[i]=''
		for (var l = 0; l < 4; l++) {
			if (cuaca[i][l]!=null) {
				list[i] += '<li align="center" class="box-cuaca" style="background-color: #e1eafa;" >									<img width="100" height="100" src="'+path+cuaca[i][l]['Cuaca']+'" alt=""><br>							<small>'+cuaca[i][l]['Jenis']+'</small><br>																<small>'+cuaca[i][l]['suhu_min']+' °C - '+cuaca[i][l]['suhu_maks']+' °C || '+cuaca[i][l]				['kelembapan_min']+'% - '+cuaca[i][l]['kelembapan_maks']+'%</small>										<h5><strong>Pagi</strong></h5>																		</li>'
			}else{
				list[i] += '<li align="center" class="box-cuaca" style="background-color: #e1eafa;">									<img style="margin-top: 8px;" width="65" height="90" src="'+bmkg+'" alt=""><br><br>									<h6>Data belum ada</h6>																					<h5><strong>Malam</strong></h5>																	</li>'
			}
		}
	}
	
	$(document).ready(function(){
		i=0;
		setInterval(function (){
			$('#city').html(kota[i])
			$('#daftar-cuaca').html(list[i])
			i=i+1;
			if (i==5) {
				i=0
			}
		},4000)
	})

	
</script>
<footer class="footer">
	<?php $this->load->view("part/footer.php") ?>
</footer>

</html>
