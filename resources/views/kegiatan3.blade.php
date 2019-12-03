@extends('layouts.main')

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

@endsection
