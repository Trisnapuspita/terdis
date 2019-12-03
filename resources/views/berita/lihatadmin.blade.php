@extends('layouts.base')

@section('title')
Teras Diskusi | Daftar Berita
@endsection

@section('open4')
active open
@endsection

@section('content')

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

<div class="page-content">
    <!-- BEGIN PAGE HEADER-->
    <h1 class="page-title"> Daftar Berita
    </h1>
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="icon-home"></i>
                <a href="/home">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <span>Berita</span>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <span>Daftar Berita</span>
            </li>
        </ul>
    </div>
    <div class="blog-page blog-content-1">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                 @foreach($beritas as $berita)
                    <div class="col-sm-3">
                        <div class="blog-post-sm bordered blog-container">
                            <div class="blog-img-thumb">
                                <a href="javascript:;">
                                    <img src="/storage/upload/{{$berita->foto}}" />
                                </a>
                            </div>
                            <div class="blog-post-content">
                                <h2 class="blog-title blog-post-title">
                                <a href="javascript:;">{{$berita->judul_berita}}</a>
                                </h2>
                                {{-- <p class="blog-post-desc"> {{$berita->isi_berita}}</p> --}}
                                <div class="blog-post-foot">
                                    <div class="blog-post-meta">
                                        <i class="icon-calendar font-blue"></i>
                                    <a href="javascript:;">Dibuat Pada : {{$berita->created_at}}</a>
                                    </div><br><br>
                                    <div class="blog-post-meta">
                                        <a href="/beritas/{{ $berita->id }}/edit" class="btn btn-info" style="color:white">Edit</a>
                                    </div>
                                    <div class="blog-post-meta">
                                        <form action="/beritas/{{ $berita->id }}" method="POST">
                                            <input type="submit" class="btn btn-danger" name="submit" value="Delete" onclick="return confirm('Apakah Anda yakin untuk menghapus?')">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="DELETE">
                                            </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- END CONTENT BODY -->
@endsection

@section('style')
<link href="../assets/pages/css/blog.min.css" rel="stylesheet" type="text/css" />
@endsection

