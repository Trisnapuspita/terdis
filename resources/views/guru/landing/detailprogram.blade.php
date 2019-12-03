@extends('layouts.main')

@section('title')
| Guru Digital - Program
@endsection

@section('navbar_guru')
active
@endsection

@section('content')

<section class="page-header custom-page-header background-color-quaternary parallax mb-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="/img/demos/education/parallax/parallax-6.jpg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="font-weight-bold"> Default FMIPA UNJ <span class="text-color-light">Deskripsi Program</span></h1>
            </div>
            <div class="col-lg-6">
                <ul class="breadcrumb pull-right">
                    <li><a href="/">Beranda</a></li>
                    <li><a href="#">Guru Digital</a></li>
                    <li class="active text-color-light">Program</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-sm-4" style="text-align:center">
            <h4 style="color:white">aaaaaaaa</h4>
            <img src="../../img/biner.jpeg" width="300">
        </div>
        <div class="col-sm-8">
            <div class="panel panel-default">
                <div class="panel-body">
                    <p style="color:white">aaaaaaaa</p>
                    <h2 style="font-weight:bold">DEFAULT FMIPA UNJ</h2>
                    <p style="font-size:12pt"><strong><i class="fa fa-calendar">  Sabtu, 10-11-2019</i>
                    <br><i class="fa fa-clock">  09.00</i>
                    <br><i class="fa fa-home">  Gedung Sasana Wirasakti</i>
                <br><i class="fa fa-money-bill-alt">  Rp. 100.000</i></strong></p>

                    <p>
                        <a href="/tiket" class="btn btn-info" style="font-weight:bold"><i class="fa fa-plus"></i> Daftar</a>
                    </p>

                    <p style="white-space: pre-line; text-align:justify">Berkembangnya dunia teknologi membawa dampak yang cukup besar terhadap dunia, khususnya di Indonesia sendiri. Segala jenis ilmu pengetahuan telah membaur menjadi satu kesatuan dan menciptakan sebuah prangkat fungsional yang saat ini kita kenal dengan nama komputer. <br>
                        Tentunya hal ini perlu di seimbangkan oleh pengetahuan yang sepadan dengan kemajuan tersebut. Dengan ini mahasiswa program studi ilmu komputer telah mendeklarasikan sebuah kelompok studi yang akan berkontribusi lebih terhadap dunia baru ini selain dari perkuliahan yang ada. <br>
                        “Developing Future and Unyielding Learn of Technology” atau yang di singkat dengan DEFAULT merupakan kelompok studi yang bergerak di bidang pengembangan teknologi seperti pada bidang arsitektur, website, animasi, dan juga aplikasi. Kelompok studi ini di dirikan oleh angkatan pertama program studi ilmu komputer pada tahun 2013.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
