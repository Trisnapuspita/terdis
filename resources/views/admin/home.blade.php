@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Data User</div>

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

                    <p style="text-align: center"><a href="/admin/data-pendaftar" class="btn btn-primary btn-md">Lihat Pendaftar</a> <a href="/register2" class="btn btn-primary btn-md">Register</a></p>
                    <p>Total User : {{ $count }}</p>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Kelas</th>
                            <th>Created at</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @if( $user->role === 1)
                                    Siswa
                                @elseif( $user->role === 3)
                                    Pengajar
                                @else
                                    Admin
                                @endif
                            </td>
                            @foreach($kelass as $kelas)
                            @if($kelas->id == $user->kelas_id)
                            <td>{{$kelas->kelas}}</td>
                            @break
                            @endif
                          @endforeach
                          @if($user->kelas_id == null)
                            <td></td>
                            @endif
                            <td>{{$user->created_at}}</td>
                            <td>
                                <form action="/admin/{{ $user->id }}" method="POST">
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
        </div>
    </div>
</div>
@endsection
