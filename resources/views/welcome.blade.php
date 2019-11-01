<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Teras Diskusi</title>	

		<meta name="keywords" content="Education" />
		<meta name="description" content="Teras Diskusi">
		<meta name="author" content="terasdiskusi.com">

		<!-- Favicon -->
		<link rel="shortcut icon" href="/img/logoteras.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="/img/logoteras.jpg">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link href="/https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="/vendor/font-awesome/css/fontawesome-all.min.css">
		<link rel="stylesheet" href="/vendor/animate/animate.min.css">
		<link rel="stylesheet" href="/vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="/vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="/vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="/vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="/css/theme.css">
		<link rel="stylesheet" href="/css/theme-elements.css">
		<link rel="stylesheet" href="/css/theme-blog.css">
		<link rel="stylesheet" href="/css/theme-shop.css">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="/vendor/rs-plugin/css/settings.css">
		<link rel="stylesheet" href="/vendor/rs-plugin/css/layers.css">
		<link rel="stylesheet" href="/vendor/rs-plugin/css/navigation.css">
		
		<!-- Demo CSS -->
		<link rel="stylesheet" href="/css/demos/demo-education.css">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="/css/skins/skin-education.css"> 

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="/css/custom.css">

		<!-- Head Libs -->
		<script src="/vendor/modernizr/modernizr.min.js"></script>

	</head>
	<body>

		<div class="body">
			<header id="header" class="header-semi-transparent custom-header-semi-transparent" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 49, 'stickySetTop': '-49px', 'stickyChangeLogo': false}">
				<div class="header-body">
					<div class="header-top header-top-style-3">
						<div class="container">
							<div class="header-row">
								<div class="header-column justify-content-start">
									<div class="header-row">
										<nav class="header-nav-top">
											<ul class="nav">
												<li>Telepon: <span class="ws-nowrap"><a class="text-decoration-none">{{ DB::table('profils')->value('telepon') }}</a></span></li>
												<li class="d-none d-md-block"> Email: <span class="ws-nowrap"><a class="text-decoration-none">{{ DB::table('profils')->value('email') }}</a></span></li>
												<li class="d-none d-lg-block">Waktu Kerja: <span class="ws-nowrap"><a class="text-decoration-none">{{ DB::table('profils')->value('waktu_kerja') }}</a></span></li>
											</ul>
										</nav>
									</div>
								</div>
								<div class="header-column justify-content-end">
									<div class="header-row">
										<nav class="header-nav-top mr-0">
											<ul class="nav">
												@if (Auth::guest())
												<li><a href="{{ url('/daftar-bimbel') }}"><span class="ws-nowrap"><i class="fas fa-user-plus"></i></i> Daftar</span></a></li>
												<li><a href="{{ url('/login') }}"><span class="ws-nowrap"><i class="fas fa-user"></i> Masuk</span></a></li>
												@else
												<li><a href="{{ url('/login') }}"><span class="ws-nowrap"><i class="fas fa-user"></i> {{ Auth::user()->name }}</span></a></li>
												@endif
											</ul>
										</nav>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo py-2">
										<a href="/">
											<img alt="Porto" width="100" height="80" src="/img/demos/education/logox.png">
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<div class="header-nav header-nav-stripe">
										<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
											<nav class="collapse">
												<ul class="nav" id="mainNav">
													<li>
														<a class="nav-link active" href="{{ url('/') }}">
															Beranda
														</a>
													</li>
													<li>
														<a class="nav-link" href="{{ url('/tentangkami') }}">
															Tentang Kami
														</a>
													</li>
													<li>
														<a class="nav-link" href="{{ url('/kegiatan') }}">
															Berita
														</a>
													</li>
													<!-- <li class="dropdown">
														<a class="dropdown-item dropdown-toggle" href="{{ url('/bimbel') }}">
															Bimbel GPEC
														</a>
														<ul class="dropdown-menu">
															<li>
																<a class="dropdown-item" data-hash data-hash-offset="160" href="/bimbel#1">	
																	Tentang Kami
																</a>
															</li>
															<li>
																<a class="dropdown-item" data-hash data-hash-offset="160" href="/bimbel#2">
																	Program
																</a>
															</li>
															<li>
																<a class="dropdown-item" data-hash data-hash-offset="160" href="/bimbel#3">
																	Pengajar
																</a>
															</li>
															<li>
																<a class="dropdown-item" data-hash data-hash-offset="160" href="/bimbel#4">
																	Pendaftaran
																</a>
															</li>
															<li>
																<a class="dropdown-item" data-hash data-hash-offset="160"  href="/bimbel#5">
																	Testimoni
																</a>
															</li>
														</ul>
													</li> -->
													<li>
														<a class="nav-link" href="{{ url('/kontak') }}">
															Kontak 
														</a>
													</li>
												</ul>
											</nav>
										</div>
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
											<i class="fas fa-bars"></i>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<div role="main" class="main">
				
				<div class="slider-container rev_slider_wrapper" style="height: 740px;">
					<div id="revolutionSlider" class="slider rev_slider manual" data-version="5.4.7">
						<ul>
							<li data-transition="fade">
								<img src="/img/demos/education/slides/first.jpg"  
									alt=""
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									data-kenburns="on" 
									data-duration="20000" 
									data-ease="Linear.easeNone" 
									data-scalestart="110" 
									data-scaleend="100" 
									data-offsetstart="250 100" 
									class="rev-slidebg">
								
								<h1 class="tp-caption font-weight-bold text-color-dark text-center"
									data-x="center"
									data-y="center" data-voffset="['10','10','10','10']"
									data-width="['770','770','770','350']"
									data-start="1000"
									data-fontsize="['53','53','45','35']"
									data-lineheight="['56','56','50','40']"
									data-transform_in="y:[100%];opacity:0;s:500;"
									data-transform_out="opacity:0;s:500;"
									style="white-space: normal;"></h1>
							</li>

							<li data-transition="fade">
								<img src="/img/demos/education/slides/slide10.jpg"  
									alt=""
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									data-kenburns="on" 
									data-duration="20000" 
									data-ease="Linear.easeNone" 
									data-scalestart="110" 
									data-scaleend="100" 
									data-offsetstart="250 100" 
									class="rev-slidebg">
								

							</li>
							<li data-transition="fade">
								<img src="/img/demos/education/slides/slide11.jpg"  
									alt=""
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									data-kenburns="on" 
									data-duration="20000" 
									data-ease="Linear.easeNone" 
									data-scalestart="110" 
									data-scaleend="100" 
									data-offsetstart="250 100" 
									class="rev-slidebg">
								

							</li>
							<li data-transition="fade">
								<img src="/img/demos/education/slides/slide12.jpg"  
									alt=""
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									data-kenburns="on" 
									data-duration="20000" 
									data-ease="Linear.easeNone" 
									data-scalestart="110" 
									data-scaleend="100" 
									data-offsetstart="250 100" 
									class="rev-slidebg">
								

							</li>
						</ul>
					</div>
				</div>
				<section class="section background-color-light border-0 my-0">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-md-10 text-center">
								<h2 class="font-weight-bold mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">Tentang Kami</h2>
								<p class="text-color-dark pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">{{ DB::table('profils')->value('tentang_kami') }}</p>
							</div>
						</div>
					</div>
				</section>
				<section class="section parallax section-parallax my-0 border-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '125%'}" data-image-src="img/demos/education/parallax/parallax-1.jpg" id="4">
					<div class="container">
						<div class="row">
							<div class="col-md-9 col-lg-7 col-xl-6 appear-animation" data-appear-animation="fadeInLeftShorter">
								<div class="card">
									<div class="card-body p-5 text-center">
										<h2 class="font-weight-bold text-center text-6 mb-0">DAFTAR SEKARANG</h2>
										<p class="text-color-dark text-5 text-center">Dapatkan kejutan-kejutan menarik</p>
										<span id="countdown" data-countdown-date="2018/06/10 12:00:00" class="text-color-primary font-weight-semibold custom-countdown-style-1 justify-content-center mb-4"></span>
										
										<div class="row">
											<div class="col text-center">
												<a href="{{ url('/daftar-bimbel') }}" class="btn btn-primary text-1 btn-outline custom-btn-style-1 font-weight-semibold">DAFTAR</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- <section class="section background-color-tertiary border-0 my-0">
					<div class="container">
						<div class="row">
							<div class="col">
								<h2 class="font-weight-bold text-center appear-animation" data-appear-animation="fadeInUpShorter">Kegiatan Kami</h2>
							</div>
						</div>
						<div class="row justify-content-center mb-5">
							<div class="col-md-6 col-lg-4 col-xl-3 mb-4 pb-3 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
								<div class="thumb-info thumb-info-hide-wrapper-bg custom-thumb-info-style-1">
									<div class="thumb-info-wrapper">
										<a href="/kegiatan"><img src="img/demos/education/courses/course-1.jpg" class="img-fluid" alt=""></a>
									</div>
									<div class="thumb-info-caption">
										<h3 class="font-weight-semibold text-transform-none"><a href="/kegiatan" class="custom-link-color-dark">Speed Reading & Mind Mapping</a></h3>
									</div>
									<div class="thumb-info-footer">
										<ul class="nav text-1">
											<li><a href="/kegiatan"><i class="far fa-user text-color-primary"></i> Mr. Arief Purnama</a></li>
											<li class="ml-3"><a href="/kegiatan"><i class="far fa-clock text-color-primary"></i> 60 Minutes</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-4 col-xl-3 mb-4 pb-3 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
								<div class="thumb-info thumb-info-hide-wrapper-bg custom-thumb-info-style-1">
									<div class="thumb-info-wrapper">
										<a href="/kegiatan"><img src="img/demos/education/courses/course-2.jpg" class="img-fluid" alt=""></a>
									</div>
									<div class="thumb-info-caption">
										<h3 class="font-weight-semibold text-transform-none"><a href="/kegiatan" class="custom-link-color-dark">Hipnoteraphy</a></h3>
									</div>
									<div class="thumb-info-footer">
										<ul class="nav text-1">
											<li><a href="/kegiatan"><i class="far fa-user text-color-primary"></i> Mr. Arief Purnama</a></li>
											<li class="ml-3"><a href="/kegiatan"><i class="far fa-clock text-color-primary"></i> 60 Minutes</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-4 col-xl-3 mb-4 pb-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
								<div class="thumb-info thumb-info-hide-wrapper-bg custom-thumb-info-style-1">
									<div class="thumb-info-wrapper">
										<a href="/kegiatan"><img src="img/demos/education/courses/santunan.jpg" class="img-fluid" alt=""></a>
									</div>
									<div class="thumb-info-caption">
										<h3 class="font-weight-semibold text-transform-none"><a href="/kegiatan" class="custom-link-color-dark">Santunan Anak Yatim</a></h3>
									</div>
									<div class="thumb-info-footer">
										<ul class="nav text-1">
											<li><a href="/kegiatan"><i class="far fa-user text-color-primary"></i> Mr. Arief Purnama</a></li>
											<li class="ml-3"><a href="/kegiatan"><i class="far fa-clock text-color-primary"></i> 2 Hours</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-4 col-xl-3 mb-4 pb-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
								<div class="thumb-info thumb-info-hide-wrapper-bg custom-thumb-info-style-1">
									<div class="thumb-info-wrapper">
										<a href="/kegiatan"><img src="img/demos/education/courses/Bukber.jpg" class="img-fluid" alt=""></a>
									</div>
									<div class="thumb-info-caption">
										<h3 class="font-weight-semibold text-transform-none"><a href="/kegiatan" class="custom-link-color-dark">Buka Puasa Bersama</a></h3>
									</div>
									<div class="thumb-info-footer">
										<ul class="nav text-1">
											<li><a href="/kegiatan"><i class="far fa-user text-color-primary"></i> Mr. Arief Purnama</a></li>
											<li class="ml-3"><a href="/kegiatan"><i class="far fa-clock text-color-primary"></i> 1 Hour</a></li>
										</ul>
									</div>
								</div>
							</div>
						<div class="row">
							<div class="col text-center">
								<a href="demo-education-courses.html" class="btn btn-primary text-1 btn-outline custom-btn-style-1 font-weight-semibold">Lihat lebih banyak</a>
							</div>
						</div>
					</div>
				</section> -->
				<section class="section background-color-light border-0 my-0">
					<div class="container">
						<div class="row text-center">
							<div class="col">
								<h2 class="font-weight-bold mb-4 appear-animation" data-appear-animation="fadeInUpShorter">Testimoni</h2>
							</div>
						</div>
						<div class="row justify-content-center appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
							<div class="col">
								<div class="owl-carousel custom-nav m-0" data-plugin-options="{'items': 1, 'loop': true, 'dots': false, 'nav': true, 'autoHeight': true}">
									@foreach($testimonis as $testimoni)
									<div class="row justify-content-center">
										<div class="col-lg-10">
											<div class="testimonial testimonial-style-2 testimonial-with-quotes custom-testimonial-style-1">
												<blockquote>
													<p>{{ $testimoni->pesan }}</p>
												</blockquote>
												<div class="testimonial-author">
													<img src="/storage/upload/{{ $testimoni->foto }}" class="img-fluid rounded-circle" alt />
													<p>
														<strong class="text-uppercase text-color-dark">{{ $testimoni->nama }}</strong>
														<span>{{ $testimoni->status }}</span>
													</p>
													<div class="rate">
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
													</div>
												</div>
											</div>
										</div>
									</div>
									@endforeach
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="section parallax section-parallax my-0 border-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '125%'}" data-image-src="img/demos/education/parallax/parallax-2.jpg">
					<div class="container mt-5">
						<div class="row">
							<div class="col-md-10 col-lg-7 offset-md-2 offset-lg-5">
								<div class="row appear-animation" data-appear-animation="fadeInUpShorter">
									<div class="col">
										<div class="feature-box feature-box-style-2 custom-feature-box-style-1">
											<div class="feature-box-icon mt-3">
												<img src="img/demos/education/icons/icon-1.png" class="img-fluid" width="60" alt="" />
											</div>
											<div class="feature-box-info">
												<h2 class="font-weight-semibold text-6 mb-0">VISI</h2>
												<p class="text-color-dark mb-4 pb-2">{{ DB::table('profils')->value('visi') }}</p>
											</div>
										</div>		
									</div>
								</div>
								<div class="row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
									<div class="col">
										<div class="feature-box feature-box-style-2 custom-feature-box-style-1">
											<div class="feature-box-icon mt-3">
												<img src="img/demos/education/icons/icon-2.png" class="img-fluid" width="60" alt="" />
											</div>
											<div class="feature-box-info">
												<h2 class="font-weight-semibold text-6 mb-0">MISI</h2>
												<ul class="list list-icons">
													@foreach($misis as $misi)
													<li><i class="fas fa-check"></i> {{ $misi->poin }}</li>
													@endforeach
												</ul>
											</div>
										</div>		
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>


			<footer id="footer" class="background-color-quaternary border-top-0 mt-0">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-3 mb-0 mb-lg-0">
							<h2 class="font-weight-semibold text-color-light text-6 mb-3">Detail Kontak</h2>
							<p>Alamat: {{ DB::table('profils')->value('alamat') }}
							<br>Telepon: {{ DB::table('profils')->value('telepon') }}
							<br>Email: {{ DB::table('profils')->value('email') }}
							</p>
						</div>
						<div class="col-lg-4 mb-0 mb-lg-0">
							<div class="row">
								<div class="col">
									<h2 class="font-weight-semibold text-color-light text-6 mb-3">Data Statistik Pengunjung</h2>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<!-- Histats.com  (div with counter) --><div id="histats_counter"></div>
										<!-- Histats.com  START  (aync)-->
										<script type="text/javascript">var _Hasync= _Hasync|| [];
										_Hasync.push(['Histats.start', '1,4222756,4,4003,112,61,00011110']);
										_Hasync.push(['Histats.fasi', '1']);
										_Hasync.push(['Histats.track_hits', '']);
										(function() {
										var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
										hs.src = ('//s10.histats.com/js15_as.js');
										(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
										})();</script>
										<noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?4222756&101" alt="" border="0"></a></noscript>
									<!-- Histats.com  END  -->
								</div>
							</div>
						</div>
						<div class="col-lg-3 mb-0 mb-lg-0">
							<div class="row">
								<div class="col">
									<h2 class="font-weight-semibold text-color-light text-6 mb-3">Teras Diskusi</h2>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<ul class="list list-unstyled mb-0">
										<li><a href="/">Beranda</a></li>
										<li><a href="/tentangkami">Tentang Kami</a></li>
										<li><a href="/kegiatan">Berita</a></li>
										<li><a href="/kontak">Kontak</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-copyright background-color-quaternary border-top-0">
					<div class="container">
						<div class="row">
							<div class="col">
								<p class="text-center">&copy; 2018 Ilkom16 UNJ</p>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<!-- Vendor -->
		<script src="/vendor/jquery/jquery.min.js"></script>
		<script src="/vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="/vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="/vendor/jquery-cookie/jquery-cookie.min.js"></script>
		<script src="/vendor/popper/umd/popper.min.js"></script>
		<script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="/vendor/common/common.min.js"></script>
		<script src="/vendor/jquery.validation/jquery.validation.min.js"></script>
		<script src="/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
		<script src="/vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
		<script src="/vendor/isotope/jquery.isotope.min.js"></script>
		<script src="/vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="/vendor/vide/vide.min.js"></script>
		<script src="/vendor/jquery.countdown/jquery.countdown.min.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="/js/theme.js"></script>
		
		<!-- Current Page Vendor and Views -->
		<script src="/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script src="/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

		<!-- Demo -->
		<script src="/js/demos/demo-education.js"></script>
		
		<!-- Theme Custom -->
		<script src="/js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="/js/theme.init.js"></script>




		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->



	</body>
</html>