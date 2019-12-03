@extends('layouts.main')

@section('content')

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
@endsection
