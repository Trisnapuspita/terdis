@extends('layouts.main')

@section('navbar_beranda')
active
@endsection

@section('content')
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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
@endsection
