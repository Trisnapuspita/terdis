@extends('layouts.base')

@section('title')
Teras Diskusi | Materi
@endsection

@section('open13')
active open
@endsection

@section('content')
<div class="page-content">
    <!-- BEGIN PAGE HEADER-->
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="icon-home"></i>
                <a href="/home">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <span>Materi</span>
            </li>
        </ul>
    </div>

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
    <!-- END PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN Portlet PORTLET-->
            <div class="portlet box red-sunglo">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i>{{$materi->nama}}</div>
                </div>
                <div class="portlet-body">
                    <p>
                        {{$materi->deskripsi}}
                    </p>
                        <a href="/storage/upload/{{ $materi->file }}">{{ $materi->file }}</a>
                </div>
            </div>
            <!-- END Portlet PORTLET-->
        </div>
    </div>
</div>
<!-- END CONTENT BODY -->
@endsection
