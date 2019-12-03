@extends('layouts.base')

@section('title')
Teras Diskusi | Edit Informasi
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
                <span>Informasi</span>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <span>Edit Informasi</span>
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
                        <span class="caption-subject font-red bold uppercase">Edit Informasi</span>
                    </div>
                </div>
                <div class="portlet-body form">
                    <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal form-bordered">
                        <div class="form-body">
                            <div class="form-group{{ $errors->has('tentang_kami') ? ' has-error' : '' }}">
                                <label class="control-label col-md-2">Tentang Kami </label>
                                <div class="col-md-10">
                                    <textarea name="tentang_kami"data-provide="markdown" rows="10"></textarea>
                                    @if ($errors->has('tentang_kami'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tentang_kami') }}</strong>
                                    </span>
                                @endif <br>
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('pendahuluan') ? ' has-error' : '' }}">
                                <label class="control-label col-md-2">Pendahuluan </label>
                                <div class="col-md-10">
                                    <textarea name="pendahuluan" data-provide="markdown" rows="10"></textarea>
                                    @if ($errors->has('pendahuluan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pendahuluan') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('sejarah') ? ' has-error' : '' }}">
                                <label class="control-label col-md-2">Sejarah </label>
                                <div class="col-md-10">
                                    <textarea name="sejarah"  data-provide="markdown" rows="10"></textarea>
                                    @if ($errors->has('sejarah'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sejarah') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-2 col-md-10">
                                    <input type="submit" class="btn btn-primary" name="submit" value="Edit" onclick="return confirm('Apakah Anda yakin untuk mengedit?')">
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
