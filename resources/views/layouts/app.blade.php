<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Imigrasi</title>
		<meta name="description" content="Imigrasi Kelas I Palu">

 
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon" />
        <link rel="apple-touch-icon" href="{{ asset('img/apple-touch-icon-57x57-precomposed.png')}}" type="image/x-icon" />
        <link rel="apple-touch-icon" href="{{ asset('img/apple-touch-icon-72x72-precomposed.png')}}" sizes="72x72" type="image/x-icon" />
		<link rel="apple-touch-icon" href="{{ asset('img/apple-touch-icon-114x114-precomposed.png')}}" type="image/x-icon" sizes"114x114" />
		
		<!-- Mobile Specific Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- CSS -->
		<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
		<link href="{{asset('css/bootstrap-responsive.css')}}" rel="stylesheet">
		<link href="{{asset('css/megamenu.css')}}" rel="stylesheet">
		<link href="{{asset('css/style.css')}}" rel="stylesheet">
		<link href="{{asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet" >
		<link rel="stylesheet" href="{{asset('js/fancybox/source/jquery.fancybox.css?v=2.1.4')}}">
		
		<!-- CSS -->
		<link href="{!! asset('css/app.css') !!}" media="all" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="{!! asset('js/app.js') !!}"></script>
        <!-- Styles -->
		
		<!-- REVOLUTION BANNER CSS SETTINGS -->
		<link rel="stylesheet" href="{{asset('css/fullwidth.css')}}" media="screen" >
		<link rel="stylesheet" href="{{asset('rs-plugin/css/settings.css')}}" media="screen" >
		
		<!-- Jquery -->
		<script src="{{asset('js/jquery.js')}}"></script>
		<!-- Support media queries for IE8 -->
		<script src="{{asset('js/respond.min.js')}}"></script>

		<!-- HTML5 and CSS3-in older browsers-->
		<script src="{{asset('js/modernizr.custom.17475.js')}}"></script>
    </head>
	
	
    <body>
	
	<header>
	<div class="container">
   	  <div class="row">
    	<div class="span6" id="logo"><a href="#"><img src="{{asset('img/logo.png')}}"  alt="Logo" ></a></div>

        </div><!-- End row-->
	</div><!-- End container-->
	</header><!-- End Header-->

		<nav>
		<div class="megamenu_container">
		<a id="megamenu-button-mobile" href="#">Menu</a><!-- Menu button responsive-->
			
			<!-- Begin Mega Menu Container -->
			<ul class="megamenu">
				<!-- Begin Mega Menu -->
				<li><a class="nodrop-down" href="{{route('index')}}">Home</a>
				<li><a href="javascript:void(0)" class="drop-down">Profil</a>
				<!-- Begin Item -->
				<div class="drop-down-container">
				
					<div class="row">            
							<div class="span12">
								<ul class="tabs">
									<li><a class="active" href="#section-1">Sejarah</a></li>
									<li><a href="#section-2">Visi - Misi</a></li>
									<li><a href="#section-3">Tugas dan Fungsi</a></li>
									<li><a href="#section-4">Kepala Kantor dari Masa Ke Masa</a></li>
									<li><a href="#section-5">Struktur Organisasi</a></li>
								</ul>
								
								<ul class="tabs-content">
								
									<li class="active" id="section-1">
									<div class="row">
									
										<div class="span8">
											<p align="justify">Kantor Imigrasi Kelas I Palu terletak di Ibu Kota Propinsi Sulawesi Tengah, dibentuk  berdasarkan Surat Keputusan Menteri Kehakiman Republik Indonesia Nomor : Y.S.4/2/21 Tahun 1976 tanggal 11 Maret 1976 melalui usul Pemerintah Daerah (Gubernur Kepala Daerah Propinsi Sulawesi Tengah), kepada Menteri Kehakiman Republik Indonesia Nomor : Ditpem 1/6/49a tanggal 11 Maret 1974 dan Kantor Imigrasi Palu diresmikan oleh Direktur Jenderal Imigrasi Bapak S. Soedarman pada tanggal 4 April 1977 atas permintaan Surat Kepala Kantor Wilayah Direktorat Jenderal Imigrasi Ujung Pandang Nomor : 2039/IX/C/77 tanggal 28 Febuari 1977.</p>
											<p><a href="{{route('sejarah')}}" class="button_red_small" title="staff">Read more</a></p>
										</div>
										
																	  
									</div><!-- End row -->
									</li>
									
									<li id="section-2">							
									<div class="row">
										<div class="span4"><p class="lead "><h5>VISI <em>MASYARAKAT MEMPEROLEH KEPASTIAN HUKUM</em></h5> </p></div>
										<div class="span2"><p class="lead "><h5>MISI <em>MELINDUNGI HAK ASASI MANUSIA</em></h5></p></div>
										<div class="span2"><p class="lead "><h5>MOTTO <em>MELAYANI DENGAN TULUS</em></h5></p></div>
										<div class="span3">
												<h5>JANJI LAYANAN</h5>
												<p>1.KEPASTIAN PERSYARATAN <br/>
													2.KEPASTIAN BIAYA<br/>
													3.KEPASTIAN WAKTU PENYELESAIAN</p>
										</div>
									</div><!-- End row -->
									</li>

									 <li id="section-3">
										<h4><b>Tugas</b></h4>
										<div class="span10">Kantor Imigrasi Kelas I Palu mempunyai tugas melaksanakan sebagian tugas pokok dan fungsi Kementerian Hukum dan HAM di bidang Keimigrasian khususnya di wilayah kerja Kantor Imigrasi Kelas I Palu.</div><br/><br/>
										<hr>
										</p>
										<p>
										<h4><b>Fungsi</b></h4>
										<div class="span10">
										1. Melaksanakan tugas Keimigrasian dibidang Informasi dan Sarana Komunikasi Keimigrasian <br/>
										2. Melaksanakan tugas Keimigrasian dibidang Lalu lintas Keimigrasian <br/>
										3. Melaksanakan tugas Keimigrasian dibidang Status Keimigrasian <br/>
										4. Melaksanakan tugas Keimigrasian dibidang Pengawasan dan Penindakan Keimigrasian
										</div>
									</li>
									<li id="section-4">
									<div class="row">
										<div class="span8">
											<p>Daftar kepala kantor yang memimpin Kantor Imigrasi Kelas I Palu dari Masa ke Masa</p>
											<p><a href="{{route('kakanim')}}" class="button_red_small" title="kepala kantor">Read more</a></p>
										</div>                                
									</div><!-- End row -->
									</li>
									
									</li>
									<li id="section-5">
									<div class="row">
										<div class="span6">
											<p><img src="img/strukturorganisasi.jpg" class="img-responsif" alt=""></p>
										</div>  
										<div class="span3">
											<p>Kantor Imigrasi Kelas I palu memiliki 4 seksi dan 1 bagian Tata Usaha. </p>
										</div>
									</div>
									<!-- End row -->
									</li>								
									
								</ul><!-- End tabs-->
							</div><!-- End span9 -->

					</div><!-- End row -->
				</div><!-- End Item Container -->
				</li><!-- End Item -->


				<li><a href="javascript:void(0)" class="drop-down">Pelayanan Publik</a>
				<!-- Begin Item -->
				<div class="drop-down-container">
					<div class="row">        
						<div class="span12">
							<div class="row">
								<div class="span3">
									<h5><a href="{{route('wni')}}"><i class="icon-book"></i>Layanan Warga Negara Indonesia</a></h5>
									<p align="Justify">Layanan Warga Negara Indonesia Meliputi Pembuatan Dokumen Perjalanan Republik Indonesia, Persyaratan Permohonan, Penggantian Paspor, Prosedur Penggantan dan Masa Berlaku Paspor</p>
									<p><a href="{{route('wni')}}" class="button_red_small">Read more</a></p>
								</div>
								<div class="span3">
									<h5><a href="{{route('wna')}}"><i class="icon-book"></i>Layanan Warga Negara Asing</a></h5>
									<p align="Justify">Layanan Warga Negara Asing meliputi Ijin Tinggal Kunjungan, Ijin Tinggal Terbatas, Ijin Tinggal tetap, Fasilitas Keimigrasian, Mutasi Data Orang asing</p>
									<p><a href="{{route('wna')}}" class="button_red_small">Read more</a></p>
								</div>
								<div class="span2">
									<h5><a href="{{route('layananonline')}}"><i class="icon-book"></i>Layanan Online</a></h5>
									<p align="Justify">Layanan Online Meliputi Visa Online, Pelaporan Orang Asing, Ijin Tinggal Online, Antrian Online</p>
									<p><a href="{{route('layananonline')}}" class="button_red_small">Read more</a></p>
								</div>
								<div class="span2">
									<h5><a href="{{route('biaya')}}"><i class="icon-book"></i>Biaya Keimigrasian</a></h5>
									<p align="Justify">Biaya Keimigrasian Merupakan biaya yang terkait layanan keimigrasian</p>
									<p><a href="{{route('biaya')}}" class="button_red_small">Read more</a></p>
								</div>
							</div><!-- End row -->
							
						</div><!-- End span9 -->
					</div><!-- End row -->
				</div><!-- End Item Container -->
				</li><!-- End Item -->
				
				<li><a href="#" class="drop-down">Berita</a>
				<!-- Begin Item -->
				<div class="drop-down-container" id="icon-menu">
					<div class="row">
						<div class="span5 "><a href="{{route('beritautama')}}" title="Berita Utama"><i class="icon-book icon-3x"></i>Berita Utama </a></div>
						<div class="span5"><a href="{{route('beritaimigrasi')}}" title="Berita Imigrasi"><i class="icon-book icon-3x"></i>Berita Imigrasi </a></div>
					</div><!-- End row -->
				</div><!-- End Item Container -->
				</li><!-- End Item -->
				

				<li><a href="javascript:void(0)" class="drop-down">Produk Hukum</a>
				<!-- Begin Item -->
				<div class="drop-down-container">
					<div class="row">        
						<div class="span12">
							<div class="row">
								<div class="span3">
									<h5><a href="{{route('uu')}}"><i class="icon-book"></i>Undang-Undang</a> </h5>
									<p>Merupakan Produk Undang-Undang yang terkait dengan Keimigrasian</p>
									<p><a href="{{route('uu')}}" class="button_red_small">Read more</a></p>
								</div>
								<div class="span2">
									<h5><a href="{{route('presiden')}}"><i class="icon-book"></i>Presiden</a></h5>
									<p>Merupakan Peraturan Presiden terkait dengan Keimigrasian</p>
									<p><a href="{{route('presiden')}}"class="button_red_small">Read more</a></p>
								</div>
					   
								<div class="span3">
									<h5><a href="{{route('pemerintah')}}"><i class="icon-book"></i>Pemerintah</a></h5>
									<p>Merupakan Peraturan Pemerintah terkait dengan Keimigrasian</p>
									<p><a href="{{route('pemerintah')}}" class="button_red_small">Read more</a></p>
								</div>
								<div class="span2">
									<h5><a href="{{route('menteri')}}"><i class="icon-book"></i>Menteri</a></h5>
									<p>Merupakan Peraturan Menteri terkait dengan Keimigrasian</p>
									<p><a href="{{route('menteri')}}" class="button_red_small">Read more</a></p>
								</div>
							</div><!-- End row -->
							
						</div><!-- End span9 -->
					</div><!-- End row -->
				</div><!-- End Item Container -->
				</li><!-- End Item -->
						
				<li><a href="#" class="drop-down">Informasi Publik</a>
				<!-- Begin Item -->
				<div class="drop-down-container" id="icon-menu">
					<div class="row">
						<div class="span5 "><a href="{{route('galeri')}}" title="Galeri "><i class="icon-picture icon-3x"></i>Galeri Foto/ Video </a></div>
						<div class="span5"><a href="{{route('kepuasan')}}" title="Kepuasan Masyarakat"><i class="icon-star icon-3x"></i>Indeks Kepuasan Masyarakat </a></div>
						
					</div><!-- End row -->
				</div><!-- End Item Container -->
				</li><!-- End Item -->
				<li><a href="#" class="drop-down">Pengaduan</a>
					<!-- Begin Item -->
					<div class="drop-down-container" id="icon-menu">
						<div class="row">
							<div class="span5 "><a href="/cekpengaduan" title="Cek Pengaduan"><i class="icon-search icon-3x"></i>Cek Pengaduan</a></div>
							<div class="span5"><a href="/pengaduan/create" title="Buat Pengaduan"><i class="icon-book icon-3x"></i>Buat Pengaduan</a></div>
						</div><!-- End row -->
					</div><!-- End Item Container -->
					</li><!-- End Item -->
				<li><a href="javascript:void(0)" class="drop-down">Hubungi Kami</a>
				<!-- Begin Item -->
				<div class="drop-down-container">
				
					<div class="row">
					
						<div class="span6">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7978.639222030405!2d119.87964738610843!3d-0.9059189403642333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d8bee74ad13d239%3A0xda2d3af5ffbb743e!2sKantor+Imigrasi+Kelas+I+-+Palu!5e0!3m2!1sid!2sid!4v1532348334676" height="390" frameborder="0" style="border:0" allowfullscreen>
                			</iframe>
						</div>
						
						<div class="span4">
							<div class="row">
								<div class="span4">
									<img src="{{asset('img/kontak pelayanan.png')}}" >								
								</div>                       
							</div><!-- End row -->
							<br>
							<hr>

							<h4>Alamat</h4>
							<ul>
								<li><i class="icon-home"></i> Jl. RA Kartini No 53, Lolu Selatan, Palu Selatan, Kota Palu, Sulawesi Tengah 94111</li>
								<li><i class="icon-phone"></i> Telephone: + 62 45142 1433</li>
								<li><i class="icon-phone-sign"></i> Fax: + 62 455 279 </li>
								<li><i class="icon-envelope"></i> Email: <a href="#">immigration.palu@gmail.com</a></li>
							</ul>
							<br>
						</div><!-- End Span6 -->
					</div><!-- End row-->
				</div><!-- End Item Container -->
				</li><!-- End Item -->

			</ul><!-- End Mega Menu -->
		</div>
		</nav><!-- /navbar -->
		

		
		{{-- konten halaman yang ditampilkan pada layout --}}
			@yield('content')
		
		
		  
		  <footer>
		  <div class="container">
			<div class="row">
				<div class="span3" id="brand-footer">
					<p>Copyright © 2018</p>
					<a target="_blank" href="http://smallcounter.com/cc_stats/1537700613/"><img alt="map counter" border="0" src="http://smallcounter.com/online/ccc.php?id=1537700613"></a><br>    
				</div>
				<div class="span3" id="contacts-footer">
					<h4>Alamat</h4>
						<ul>
							<li><i class="icon-home"></i> Jl. Ra Kartini No. 53, Lolu Selatan, Palu Selatan, Kota Palu, Sulawesi Tengah 94111</li>
							<li><i class="icon-phone"></i> Telephone: + 62 45142 1433</li>
							<li><i class="icon-phone-sign"></i> Fax: + 62 455 279</li>
							<li><i class="icon-envelope"></i> Email: <a href="#">immigration.palu@gmail.com</a></li>
						</ul>
					<hr>
				   
					<div></div>
					
				</div>
				
				<div class="span4" id="quick-links">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7978.639222030405!2d119.87964738610843!3d-0.9059189403642333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d8bee74ad13d239%3A0xda2d3af5ffbb743e!2sKantor+Imigrasi+Kelas+I+-+Palu!5e0!3m2!1sid!2sid!4v1532348334676" height="250" frameborder="0" style="border:0" allowfullscreen>
                    </iframe>
				</div>
				
			</div>
		  </div>
		  </footer><!-- End footer-->
		<div id="toTop">Back to Top</div>

		<!-- MEGAMENU --> 
		<script src="{{asset('js/jquery.easing.js')}}"></script>
		<script src="{{asset('js/megamenu.js')}}"></script>

		<!-- OTHER JS -->    
		<script src="{{asset('js/bootstrap.js')}}"></script>
		<script src="{{asset('js/functions.js')}}"></script>
		<script src="{{asset('assets/validate.js')}}"></script> 

		<!-- FANCYBOX -->
		<script  src="{{asset('js/fancybox/source/jquery.fancybox.pack.js?v=2.1.4')}}" type="text/javascript"></script> 
		<script src="{{asset('js/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.5')}}" type="text/javascript"></script> 
		<script src="{{asset('js/fancy_func.js')}}" type="text/javascript"></script> 

		 <!-- REVOLUTION SLIDER -->
		 <script src="{{asset('rs-plugin/js/jquery.themepunch.plugins.min.js')}}"></script>
		 <script type="text/javascript" src="{{asset('rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
		 <script src="{{asset('js/revolutio-slider-func.js')}}"></script>	
    </body>
</html>
