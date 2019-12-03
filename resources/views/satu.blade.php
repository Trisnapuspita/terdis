@extends('layouts.base')

@section('title')
Teras Diskusi | Materi
@endsection

@section('open8')
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
                <a href="/home">Materi</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <span>Kelas</span>
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
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        DAFTAR KELAS
                    </div>
                </div>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_3" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th class="min-phone-l">Kelas</th>
                                <th class="min-tablet">Mata Pelajaran</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @php $i=1 @endphp
                            @foreach($user->soals as $soal)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{ $soal->pivot->created_at }}</td>
                                <td>{{ $soal->nm_soal }}</td>
                                <td>{{ $soal->pivot->nilai }}</td>
                            </tr>
                            @endforeach --}}
                            <tr>
                                <td>1</td>
                                <td>7A</td>
                                <td>
                                    <div class="col-md-8">
                                        <select class="form-control select2me" name="options2">
                                            <option value="">Pilih...</option>
                                            <option value="Option 1"><a href="/cobaa">Matematika</a></option>
                                            <option value="Option 2"><a href="/cobaa">IPA</a></option>
                                            <option value="Option 1"><a href="/cobaa">Bahasa Indonesia</a></option>
                                            <option value="Option 2"><a href="/cobaa">Bahasa Inggris</a></option>
                                        </select>
                                    </div>
                                </td>
                                <td style="text-align:center"><a href="/pengajar/materi" class="btn btn-info btn-md">Lihat</a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>8C</td>
                                <td>
                                    <div class="col-md-8">
                                        <select class="form-control select2me" name="options2">
                                            <option value="">Pilih...</option>
                                            <option value="Option 1"><a href="/cobaa">Matematika</a></option>
                                            <option value="Option 2"><a href="/cobaa">IPA</a></option>
                                            <option value="Option 1"><a href="/cobaa">Bahasa Indonesia</a></option>
                                            <option value="Option 2"><a href="/cobaa">Bahasa Inggris</a></option>
                                        </select>
                                    </div>
                                </td>
                                <td style="text-align:center"><a href="/pengajar/materi" class="btn btn-info btn-md">Lihat</a></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>9D</td>
                                <td>
                                    <div class="col-md-8">
                                        <select class="form-control select2me" name="options2">
                                            <option value="">Pilih...</option>
                                            <option value="Option 1"><a href="/cobaa">Matematika</a></option>
                                            <option value="Option 2"><a href="/cobaa">IPA</a></option>
                                            <option value="Option 1"><a href="/cobaa">Bahasa Indonesia</a></option>
                                            <option value="Option 2"><a href="/cobaa">Bahasa Inggris</a></option>
                                        </select>
                                    </div>
                                </td>
                                <td style="text-align:center"><a href="/pengajar/materi" class="btn btn-info btn-md">Lihat</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>
</div>
<!-- END CONTENT BODY -->
@endsection

@section('style')
<link href="{{asset('/assets/global/plugins/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('script')
<script src="{{asset('/assets/global/scripts/datatable.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/datatables/datatables.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/pages/scripts/table-datatables-responsive.min.js')}}" type="text/javascript"></script>
@endsection
