@extends('layouts.main')

@section('title')
| Guru Digital - Berita
@endsection

@section('navbar_guru')
active
@endsection

@section('content')

<section class="page-header custom-page-header background-color-quaternary parallax mb-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="/img/demos/education/parallax/parallax-6.jpg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="font-weight-bold">Berita <span class="text-color-light">Belajar Berkarya Berbagi</span></h1>
            </div>
            <div class="col-lg-6">
                <ul class="breadcrumb pull-right">
                    <li><a href="/">Beranda</a></li>
                    <li><a href="#">Guru Digital</a></li>
                    <li class="active text-color-light">Berita</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="blog-posts">
                <section class="section border-0 my-0">
                    <div class="container">
                        <div class="row justify-content-center mb-5">

                            <div class="col-md-6 col-lg-4 col-xl-3 mb-4 pb-3 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
                                <div class="thumb-info thumb-info-hide-wrapper-bg custom-thumb-info-style-1">
                                    <div class="thumb-info-wrapper">
                                        <a href="../../img/biner.jpg"><img src="../../img/biner.jpeg" width="100" height="300"  alt=""></a>
                                    </div>
                                    <div class="thumb-info-caption">
                                        <h4 class="font-weight-semibold text-transform-none"><a href="/kegiatan/" class="custom-link-color-dark">BINER UNJ</a></h4>
                                        <p>Biner adalah sebuah acara teknologi yang dinaungi oleh.......</p>
                                        <p><strong>Dibuat Pada: 11-10-2019</strong></p>
                                    </div>
                                    <div class="thumb-info-footer">
                                    <a href="/details/2" class="btn btn-primary text-1 btn-outline custom-btn-style-1 font-weight-semibold">Baca Selengkapnya..</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
@endsection
