@extends('layouts.base')

@section('title')
Teras Diskusi | Nilai
@endsection

@section('open10')
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
                <span>Nilai</span>
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
                        <i class="fa fa-globe"></i>Latihan Matematika Persamaan Linear Satu Variabel Kelas 7A</div>
                    <div class="tools"> </div>
                </div>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_3" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th class="min-phone-l">Nama</th>
                                <th class="min-tablet">Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @php $i=1 @endphp
                            @foreach($materis as $materi)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{ $materi->nama }}</td>
                                <td>
                                    @foreach($materi->kelas()->get() as $kelas) {{ $kelas->kelas }} <br> @endforeach
                                </td>
                                <td style="text-align:center"><a href="/materi/{{ $materi->id }}/edit" class="btn blue">Edit</a></td>
                                <td style="text-align:center">
                                    <form action="/materi/{{ $materi->id }}" method="POST">
                                        <input type="submit" class="btn red" name="submit" value="Hapus" onclick="return confirm('Apakah Anda yakin untuk menghapus?')">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE">
                                        </form>
                                </td>
                            </tr>
                            @endforeach --}}
                            <tr>
                                <td>1</td>
                                <td>Trisna Hastuti</td>
                                <td>100</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Ovitasari Dewi</td>
                                <td>100</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Muhammad Fathan</td>
                                <td>100</td>
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
<link href="../../assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
<link href="../../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
@endsection

@section('script')
<script src="../../assets/global/scripts/datatable.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
<script src="../../assets/pages/scripts/table-datatables-responsive.min.js" type="text/javascript"></script>
@endsection
