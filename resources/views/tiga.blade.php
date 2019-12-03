@extends('layouts.base')

@section('title')
|
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
                <span>Soal</span>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <span>Buat Soal</span>
            </li>
        </ul>
    </div>

    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif

    @if(count($errors)>0)
    <div class="alert alert-danger">
        <p class="text-danger">Eror karena:</p>
        <ul class="text-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <!-- END PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">
            <div class="portlet light form-fit ">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-puzzle font-red"></i>
                        <span class="caption-subject font-red bold uppercase">Buat Soal Baru</span>
                    </div>
                </div>
                <div class="portlet-body form">
                    <form action="/pengajar/soal" method="POST" enctype="multipart/form-data" class="form-horizontal form-bordered">
                        <div class="form-body">
                            <div class="form-group">
                                <label class="control-label col-md-2">Untuk Kelas</label>
                                <div class="col-md-10">
                                        <div class="md-checkbox-inline">
                                            @foreach($kelas as $kelas)
                                            <div class="md-checkbox">
                                            <input type="checkbox" id="checkbox1_{{$kelas->id}}" name="kelas[]" value={{$kelas->id}} class="md-check">
                                            <label for="checkbox1_{{$kelas->id}}">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> {{$kelas->kelas}} </label>
                                            </div>
                                            @endforeach
                                        </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">Nama Soal</label>
                                <div class="col-md-10">
                                    <input type="text" name="nm_soal" class="form-control" value="{{ old('nm_soal') }}" required autofocus>
                                    @if ($errors->has('nm_soal'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('nm_soal') }}</strong>
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
<script src="{{asset('assets/global/plugins/jquery-validation/js/jquery.validate.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/jquery-validation/js/additional-methods.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/pages/scripts/form-validation-md.min.js')}}" type="text/javascript"></script>
@endsection
