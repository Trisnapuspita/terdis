@extends('layouts.base')

@section('title')
Teras Diskusi | Pendaftaran Baru
@endsection

@section('open2')
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
                <span>Data User</span>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <span>Buat User Baru</span>
            </li>
        </ul>
    </div>
    <!-- END PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN VALIDATION STATES-->
            <div class="portlet light portlet-fit portlet-form ">
                <div class="portlet-title">
                    <div class="caption">
                        <i class=" icon-layers font-red"></i>
                        <span class="caption-subject font-red sbold uppercase">Mendaftar User Baru</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <!-- BEGIN FORM-->
                    <form method="POST" action="register2">
                            {{ csrf_field() }}
                        <div class="form-body">
                            <div class="form-group form-md-line-input form-md-floating-label{{ $errors->has('name') ? ' has-error' : '' }}">
                                <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" required autofocus>
                                <label for="form_control_1">Nama</label>
                                @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        <div class="form-group form-md-line-input form-md-floating-label{{ $errors->has('role') ? ' has-error' : '' }}">
                            <select class="form-control" name="role" id="role">
                                <option value=""></option>
                                <option value="1">Siswa</option>
                                <option value="2">Admin</option>
                                <option value="3">Pengajar</option>
                                <option value="4">Pendafar</option>
                            </select>
                            @if ($errors->has('role'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('role') }}</strong>
                                    </span>
                                @endif
                            <label for="form_control_1">Status</label>
                        </div>
                        <div class="form-group form-md-line-input form-md-floating-label{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="input-group">
                                <input type="text" class="form-control" name="email" id="email" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                                <label for="form_control_1">Email</label>
                                <span class="input-group-addon">
                                    <i class="fa fa-envelope"></i>
                                </span>
                            </div>
                        </div>
                        <div class="form-group form-md-line-input form-md-floating-label{{ $errors->has('kelas') ? ' has-error' : '' }}">
                            <select class="form-control" name="kelas" id="kelas">
                                <option value=""></option>
                                @foreach($kelas as $kelas)
                                <option value="{{ $loop->iteration }}">{{ $kelas->kelas }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('kelas'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kelas') }}</strong>
                            </span>
                        @endif
                            <label for="form_control_1">Kelas</label>
                        </div>
                        <div class="form-group form-md-line-input form-md-floating-label{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input id="password" type="password" class="form-control" name="password" required>
                            @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            <label for="form_control_1">Password</label>
                        </div>
                        <div class="form-group form-md-line-input form-md-floating-label">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            <label for="form_control_1">Konfirmasi Password</label>
                        </div>
                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn dark">Simpan</button>
                                    <button type="reset" class="btn default">Batal</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- END FORM-->
                </div>
            </div>
            <!-- END VALIDATION STATES-->
        </div>
    </div>
</div>
<!-- END CONTENT BODY -->
@endsection

