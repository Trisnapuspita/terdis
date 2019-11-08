<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>Teras Diskusi</title>

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Porto - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="/img/logoteras.ico" type="/image/x-icon" />
		<link rel="apple-touch-icon" href="/img/logoteras.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet" type="/text/css">

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
												{{-- <li><a href="{{ url('/daftar-bimbel') }}"><span class="ws-nowrap"><i class="fas fa-user-plus"></i></i> Daftar</span></a></li> --}}
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
														<a class="nav-link" href="{{ url('/') }}">
															Beranda
														</a>
													</li>
													<li>
														<a class="nav-link" href="{{ url('/tentangkami') }}">
															Tentang Kami
														</a>
													</li>
													<li>
														<a class="nav-link active" href="{{ url('/kegiatan') }}">
															Berita
														</a>
													</li>
													<!-- <li class="dropdown">
														<a class="dropdown-item dropdown-toggle" href="{{ url('/bimbel') }}">
															Bimbel GPEC
														</a>
														<ul class="dropdown-menu">
														<li>
																<a class="dropdown-item" href="/bimbel#1">
																	Tentang Kami
																</a>
															</li>
															<li>
																<a class="dropdown-item" href="/bimbel#2">
																	Program
																</a>
															</li>
															<li>
																<a class="dropdown-item" href="/bimbel#3">
																	Pengajar
																</a>
															</li>
															<li>
																<a class="dropdown-item" href="/bimbel#4">
																	Pendaftaran
																</a>
															</li>
															<li>
																<a class="dropdown-item" href="/bimbel#6">
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

			<section class="page-header custom-page-header background-color-quaternary parallax mb-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="/img/demos/education/parallax/parallax-6.jpg">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-6">
								<h1 class="font-weight-bold">Berita <span class="text-color-light">Belajar Berkarya Berbagi</span></h1>
							</div>
							<div class="col-lg-6">
								<ul class="breadcrumb pull-right">
									<li><a href="/">Beranda</a></li>
									<li class="active text-color-light">Berita</li>
								</ul>
							</div>
						</div>
					</div>
				</section>

				<div class="container">
					<div class="row pt-1 pb-4 mb-3">
						<div class="col"> <br>

							<div class="row justify-content-center">
								<div>
									<img src="/storage/upload/{{ $berita->foto }}" style="max-width: 800px;">
								</div>
							</div> <br>

							<p class="lead mb-4" style="text-align: center; font-weight:bold; font-size: 200%">{{ $berita->judul_berita }}</p>

							<p style="white-space: pre-line">{{ $berita->isi_berita }}</p>
							<a class="btn btn-light" href="/kegiatan">Back</a>

						</div>
					</div>
				</div>

			</div>

			<footer id="footer" class="background-color-quaternary border-top-0 mt-0">
					<div class="container">
						<div class="row justify-content-between">
							<div class="col-lg-3 mb-4 mb-lg-0">
							<h2 class="font-weight-semibold text-color-light text-6 mb-3">Detail Kontak</h2>
								<p>Alamat: {{ DB::table('profils')->value('alamat') }}
								<br>Telepon: {{ DB::table('profils')->value('telepon') }}
								<br>Email: {{ DB::table('profils')->value('email') }}
								</p>
							</div>
							<div class="col-lg-4 mb-4 mb-lg-0">
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
								<div class="col-lg-6">
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
