@extends('layouts.base')

@section('title')
Teras Diskusi | Daftar Siswa
@endsection

@section('open2')
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
                <span>Data User</span>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <span>Data Siswa</span>
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
                            <i class="fa fa-globe"></i>Daftar Siswa </div>
                        <div class="tools"> </div>
                    </div>
                    <div class="portlet-body">
                        <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_3" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th class="min-phone-l">Nama</th>
                                    <th class="min-tablet">Email</th>
                                    <th class="min-tablet"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i=1 @endphp
                                @foreach($user as $user )
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td style="text-align:center">
                                        <form action="/admin/siswa/{{ $user->id }}" method="POST">
                                            <input type="submit" class="btn btn-danger btn-sm active" name="submit" value="X" onclick="return confirm('Apakah Anda yakin untuk menghapus?')">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="DELETE">
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
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

