@extends('layouts.base')

@section('title')
Teras Diskusi | Edit Program
@endsection

@section('open6')
active open
@endsection

@section('content')

<div class="page-content">
    <!-- BEGIN PAGE HEADER-->
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="icon-home"></i>
                <a href="/home">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <span>Program</span>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <span>Edit Program</span>
            </li>
        </ul>
    </div>

    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif

    @if(count($errors)>0)
        <p class="text-danger">Eror karena:</p>
        <ul class="text-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <!-- END PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">
            <div class="portlet light form-fit ">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-puzzle font-red"></i>
                        <span class="caption-subject font-red bold uppercase">Edit Program</span>
                    </div>
                </div>
                <div class="portlet-body form">
                    <form action="/programs" method="POST" enctype="multipart/form-data" class="form-horizontal form-bordered">
                        <div class="form-body">
                            <div class="form-group">
                                <label class="control-label col-md-2">Judul Program</label>
                                <div class="col-md-10">
                                    <input type="text" name="judul_berita" class="form-control" value="{{ old('judul_berita') }}" required autofocus>
                                    @if ($errors->has('judul_berita'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('judul_berita') }}</strong>
                                        </span>
                                    @endif <br>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">Pilih Tanggal</label>
                                <div class="col-md-4">
                                    <div class="input-group input-large date-picker input-daterange"  data-date-format="mm/dd/yyyy">
                                        <input type="text" class="form-control" name="from">
                                        <span class="input-group-addon"> sampai </span>
                                        <input type="text" class="form-control" name="to"> </div>
                                    <!-- /input-group -->
                                    <span class="help-block"> Pilih rentang waktu </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">Pilih Waktu</label>
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <input type="text" class="form-control timepicker timepicker-24">
                                        <span class="input-group-btn">
                                            <button class="btn default" type="button">
                                                <i class="fa fa-clock-o"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                                <label class="control-label col-md-1">sampai</label>
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <input type="text" class="form-control timepicker timepicker-24">
                                        <span class="input-group-btn">
                                            <button class="btn default" type="button">
                                                <i class="fa fa-clock-o"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">Harga Tiket</label>
                                <div class="col-md-4">
                                    <input type="number" name="judul_berita" class="form-control" value="{{ old('judul_berita') }}" required autofocus>
                                    @if ($errors->has('judul_berita'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('judul_berita') }}</strong>
                                        </span>
                                    @endif <br>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">Pembayaran</label>
                                <div class="col-md-2"  style="text-align:center">
                                    <label>Nama Bank</label>
                                    <input type="text" name="judul_berita" class="form-control" value="{{ old('judul_berita') }}" required autofocus>
                                    @if ($errors->has('judul_berita'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('judul_berita') }}</strong>
                                        </span>
                                    @endif <br>
                                </div>
                                <div class="col-md-4"  style="text-align:center">
                                    <label>Nama Pemilik Akun Bank </label>
                                    <input type="text" name="judul_berita" class="form-control" value="{{ old('judul_berita') }}" required autofocus>
                                    @if ($errors->has('judul_berita'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('judul_berita') }}</strong>
                                        </span>
                                    @endif <br>
                                </div>
                                <div class="col-md-4"  style="text-align:center">
                                    <label> Nomor Rekening </label>
                                    <input type="text" name="judul_berita" class="form-control" value="{{ old('judul_berita') }}" required autofocus>
                                    @if ($errors->has('judul_berita'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('judul_berita') }}</strong>
                                        </span>
                                    @endif <br>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">Deskripsi Program </label>
                                <div class="col-md-10">
                                    <textarea name="isi_berita" data-provide="markdown" rows="10">{{ old('isi_berita') }}</textarea>
                                    @if ($errors->has('isi_berita'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('isi_berita') }}</strong>
                                    </span>
                                @endif <br>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">Foto</label>
                                <div class="col-md-10">
                                    <input type="file" name="foto" class="form-control" required autofocus>
                                    @if ($errors->has('foto'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('foto') }}</strong>
                                        </span>
                                    @endif <br>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-2 col-md-10">
                                    <input type="submit" class="btn dark" name="submit" value="Simpan">
                                    {{ csrf_field() }}
                                    &nbsp;<button type="button" class="btn default">Batal</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- END CONTENT BODY -->
@endsection

@section('style')
<link href="{{asset('/assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('/assets/global/plugins/bootstrap-summernote/summernote.css')}}" rel="stylesheet" type="text/css" />
<link href="../../assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
<link href="../../assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
<link href="../../assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
<link href="../../assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
<link href="../../assets/global/plugins/clockface/css/clockface.css" rel="stylesheet" type="text/css" />
@endsection

@section('script')
<script src="{{asset('/assets/global/plugins/bootstrap-markdown/lib/markdown.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/bootstrap-summernote/summernote.min.js')}}" type="text/javascript"></script>
<script src="../../assets/global/plugins/moment.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/clockface/js/clockface.js" type="text/javascript"></script>
@endsection
