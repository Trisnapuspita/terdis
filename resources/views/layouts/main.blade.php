<!DOCTYPE html>
<html>
	<head>
		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>Teras Diskusi @yield('title')</title>

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
        @yield('styles')

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
                                                @if(Auth::user()->role == 4)
                                                <li><a class="ws-nowrap"><i class="fas fa-user"></i> {{ Auth::user()->name }}</a>
                                                </li>
                                                <li><a href="/tiket" class="ws-nowrap"><i class="fas fa-ticket-alt"></i> Tiket</a>
                                                </li>
                                                @else
                                                <li><a href="/home" class="ws-nowrap"><i class="fas fa-user"></i> {{ Auth::user()->name }}</a>
                                                </li>
                                                @endif
                                                <li><a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();"><span class="ws-nowrap"><i class="fas fa-sign-out-alt"></i></i> Keluar</span></a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        {{ csrf_field() }}
                                                     </form>
                                                </li>
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
														<a class="nav-link @yield('navbar_beranda')" href="{{ url('/') }}">
															Beranda
														</a>
													</li>
													<li>
														<a class="nav-link @yield('navbar_tentang')" href="{{ url('/tentangkami') }}">
															Tentang Kami
														</a>
													</li>
													<li>
														<a class="nav-link @yield('navbar_berita')" href="{{ url('/kegiatan') }}">
															Berita
														</a>
													</li>
                                                    <li class="dropdown">
                                                        <a class="dropdown-item dropdown-toggle @yield('navbar_guru')">
                                                            Guru Digital
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="/info">Info</a></li>
                                                            <li><a class="dropdown-item" href="/program">Program</a></li>
                                                            <li><a class="dropdown-item" href="/event">Berita</a></li>
                                                        </ul>
                                                    </li>
													<li>
                                                        <a class="nav-link @yield('navbar_kontak')" href="{{ url('/kontak') }}">
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

                @yield('content')

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
										<noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?4222756&101"></a></noscript>
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

        @yield('scripts')
</html>
