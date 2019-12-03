@extends('layouts.base')

@section('title')
Teras Diskusi | Soal
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
        <div class="col-md-12">
            <div class="portlet light form-fit ">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-pencil font-red"></i>
                        <span class="caption-subject font-red bold uppercase">{{ $soal->nm_soal }}</span>
                    </div>
                </div>
                <div class="portlet-body form">
                    <form action="/soal/{{$soal->id}}/{{ Auth::user()->id }}" method="POST" enctype="multipart/form-data" class="form-horizontal form-bordered">
                        <div class="form-body">
                             @php $i=1 @endphp
                             @foreach($soal->pilihans as $pilihan)
                            <div class="form-group form-md-radios">
                                <label class="control-label col-md-1">{{$i++}}</label>
                                <div class="col-md-10">
                                    <label for="">{{ $pilihan->soal }}</label>
                                    <img src="/storage/upload/{{$pilihan->gambar}}" style="max-width: 15%; height: auto; " alt="">
                                    <div class="md-radio-list">
                                        <div class="md-radio">
                                            <input type="radio" id="checkbox1_{{ $loop->iteration }}" name="jawaban{{ $loop->iteration }}" value="a" class="md-radiobtn">
                                            <label for="checkbox1_{{ $loop->iteration }}">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span>A. {{
                                                    $pilihan->opsiA }}
                                            </label>
                                        </div>
                                        <div class="md-radio">
                                            <input type="radio" id="checkbox1_{{ $loop->iteration }}" name="jawaban{{ $loop->iteration }}" value="b" class="md-radiobtn">
                                            <label for="checkbox1_{{ $loop->iteration }}">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span>B. {{
                                                    $pilihan->opsiB }}
                                            </label>
                                        </div>
                                        <div class="md-radio">
                                            <input type="radio" id="checkbox1_{{ $loop->iteration }}" name="jawaban{{ $loop->iteration }}" value="c" class="md-radiobtn">
                                            <label for="checkbox1_{{ $loop->iteration }}">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span>C. {{
                                                    $pilihan->opsiC }}
                                            </label>
                                        </div>
                                        <div class="md-radio">
                                            <input type="radio" id="checkbox1_{{ $loop->iteration }}" name="jawaban{{ $loop->iteration }}" value="d" class="md-radiobtn">
                                            <label for="checkbox1_{{ $loop->iteration }}">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span>D. {{
                                                    $pilihan->opsiD }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-2 col-md-10">
                                    <input type="submit" class="btn dark" value="Jawab" onclick="return confirm('Selesai?')">
                                    {{ csrf_field() }}
                                    &nbsp;<button onclick="goBack()" class="btn default">Batal</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END CONTENT BODY -->
@endsection
