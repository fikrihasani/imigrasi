@extends('layouts.admin')

@section('admin-content')
    <img src="../storage/foto_berita/{{$berita->foto_berita}}" alt="">
    <h1>
        {{$berita->judul_berita}}
    </h1>
    <p>
        {{$berita->konten_berita}}
    </p>
@endsection