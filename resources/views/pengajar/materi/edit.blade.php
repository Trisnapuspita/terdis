@extends('layouts.base')

@section('title')
Teras Diskusi | Edit Materi
@endsection

@section('open8')
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
                <span>Materi</span>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <span>Edit Materi</span>
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
                        <span class="caption-subject font-red bold uppercase">Edit Materi {{ $materi->nama }}</span>
                    </div>
                </div>
                <div class="portlet-body form">
                    <form action="/materi/{{ $materi->id }}" method="POST" enctype="multipart/form-data" class="form-horizontal form-bordered">
                        <div class="form-body">
                            <div class="form-group">
                                <label class="control-label col-md-2">Untuk Kelas</label>
                                <div class="col-md-10">
                                        <div class="md-checkbox-inline">
                                            @foreach($kelas as $kelas)
                                            <div class="md-checkbox">
                                            <input type="checkbox" id="checkbox1_{{$kelas->id}}" name="kelas[]" value='{{$kelas->id}}' class="md-check" @if($materi->kelas()->get()->contains($kelas->id)) checked @endif>
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
                                <label class="control-label col-md-2">Mata Pelajaran</label>
                                <div class="col-md-5">
                                    <select class="form-control custom-select" name="mapel[]" id="mapel_Select" required>
                                        @foreach ($mapel as $mapel)
                                                    <option required value='{{$mapel->id}}' @if($materi->subjects()->get()->contains($mapel->id)) selected @endif >{{$mapel->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">Judul Materi</label>
                                <div class="col-md-10">
                                    <input type="text" name="judul" class="form-control" value="{{ $materi -> nama }}" required autofocus>
                                    @if ($errors->has('judul'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('judul') }}</strong>
                                        </span>
                                    @endif <br>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2"> Deskripsi </label>
                                <div class="col-md-10">
                                    <textarea name="deskripsi" data-provide="markdown" rows="10">{{ $materi->deskripsi }}</textarea>
                                    @if ($errors->has('deskripsi'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('deskripsi') }}</strong>
                                    </span>
                                @endif <br>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                                <label class="control-label col-md-2">File</label>
                                <div class="col-md-4">
                                <input type="file" id="file_{{$materi->file}}" name="file" value='{{ $materi->file }}' class="form-control" autofocus><br>
                                    <label for="file_{{$materi->file}}">
                                            <span></span> {{$materi->file}} </label>
                                    @if ($errors->has('file'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('file') }}</strong>
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
