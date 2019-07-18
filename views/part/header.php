					<div class="tanggal" style="color: white">	
						<div class="container" style="margin-bottom: 0px">
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

							?>
	 						<body onLoad="textdates()" bgcolor="#222222" topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0" marginwidth="0" marginheight="0">
							<div class="jam" style="float: right;">
								<span id="sTime" OnMouseOver="displaySeconds=true;textdates();" OnMouseOut="displaySeconds=false;">sinkronisasi jam server ...</span>
							</div>
							</body>										
						</div>
					</div>
		<div class="sticky-top" id="myHeader" style="background: white">
			<div style="height: 100px;" class="header">			
				<div class="container">
					<div class ="logo_left">
						<a class ="logo_img" href="<?php echo site_url('Welcome/index') ?>"><img src="<?php echo base_url(); ?>asset/img/logo_BMKG.PNG" width="50" height="60"></a>
					</div>
					<div class="coba" style="margin-left: 80px;">
						<h5 class="judul"><a class="b" href="<?php echo site_url('Welcome/index') ?>">BADAN METEOROLOGI KLIMATOLOGI DAN GEOFISIKA DAERAH ISTIMEWA YOGYAKARTA</a></h5>
						<strong style="font-weight: 700 margin-left: 15px;">Cepat, Tepat, Akurat, Luas dan Mudah dipahami</strong>
					</div>

					<nav style="height: 40px; margin-left: 5px;" class="navbar navbar-expand-md navbar-light bg-light">
					<a class="navbar-brand" href="#"></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNavDropdown">
						<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="<?php echo site_url('Welcome/index') ?>">Home</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Profil
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<li><a class="dropdown-item" href="<?php echo site_url('profil/sejarah') ?>">Sejarah</a></li>
							<li><a class="dropdown-item" href="<?php echo site_url('profil/visi') ?>">Visi dan Misi</a></li>
							<li><a class="dropdown-item" href="<?php echo site_url('profil/tugas') ?>">Tugas dan Fungsi</a></li>
							<li><a class="dropdown-item" href="<?php echo site_url('profil/struktur') ?>">Struktur Organisasi</a></li>
							<li><a class="dropdown-item" href="<?php echo site_url('profil/pejabat') ?>">Pejabat BMKG DIY</a></li>
							<li><a class="dropdown-item" href="<?php echo site_url('profil/upt') ?>">UPT BMKG DIY</a></li>
							<li><a class="dropdown-item" href="<?php echo site_url('profil/sdm') ?>">SDM BMKG DIY</a></li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Cuaca
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<li><a class="dropdown-item" href="<?php echo site_url('cuaca/prakiraan_cuaca') ?>">Prakiraan Cuaca DIY</a></li>
							<li><a class="dropdown-item" href="<?php echo site_url('cuaca/citra_radar') ?>">Citra Radar</a></li>
							<li><a class="dropdown-item" href="https://www.youtube.com/channel/UCzxAF0Oc_Fxi2nJtT4uMfIA">Cuaca Destinasi Wisata</a></li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Iklim
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Prakiraan Musim</a>
								<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="<?php echo site_url('iklim/prakiraan_hujan') ?>">Prakiraan Hujan Bulanan</a></li>
									<li><a class="dropdown-item" href="<?php echo site_url('iklim/prakiraan_musim') ?>">Prakiraan Musim</a></li>
								</ul>
								</li>
								<li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Analisis Iklim</a>
								<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="<?php echo site_url('iklim/informasi_hujan') ?>">Informasi Hujan Bulanan</a></li>
								<li><a class="dropdown-item" href="<?php echo site_url('iklim/dinamika_atmosfer') ?>">Dinamika Atmosfer</a></li>
								</ul>
								</li>
								<li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Informasi Iklim</a>
								<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="<?php echo site_url('iklim/informasi_hth') ?>">Informasi HTH</a></li>
								</ul>
								</li>
								<li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Perubahan Iklim</a>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="<?php echo site_url('iklim/tren_hujan') ?>">Tren Curah Hujan</a></li>
									<li><a class="dropdown-item" href="<?php echo site_url('iklim/tren_suhu') ?>">Tren Suhu</a></li>
								</ul>
								</li>
							</ul>
							</li>
							<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Kualitas Udara
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<li><a class="dropdown-item" href="<?php echo site_url('kualitas/kimia') ?>">Kimia Air Hujan</a></li>
							<li><a class="dropdown-item" href="<?php echo site_url('kualitas/spm') ?>">Informasi SPM</a></li>
							</ul>
							</li>
							<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Gempa Bumi & Tsunami
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Gempa Bumi</a>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="<?php echo site_url('gempa/gempa_dirasakan') ?>">Gempa Bumi Dirasakan</a></li>
									<li><a class="dropdown-item" href="<?php echo site_url('gempa/gempa_terkini') ?>">Gempa Bumi Terkini </a></li>
									<li><a class="dropdown-item" href="<?php echo site_url('gempa/antisipasi') ?>">Antisipasi Gempa Bumi</a></li>
									<li><a class="dropdown-item" href="<?php echo site_url('gempa/skala') ?>">Skala MMI</a></li>
								</ul>
								</li>
								<li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Geofisika Potensial dan Tanda Waktu</a>
								<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="<?php echo site_url('gempa/tandaterbit') ?>">Tanda Waktu</a></li>
										<li><a class="dropdown-item" href="<?php echo site_url('gempa/petir') ?>">Peta Sambaran Petir</a></li>
												<li><a class="dropdown-item" href="<?php echo site_url('gempa/ker_petir') ?>">Peta Kerapatan Petir</a></li>
								</ul>
								</li>
							</ul>
							</li>
							<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Pelayanan Informasi
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<li><a class="dropdown-item" href="<?php echo site_url('pelayanan/tarif_pelayanan') ?>">Jenis dan Tarif Pelayanan</a></li>
							<li><a class="dropdown-item" href="<?php echo site_url('pelayanan/form_pelayanan') ?>">Form Pelayanan</a></li>
							<li><a class="dropdown-item" href="<?php echo site_url('pelayanan/syarat_permohonan') ?>">Syarat Permohonan Informasi</a></li>
							<li><a class="dropdown-item" href="<?php echo site_url('pelayanan/alur_permohonan') ?>">Alur Permohonan Informasi</a></li>
							<li><a class="dropdown-item" href="https://docs.google.com/forms/d/e/1FAIpQLSczHEF2JNsQS7b_d5Ysc6wiVn-uTogS6YyWhgHB8SFb_3oMXA/viewform?usp=sf_link">Kuisioner Indek Kepuasaan Masyarakat</a></li>
							</ul>
							</li>
							<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Publikasi
							</a>
				        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				          <li><a class="dropdown-item" href="<?php echo site_url('publikasi/berita') ?>">Berita</a></li>
				          <li><a class="dropdown-item" href="<?php echo site_url('publikasi/artikel') ?>">Artikel</a></li>
				          <li><a class="dropdown-item" href="<?php echo site_url('publikasi/pengumuman') ?>">Pengumuman</a></li>
				          <li><a class="dropdown-item" href="<?php echo site_url('publikasi/jdih') ?>">JDIH</a></li>
				        </ul>
				        </li>
				      </ul>
				  </div>
				</nav>
				</div>	
			</div>				
		</div>
		 <script>
			window.onscroll = function() {myFunction()};

			var header = document.getElementById("myHeader");
			var sticky = header.offsetTop;

			function myFunction() {
			  if (window.pageYOffset > sticky) {
			    header.classList.add("sticky");
			  } else {
			    header.classList.remove("sticky");
			  }
			}
		 </script>

		 <script type="text/javascript">
			$('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
			  if (!$(this).next().hasClass('show')) {
			    $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
			  }
			  var $subMenu = $(this).next(".dropdown-menu");
			  $subMenu.toggleClass('show');


			  $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
			    $('.dropdown-submenu .show').removeClass("show");
			  });


			  return false;
			});
		 </script>