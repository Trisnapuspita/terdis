@extends('layouts.main')

@section('title')
| Tiket Saya
@endsection


@section('content')

<section class="page-header custom-page-header background-color-quaternary parallax mb-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="/img/demos/education/parallax/parallax-6.jpg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="font-weight-bold"> Tiket <span class="text-color-light"></h1>
            </div>
            <div class="col-lg-6">
                <ul class="breadcrumb pull-right">
                    <li><a href="/">Beranda</a></li>
                    <li class="active text-color-light">Tiket</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="section background-color-tertiary border-0 my-0 pb-4">
    <div class="container">
        <div class="row" style="text-align:center; background-color:white; padding:10px; margin:10px">
            <div class="col-lg-4" >
                <img src="../../img/biner.jpeg" width="175" style="border-top:10px; padding:10px" >
            </div>
            <div class="col-lg-4"><br>
                <h3 class="font-weight-semibold text-transform-none mb-4">BINER UNJ</h3>
                <p><i class="fa fa-calendar"></i> Senin, 13-08-2019<br>
                    <i class="fa fa-clock"></i> 08.00 s.d. 10.00 <br>
                    <i class="fa fa-home"></i> Gedung Sasana Wirasakti<br>
                    <i class="fa fa-money-bill-alt"></i> Rp100.000,-</p>
            </div>
            <div class="col-lg-4">
                <p><label class="font-weight-bold" style="color:black; font-size:12pt">Status</label><br> <span><label style="background-color:crimson; padding:5px; color:white">Menunggu Pembayaran</label></span></p>
                <input type="file" style="background-color:sienna; color:white">
            </div>
        </div>
        <div class="row" style="text-align:center; background-color:white; padding:10px; margin:10px">
            <div class="col-lg-4" >
                <img src="../../img/biner.jpeg" width="175" style="border-top:10px; padding:10px" >
            </div>
            <div class="col-lg-4"><br>
                <h3 class="font-weight-semibold text-transform-none mb-4">BINER UNJ</h3>
                <p><i class="fa fa-calendar"></i> Senin, 13-08-2019<br>
                    <i class="fa fa-clock"></i> 08.00 s.d. 10.00 <br>
                    <i class="fa fa-home"></i> Gedung Sasana Wirasakti<br>
                    <i class="fa fa-money-bill-alt"></i> Rp100.000,-</p>
            </div>
            <div class="col-lg-4">
                <p><label class="font-weight-bold" style="color:black; font-size:12pt">Status</label><br> <span><label style="background-color:teal; padding:5px; color:white">Menunggu Konfirmasi</label></span></p>
                <input type="file" style="background-color:sienna; color:white">
            </div>
        </div>
        <div class="row" style="text-align:center; background-color:white; padding:10px; margin:10px">
            <div class="col-lg-4" >
                <img src="../../img/biner.jpeg" width="175" style="border-top:10px; padding:10px" >
            </div>
            <div class="col-lg-4"><br>
                <h3 class="font-weight-semibold text-transform-none mb-4">BINER UNJ</h3>
                <p><i class="fa fa-calendar"></i> Senin, 13-08-2019<br>
                    <i class="fa fa-clock"></i> 08.00 s.d. 10.00 <br>
                    <i class="fa fa-home"></i> Gedung Sasana Wirasakti<br>
                    <i class="fa fa-money-bill-alt"></i> Rp100.000,-</p>
            </div>
            <div class="col-lg-4">
                <p><label class="font-weight-bold" style="color:black; font-size:12pt">Status</label><br> <span><label style="background-color:dodgerblue; padding:5px; color:white">Diterima</label></span></p>
            </div>
        </div>
    </div>
</section>

@endsection
