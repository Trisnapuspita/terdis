@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Kontak</div>

                <div class="panel-body">
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

                    <form action="/profil/1" class="form-horizontal" method="POST">
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="control-label col-sm-2">E-Mail :</label>

                            <div class="col-sm-10">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $profil->email }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('telepon') ? ' has-error' : '' }}">
                            <label for="telepon" class="control-label col-sm-2">Telepon :</label>

                            <div class="col-sm-10">
                                <input id="telepon" type="text" class="form-control" name="telepon" value="{{ $profil->telepon }}" required autofocus>

                                @if ($errors->has('telepon'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telepon') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
                            <label for="alamat" class="control-label col-sm-2">Alamat :</label>

                            <div class="col-sm-10">
                                <input id="alamat" type="text" class="form-control" name="alamat" value="{{ $profil->alamat }}" required autofocus>

                                @if ($errors->has('alamat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('alamat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('waktu_kerja') ? ' has-error' : '' }}">
                            <label for="waktu_kerja" class="control-label col-sm-2">Waktu kerja :</label>

                            <div class="col-sm-10">
                                <input id="waktu_kerja" type="text" class="form-control" name="waktu_kerja" value="{{ $profil->waktu_kerja }}" required autofocus>

                                @if ($errors->has('waktu_kerja'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('waktu_kerja') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">        
                            <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" class="btn btn-primary" name="submit" value="Edit" onclick="return confirm('Apakah Anda yakin untuk mengedit?')">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="PUT">
                                <a class="btn btn-info" href="/admin/informasi">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
