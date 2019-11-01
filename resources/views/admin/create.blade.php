@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Buat materi:</div>

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

                    <form action="/materi" class="form-group" method="POST" enctype="multipart/form-data">
                        <label for="nama">Judul Materi:</label> <br>
                        <input type="text" name="nama" class="form-control" value="{{ old('nama') }}"> <br>
                        <label for="deskripsi">Deskripsi:</label> <br>
                        <textarea name="deskripsi" class="form-control" cols="100" rows="20" >{{ old('deskripsi') }}</textarea> <br>
                        <label for="file">File:</label> <br>
                        <input type="file" name="file" class="form-control"> <br>

                        <input type="submit" class="btn btn-primary" name="submit" value="Create">
                        {{ csrf_field() }}
                    </form>
                    <button onclick="goBack()" class="btn btn-info">Back</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
