@extends('layouts.base')

@section('title')
Teras Diskusi | Buat Testimoni
@endsection


@section('open5')
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
                <span>Testimoni</span>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <span>Buat Testimoni</span>
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
                        <span class="caption-subject font-red bold uppercase">Buat Testimoni Baru</span>
                    </div>
                </div>
                <div class="portlet-body form">
                    <form action="/testimoni" method="POST" enctype="multipart/form-data" class="form-horizontal form-bordered">
                        <div class="form-body">
                            <div class="form-group">
                                <label class="control-label col-md-2">Nama :</label>
                                <div class="col-md-10">
                                    <input type="text" name="nama" class="form-control" value="{{ old('nama') }}" required autofocus>
                                    @if ($errors->has('nama'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('nama') }}</strong>
                                        </span>
                                    @endif <br>
                                </div>
                            </div>
                            <div class="form-body">
                                <div class="form-group">
                                    <label class="control-label col-md-2">Status :</label>
                                    <div class="col-md-10">
                                        <input type="text" name="status" class="form-control" value="{{ old('status') }}" required autofocus>
                                        @if ($errors->has('status'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('status') }}</strong>
                                        </span>
                                    @endif <br>
                                </div>
                            </div>
                            <div class="form-body">
                                <div class="form-group">
                                    <label class="control-label col-md-2">Pesan :</label>
                                    <div class="col-md-10">
                                    <textarea rows="4" type="text" name="pesan" class="form-control" required autofocus>{{ old('pesan') }}</textarea>
                                    @if ($errors->has('pesan'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('pesan') }}</strong>
                                        </span>
                                    @endif <br>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                                <label class="control-label col-md-2">Foto :</label>
                                <div class="col-md-10">
                                    <input type="file" name="foto" class="form-control" required autofocus>
                                    @if ($errors->has('foto'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('foto') }}</strong>
                                        </span>
                                    @endif <br>
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
@endsection

@section('script')
<script src="{{asset('/assets/global/plugins/bootstrap-markdown/lib/markdown.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/bootstrap-summernote/summernote.min.js')}}" type="text/javascript"></script>
@endsection
