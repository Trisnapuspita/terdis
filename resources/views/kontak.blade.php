<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<meta name="csrf-token" content="{{ csrf_token() }}">

		<title>Teras Diskusi</title>

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Porto - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/logoteras.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/logoteras.jpg">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/font-awesome/css/fontawesome-all.min.css">
		<link rel="stylesheet" href="vendor/animate/animate.min.css">
		<link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="css/theme.css">
		<link rel="stylesheet" href="css/theme-elements.css">
		<link rel="stylesheet" href="css/theme-blog.css">
		<link rel="stylesheet" href="css/theme-shop.css">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="vendor/rs-plugin/css/settings.css">
		<link rel="stylesheet" href="vendor/rs-plugin/css/layers.css">
		<link rel="stylesheet" href="vendor/rs-plugin/css/navigation.css">

		<!-- Demo CSS -->
		<link rel="stylesheet" href="css/demos/demo-education.css">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="css/skins/skin-education.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="css/custom.css">

		<!-- Head Libs -->
		<script src="vendor/modernizr/modernizr.min.js"></script>

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
											<img alt="Porto" width="100" height="80" src="img/demos/education/logox.png">
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
														<a class="nav-link" href="{{ url('/kegiatan') }}">
															Berita
														</a>
													</li>
													<li>
														<a class="nav-link active" href="{{ url('/kontak') }}">
															Kontak
														</a>
                                                    </li>
                                                    <li>
														<a class="nav-link" href="{{ url('/gurudigital') }}">
															Guru Digital
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

				<section class="page-header custom-page-header background-color-quaternary parallax mb-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="img/demos/education/parallax/parallax-7.jpg">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-6">
								<h1 class="font-weight-bold">Kontak <span class="text-color-light">Lebih dekat dengan kami</span></h1>
							</div>
							<div class="col-lg-6">
								<ul class="breadcrumb pull-right">
									<li><a href="/">Beranda</a></li>
									<li class="active text-color-light">Kontak</li>
								</ul>
							</div>
						</div>
					</div>
				</section>

				<section class="section background-color-tertiary border-0 my-0 pb-4">
					<div class="container">
						<div class="row pt-1 pb-4 mb-3">
							<div class="col-lg-8">

								<div class="alert alert-success d-none mt-4" id="contactSuccess">
									<strong>Success!</strong> Your message has been sent to us.
								</div>

								<div class="alert alert-danger d-none mt-4" id="contactError">
									<strong>Error!</strong> There was an error sending your message.
									<span class="text-1 mt-2 d-block" id="mailErrorMessage"></span>
								</div>

								<h2 class="font-weight-bold mb-4">Kirim Pesan </h2>
								<p class="pb-3 mb-4">Apakah ada yang ingin ditanyakan?</p>

								@if(count($errors)>0)
									<a class="text-danger">- Captcha salah</a>
								@endif

								<form id="contactForm" action="/contact-bimbel" method="POST" class="custom-form-style-1">
									{{ csrf_field() }}
									<div class="form-row">
										<div class="form-group col-lg-6">
											<label>Nama *</label>
											<input type="text" value="{{ old('name') }}" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
										</div>
										<div class="form-group col-lg-6">
											<label>Alamat email *</label>
											<input type="email" value="{{ old('email') }}" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col">
											<label>Perihal *</label>
											<input type="text" value="{{ old('subject') }}" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col">
											<label>Pesan *</label>
											<textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" id="message" required>{{ old('message') }}</textarea>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col-xc-3">
										<p>Captcha:</p>
										</div>
										<div class="form-group col-xc-3">
										<span>{!! captcha_img() !!}</span> <br>
										<input type="text" value="{{ old('captcha') }}" data-msg-required="Please enter the captcha." maxlength="5" size="5" class="form-control" name="captcha" id="captcha" required>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col">
											<button type="submit" value="Kirim" class="btn btn-primary custom-btn-style-1 text-uppercase float-right" data-loading-text="Loading...">Kirim</button>
										</div>
									</div>
								</form>

							</div>
							<div class="col-lg-4">

								<h4 class="heading-primary mt-0 pt-0">Lebih Dekat dengan Kami</h4>
								<p>Ingin lebih dekat dengan kami? Hubungi kontak yang tertera atau datang langsung ke kantor kami..</p>

								<hr class="solid mt-4 mb-4">

								<h4 class="heading-primary">Kantor Teras Diskusi</h4>
								<ul class="list list-icons list-icons-style-3 mt-4">
									<li><i class="fas fa-map-marker-alt"></i> <strong>Alamat:</strong> {{ DB::table('profils')->value('alamat') }}</li>
									<li><i class="fas fa-phone"></i> <strong>Telepon:</strong> {{ DB::table('profils')->value('telepon') }}</li>
									<li><i class="far fa-envelope"></i> <strong>Email:</strong> {{ DB::table('profils')->value('email') }}</li>
								</ul>

								<hr class="solid mt-4 mb-4">

								<h4 class="heading-primary">Jam Kerja</h4>
								<ul class="list list-icons list-dark mt-4">
									<li><i class="far fa-clock"></i> {{ DB::table('profils')->value('waktu_kerja') }} </li>
									<!-- <li><i class="far fa-clock"></i> Sabtu - Minggu | Tutup</li> -->
								</ul>

							</div>

						</div>
					</div>
				</section>

				<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
				<div id="googlemaps" class="google-map mt-0 mb-0"></div>

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
										<li><a href="/"></a>Beranda</li>
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

		<!-- Vendor -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="vendor/jquery-cookie/jquery-cookie.min.js"></script>
		<script src="vendor/popper/umd/popper.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/common/common.min.js"></script>
		<script src="vendor/jquery.validation/jquery.validation.min.js"></script>
		<script src="vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
		<script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
		<script src="vendor/isotope/jquery.isotope.min.js"></script>
		<script src="vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="vendor/vide/vide.min.js"></script>
		<script src="vendor/jquery.countdown/jquery.countdown.min.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>

		<!-- Current Page Vendor and Views -->
		<script src="vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

		<!-- Demo -->
		<script src="js/demos/demo-education.js"></script>

		<!-- Theme Custom -->
		<script src="js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>

		<!-- captcha -->
		<script src='https://www.google.com/recaptcha/api.js'></script>

		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAhpYHdYRY2U6V_VfyyNtkPHhywLjDkhfg"></script>
		<!---->
		<script>

			/*
			Map Settings

				Find the Latitude and Longitude of your address:
					- http://universimmedia.pagesperso-orange.fr/geo/loc.htm
					- http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

			*/

			// Map Markers
			var mapMarkers = [{
				address: "Jl. H. Mean No.96E, Jatiwaringin, Pondokgede, Kota Bks, Jawa Barat 17411",
				html: "<strong>Yayasan Teras Diskusi</strong><br>Bekasi<br>Indonesia",
				icon: {
					image: "img/pin-light.png",
					iconsize: [26, 46],
					iconanchor: [12, 46]
				},
				popup: true
			}];

			// Map Initial Location
			var initLatitude = -6.2689091677209055;
			var initLongitude = 106.92726438147719;

			// Map Extended Settings
			var mapSettings = {
				controls: {
					draggable: (($.browser.mobile) ? false : true),
					panControl: true,
					zoomControl: true,
					mapTypeControl: true,
					scaleControl: true,
					streetViewControl: true,
					overviewMapControl: true
				},
				scrollwheel: false,
				markers: mapMarkers,
				latitude: initLatitude,
				longitude: initLongitude,
				zoom: 16
			};

			var map = $('#googlemaps').gMap(mapSettings),
				mapRef = $('#googlemaps').data('gMap.reference');

			// Map text-center At
			var mapCenterAt = function(options, e) {
				e.preventDefault();
				$('#googlemaps').gMap("centerAt", options);
			}

			// Create an array of styles.
			var mapColor = "#161b29";

			var styles = [{
				stylers: [{
					hue: mapColor
				}]
			}, {
				featureType: "road",
				elementType: "geometry",
				stylers: [{
					lightness: 0
				}, {
					visibility: "simplified"
				}]
			}, {
				featureType: "road",
				elementType: "labels",
				stylers: [{
					visibility: "off"
				}]
			}];

			// Styles from https://snazzymaps.com/
			var styles = [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#090A0D"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#090A0D"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#090A0D"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#090A0D"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#090A0D"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#090A0D"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#090A0D"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#090A0D"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#090A0D"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#090A0D"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#090A0D"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#090A0D"},{"lightness":17}]}];

			var styledMap = new google.maps.StyledMapType(styles, {
				name: 'Styled Map'
			});

			mapRef.mapTypes.set('map_style', styledMap);
			mapRef.setMapTypeId('map_style');

		</script>


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
