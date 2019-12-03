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
        <div class="col-sm-12 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body" style="white-space: pre-line">
					<p style="text-align: center"><img src="../../img/biner.jpeg" width="250"></p>
					<h2 style="text-align: center; font-weight:bold">BINER</h2>
                    <p style="text-align: justify">Berkembangnya dunia teknologi membawa dampak yang cukup besar terhadap dunia, khususnya di Indonesia sendiri. Segala jenis ilmu pengetahuan telah membaur menjadi satu kesatuan dan menciptakan sebuah prangkat fungsional yang saat ini kita kenal dengan nama komputer. <br>
                        Tentunya hal ini perlu di seimbangkan oleh pengetahuan yang sepadan dengan kemajuan tersebut. Dengan ini mahasiswa program studi ilmu komputer telah mendeklarasikan sebuah kelompok studi yang akan berkontribusi lebih terhadap dunia baru ini selain dari perkuliahan yang ada. <br>
                        “Developing Future and Unyielding Learn of Technology” atau yang di singkat dengan DEFAULT merupakan kelompok studi yang bergerak di bidang pengembangan teknologi seperti pada bidang arsitektur, website, animasi, dan juga aplikasi. Kelompok studi ini di dirikan oleh angkatan pertama program studi ilmu komputer pada tahun 2013.</p>
					<button onclick="goBack()" class="btn btn-primary">Back</button><br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


