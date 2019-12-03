@extends('layouts.base')

@section('title')
Teras Diskusi | Edit Kontak
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
                <span>Informasi</span>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <span>Edit Kontak</span>
            </li>
        </ul>
    </div>

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
            <!-- BEGIN SAMPLE FORM PORTLET-->
            <div class="portlet light ">
                <div class="portlet-title">
                    <div class="caption font-green-haze">
                        <i class="icon-settings font-green-haze"></i>
                        <span class="caption-subject bold uppercase">Edit Kontak</span>
                    </div>
                </div>
                <div class="portlet-body form">
                        <form action="/profil/1" class="form-horizontal" method="POST">
                        <div class="form-body{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="form-group form-md-line-input">
                                <label class="col-md-2 control-label" for="form_control_1">Email :</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="email" name="email" value="{{ $profil->email }}">
                                    <div class="form-control-focus"> </div>
                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-body{{ $errors->has('telepon') ? ' has-error' : '' }}">
                            <div class="form-group form-md-line-input">
                                <label class="col-md-2 control-label" for="form_control_1">Telepon :</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="telepon" name="telepon" placeholder="Contoh : Kelas 7" value="{{ $profil->telepon }}">
                                    <div class="form-control-focus"> </div>
                                    @if ($errors->has('telepon'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telepon') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-body{{ $errors->has('alamat') ? ' has-error' : '' }}">
                            <div class="form-group form-md-line-input">
                                <label class="col-md-2 control-label" for="form_control_1">alamat :</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Contoh : Kelas 7" value="{{ $profil->alamat }}">
                                    <div class="form-control-focus"> </div>
                                    @if ($errors->has('alamat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('alamat') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-body{{ $errors->has('waktu_kerja') ? ' has-error' : '' }}">
                            <div class="form-group form-md-line-input">
                                <label class="col-md-2 control-label" for="form_control_1">Waktu Kerja :</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="waktu_kerja" name="waktu_kerja" placeholder="Contoh : Kelas 7" value="{{ $profil->waktu_kerja }}">
                                    <div class="form-control-focus"> </div>
                                    @if ($errors->has('waktu_kerja'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('waktu_kerja') }}</strong>
                                    </span>
                                @endif
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
