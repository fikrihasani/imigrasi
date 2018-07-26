@extends('layouts.admin')

@section('admin-content')
    <h1>
        {{$berita->judul_berita}}
    </h1>
    <p>
        {{$berita->konten_berita}}
    </p>
@endsection