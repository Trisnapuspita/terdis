@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Profil</div>

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

                    <form action="/profil2" class="form-horizontal" method="POST">
                        <div class="form-group{{ $errors->has('tentang_kami') ? ' has-error' : '' }}">
                            <label for="tentang_kami" class="control-label col-sm-2">Tentang kami (Beranda) :</label>

                            <div class="col-sm-10">
                                <textarea name="tentang_kami" class="form-control" cols="100" rows="4" required autofocus>{{ $profil->tentang_kami }}</textarea>

                                @if ($errors->has('tentang_kami'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tentang_kami') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('pendahuluan') ? ' has-error' : '' }}">
                            <label for="pendahuluan" class="control-label col-sm-2">Pendahuluan:</label>

                            <div class="col-sm-10">
                                <textarea name="pendahuluan" class="form-control" cols="100" rows="4" required autofocus>{{ $profil->pendahuluan }}</textarea>

                                @if ($errors->has('pendahuluan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pendahuluan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('sejarah') ? ' has-error' : '' }}">
                            <label for="sejarah" class="control-label col-sm-2">Sejarah:</label>

                            <div class="col-sm-10">
                                <textarea name="sejarah" class="form-control" cols="100" rows="4" required autofocus>{{ $profil->sejarah }}</textarea>

                                @if ($errors->has('sejarah'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sejarah') }}</strong>
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
