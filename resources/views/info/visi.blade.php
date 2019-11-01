@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Visi</div>

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

                    <form action="/visi" class="form-horizontal" method="POST">
                        <div class="form-group{{ $errors->has('visi') ? ' has-error' : '' }}">
                            <label for="visi" class="control-label col-sm-2">Visi :</label>

                            <div class="col-sm-10">
                                <input id="visi" type="text" class="form-control" name="visi" value="{{ $profil->visi }}" required autofocus>

                                @if ($errors->has('visi'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('visi') }}</strong>
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
