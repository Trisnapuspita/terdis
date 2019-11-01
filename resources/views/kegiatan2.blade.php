@extends('layouts.pengunjung')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-body">
					<p style="text-align: center"><img src="/storage/upload/{{ $berita->foto }}"></p>
					<h1 style="text-align: center; font-weight:bold">{{ $berita->judul_berita }}</h1>
                    <p style="white-space: pre-line">{{ $berita->isi_berita }}</p>
					<button onclick="goBack()" class="btn btn-primary">Back</button>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection