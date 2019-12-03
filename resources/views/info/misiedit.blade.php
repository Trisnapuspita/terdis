@extends('layouts.base')

@section('title')
Teras Diskusi | Edit Misi
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
                <span>Misi</span>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <span>Edit Misi</span>
            </li>
        </ul>
    </div>

    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif
    <!-- END PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN SAMPLE FORM PORTLET-->
            <div class="portlet light ">
                <div class="portlet-title">
                    <div class="caption font-green-haze">
                        <i class="icon-settings font-green-haze"></i>
                        <span class="caption-subject bold uppercase">Edit Misi</span>
                    </div>
                </div>
                <div class="portlet-body form">
                <form action="/misi/{{$misi->id}}" class="form-horizontal" method="POST">
                        <div class="form-body">
                            <div class="form-group form-md-line-input">
                                <label class="col-md-2 control-label" for="form_control_1">Nama :</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="poin" name="poin" value="{{ $misi->poin}}">
                                    <div class="form-control-focus"> </div>
                                    @if ($errors->has('poin'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('poin') }}</strong>
                                    </span>
                                @endif <br>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="row">
                                    {{ csrf_field() }}
                                <div class="col-md-offset-2 col-md-10">
                                    <input type="submit" class="btn btn-primary" name="submit" value="Edit" onclick="return confirm('Apakah Anda yakin untuk mengedit?')">
                                    {{ csrf_field() }}
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
