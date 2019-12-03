@extends('layouts.base')

@section('title')
Teras Diskusi | Materi
@endsection

@section('open14')
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
                <span>Soal</span>
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
        @foreach($kelas->soals as $soal)
        <div class="col-lg-4">
            <div class="portlet mt-element-ribbon light portlet-fit ">
                <div class="ribbon ribbon-right ribbon-clip ribbon-shadow ribbon-border-dash-hor ribbon-color-success uppercase">
                    <div class="ribbon-sub ribbon-clip ribbon-right"></div> Matematika </div>
                <div class="portlet-title">
                    <div class="caption">
                        <i class=" icon-layers font-green"></i>
                        <span class="caption-subject font-green bold uppercase">Latihan</span>
                    </div>
                </div>
                <div class="portlet-body" style="text-align:center">
                    <a href="/soal/{{$soal->id}}" class="list-group-item">{{ $soal->nm_soal }}</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- END CONTENT BODY -->
@endsection
