@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-body" id="app">
                    <chat-app :user="{{ auth()->user() }}"></chat-app>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
