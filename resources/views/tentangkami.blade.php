@extends('layouts.main')

@section('content')
<section class="page-header custom-page-header background-color-quaternary parallax" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="img/demos/education/parallax/parallax-3.jpg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="font-weight-bold">Tentang Kami <span class="text-color-light">Siapakah Kami?</span></h1>
            </div>
            <div class="col-lg-6">
                <ul class="breadcrumb pull-right">
                    <li><a href="/">Beranda</a></li>
                    <li class="active text-color-light">Tentang Kami</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row pt-1 pb-4 mb-3">
        <div class="col">
        <h2 class="font-weight-semibold text-5 mb-0">Pendahuluan</h2>
            <p style="white-space: pre-line">{{ DB::table('profils')->value('pendahuluan') }}</p>

            <div class="row pt-4 pb-4">
                <div class="col-lg-6">
                    <div class="feature-box feature-box-style-2 custom-feature-box-style-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="0">
                        <div class="feature-box-icon mt-3">
                            <img src="img/demos/education/icons/icon-1.png" class="img-fluid" width="60" alt="" />
                        </div>
                        <div class="feature-box-info">
                            <h2 class="font-weight-semibold text-5 mb-0">Visi</h2>
                            <p class="mb-4 pb-2">{{ DB::table('profils')->value('visi') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="feature-box feature-box-style-2 custom-feature-box-style-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                        <div class="feature-box-icon mt-3">
                            <img src="img/demos/education/icons/icon-2.png" class="img-fluid" width="60" alt="" />
                        </div>
                        <div class="feature-box-info">
                            <h2 class="font-weight-semibold text-5 mb-0">Misi</h2>
                            <ul class="list list-icons">
                                @foreach($misis as $misi)
                                <li><i class="fas fa-check"></i> {{ $misi->poin }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="font-weight-semibold text-5 mb-0">Sejarah Yayasan Teras Diskusi</h2>
            <p style="white-space: pre-line">{{ DB::table('profils')->value('sejarah') }}</p>

            </div>
    </div>
</div>
@endsection
