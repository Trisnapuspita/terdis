@extends('layouts.base')

@section('title')
Teras Diskusi | Edit Soal
@endsection

@section('open9')
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
                <span>Soal</span>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <span>Edit Soal</span>
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
                        <i class="icon-pencil font-red"></i>
                        <span class="caption-subject font-red bold uppercase">Edit Soal {{ $pilihan->soal }}</span>
                    </div>
                </div>
                <div class="portlet-body form">
                    <form action="/pengajar/soal/pilihan/{{$id}}/{{$no}}" method="POST" enctype="multipart/form-data" class="form-horizontal form-bordered">
                        <div class="form-body">
                            <div class="form-group">
                                    <label class="control-label col-md-2"> Pertanyaan </label>
                                    <div class="col-md-10">
                                        <textarea name="soal" data-provide="markdown" rows="10">{{ $pilihan->soal }}</textarea>
                                        @if ($errors->has('soal'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('soal') }}</strong>
                                        </span>
                                    @endif <br>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">Gambar</label>
                                <div class="col-md-10">
                                    <img src="/storage/upload/{{$pilihan->gambar}}" style="max-width: 150px; height: auto; " class="image-fluid" alt="">
                                    <input type="file" name="gambar" class="form-control" autofocus>
                                    @if ($errors->has('gambar'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('gambar') }}</strong>
                                        </span>
                                    @endif <br>
                                </div>
                            </div>
                            <div class="form-group">
                                    <label class="control-label col-md-2"> Opsi A </label>
                                    <div class="col-md-10">
                                        <textarea name="opsiA" data-provide="markdown" rows="5">{{ $pilihan->opsiA }}</textarea>
                                        @if ($errors->has('opsiA'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('opsiA') }}</strong>
                                        </span>
                                    @endif <br>
                                </div>
                            </div>
                            <div class="form-group">
                                    <label class="control-label col-md-2"> Opsi B</label>
                                    <div class="col-md-10">
                                        <textarea name="opsiB" data-provide="markdown" rows="5">{{ $pilihan->opsiB }}</textarea>
                                        @if ($errors->has('opsiB'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('opsiB') }}</strong>
                                        </span>
                                    @endif <br>
                                </div>
                            </div>
                            <div class="form-group">
                                    <label class="control-label col-md-2"> Opsi C </label>
                                    <div class="col-md-10">
                                        <textarea name="opsiC" data-provide="markdown" rows="5">{{ $pilihan->opsiC }}</textarea>
                                        @if ($errors->has('opsiC'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('opsiC') }}</strong>
                                        </span>
                                    @endif <br>
                                </div>
                            </div>
                            <div class="form-group">
                                    <label class="control-label col-md-2"> Opsi D </label>
                                    <div class="col-md-10">
                                        <textarea name="opsiD" data-provide="markdown" rows="5">{{ $pilihan->opsiD }}</textarea>
                                        @if ($errors->has('opsiD'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('opsiD') }}</strong>
                                        </span>
                                    @endif <br>
                                </div>
                            </div>
                            <div class="form-group form-md-radios">
                                <label class="col-md-2 control-label" for="form_control_1">Jawaban Benar</label>
                                <div class="col-md-9">
                                    <div class="md-radio-inline">
                                        <div class="md-radio">
                                        <input type="radio" id="checkbox1_8" name="jawaban" value="a" class="md-radiobtn">
                                            <label for="checkbox1_8">
                                                <span ></span>
                                                <span class="check"></span>
                                                <span class="box"></span> A </label>
                                        </div>
                                        <div class="md-radio">
                                            <input type="radio" id="checkbox1_9" name="jawaban" value="b" class="md-radiobtn">
                                            <label for="checkbox1_9">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> B </label>
                                        </div>
                                        <div class="md-radio">
                                            <input type="radio" id="checkbox1_10" name="jawaban" value="c" class="md-radiobtn">
                                            <label for="checkbox1_10">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> C </label>
                                        </div>
                                        <div class="md-radio">
                                            <input type="radio" id="checkbox1_11" name="jawaban" value="d" class="md-radiobtn">
                                            <label for="checkbox1_11">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> D </label>
                                        </div>
                                    </div>
                                    @if ($errors->has('jawaban'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('jawaban') }}</strong>
                                        </span>
                                    @endif <br>
                                </div>
                            </div>
                            <div class="form-group">
                                    <label class="control-label col-md-2"> Pembahasan </label>
                                    <div class="col-md-10">
                                        <textarea name="pembahasan" data-provide="markdown" rows="5">{{ $pilihan->pembahasan }}</textarea>
                                        @if ($errors->has('pembahasan'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('pembahasan') }}</strong>
                                        </span>
                                    @endif <br>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">Gambar Pembahasan</label>
                                <div class="col-md-10">
                                    <img src="/storage/upload/{{$pilihan->gambar_pembahasan}}" style="max-width: 150px; height: auto; "class="image-fluid" alt="">
                                    <input type="file" name="gambar_pembahasan" class="form-control" autofocus>
                                    @if ($errors->has('gambar_pembahasan'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('gambar_pembahasan') }}</strong>
                                        </span>
                                    @endif <br>
                                </div>
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
<script src="{{asset('/assets/global/plugins/jquery-validation/js/jquery.validate.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/jquery-validation/js/additional-methods.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/pages/scripts/form-validation-md.min.js')}}" type="text/javascript"></script>
@endsection
