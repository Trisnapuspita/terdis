@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Teras Diskusi</div>

                <div class="panel-body">
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

                    <div class="list-group">
                        <a href="/profil2" class="list-group-item">Profil</a>
                        <a href="/visi" class="list-group-item">Visi</a>
                        <a href="/misi" class="list-group-item">Misi</a>
                        <a href="/profil" class="list-group-item">Kontak</a>
                        <a href="/testimoni" class="list-group-item">Testimoni</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
