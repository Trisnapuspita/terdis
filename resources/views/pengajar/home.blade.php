@extends('layouts.pengajar')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Home</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>Dashboard Pengajar</p>
                    <table style="width:100%">
                        <tr>
                            <th>Nama</th>
                            <th>: {{ Auth::user()->name }}</th>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <th>: {{ Auth::user()->email }}</th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
