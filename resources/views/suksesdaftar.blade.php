@extends('layouts.login')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Daftar Bimbel</div>

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

                    <p>Terimakasih telah mendaftar.</p>
                    <p>Pendaftaran anda sedang diproses</p>
                    <p style="text-align: center"><a href="/" class="btn btn-primary btn-md active">Kembali ke Website</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
