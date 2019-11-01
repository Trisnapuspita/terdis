@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tambah Misi:</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(count($errors)>0)
                        <p class="text-danger">Eror create because:</p>
                        <ul class="text-danger">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                    <form action="/misi" class="form-horizontal" method="POST">
                        <div class="form-group{{ $errors->has('poin') ? ' has-error' : '' }}">
                            <label for="poin" class="control-label col-sm-2">Misi :</label>

                            <div class="col-sm-8">
                            <textarea name="poin" class="form-control" cols="70" rows="4" required autofocus></textarea>

                                @if ($errors->has('poin'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('poin') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">        
                            <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" class="btn btn-primary" name="submit" value="Tambah" onclick="return confirm('Apakah Anda yakin untuk mengedit?')">
                                {{ csrf_field() }}
                                <a class="btn btn-info" href="/misi">Batal</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
