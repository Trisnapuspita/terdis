@extends('layouts.base')

@section('title')
Teras Diskusi | Edit Kelas
@endsection

@section('open3')
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
                <span>Data Kelas</span>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <span>Edit Kelas</span>
            </li>
        </ul>
    </div>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    @if(count($errors)>0)
        <p class="text-danger">Eror edit karena:</p>
        <ul class="text-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <!-- END PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN SAMPLE FORM PORTLET-->
            <div class="portlet light ">
                <div class="portlet-title">
                    <div class="caption font-green-haze">
                        <i class="icon-settings font-green-haze"></i>
                        <span class="caption-subject bold uppercase">Edit Kelas</span>
                    </div>
                </div>
                <div class="portlet-body form">
                        <form action="/kelas/{{ $kelas->id }}" class="form-horizontal" method="POST">
                        <div class="form-body">
                            <div class="form-group form-md-line-input">
                                <label class="col-md-2 control-label" for="form_control_1">Nama Kelas :</label>
                                <div class="col-md-10">
                                    <input type="text" name="kelas" class="form-control" value="{{ $kelas->kelas }}" >
                                    @if ($errors->has('kelas'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kelas') }}</strong>
                                    </span>
                                @endif <br>
                                    <div class="form-control-focus"> </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-2 col-md-10">
                                    <input type="submit" name="submit" class="btn blue" value="Edit" onclick="return confirm('Apakah Anda yakin untuk mengedit?')">{{ csrf_field() }}
                                    <input type="hidden" name="_method" value="PUT">
                                    <button type="button" class="btn default">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END SAMPLE FORM PORTLET-->
        </div>
    </div>

</div>
<!-- END CONTENT BODY -->
@endsection
