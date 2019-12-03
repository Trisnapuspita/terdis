@extends('layouts.base')

@section('title')
Teras Diskusi | Edit Berita
@endsection

@section('open4')
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
                <span>Berita</span>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <span>Edit Berita</span>
            </li>
        </ul>
    </div>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    @if(count($errors)>0)
        <p class="text-danger">Error edit karena:</p>
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
                        <span class="caption-subject font-red bold uppercase">Edit Berita Baru</span>
                    </div>
                </div>
                <div class="portlet-body form">
                        <form action="/beritas/{{ $berita->id }}" class="form-horizontal form-bordered" method="POST" enctype="multipart/form-data">
                        <div class="form-body">
                                <div class="form-group">
                                    <label class="control-label col-md-2">Judul Berita</label>
                                    <div class="col-md-10">
                                        <input type="text" name="judul_berita" class="form-control" value="{{ $berita->judul_berita }}" required autofocus>
                                        @if ($errors->has('judul_berita'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('judul_berita') }}</strong>
                                            </span>
                                        @endif <br>
                                    </div>
                                </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">Isi Berita </label>
                                <div class="col-md-10">
                                    <textarea name="isi_berita" data-provide="markdown" rows="10">{{ $berita->isi_berita }}</textarea>
                                    @if ($errors->has('isi_berita'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('isi_berita') }}</strong>
                                    </span>
                                @endif <br>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                                <label class="control-label col-md-2">Foto Kegiatan</label>
                                <div class="col-md-10">
                                    <img src="storage/upload/{{ $berita->foto }}" width="100" alt="">
                                    <input type="file" name="foto" value="{{ $berita->foto }}" class="form-control" required autofocus>
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
                                    <input type="submit" class="btn dark" name="submit" value="Edit" onclick="return confirm('Apakah Anda yakin untuk mengedit?')">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="PUT">
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
