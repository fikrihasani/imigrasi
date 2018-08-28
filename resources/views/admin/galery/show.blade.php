@extends('layouts.admin')

@section('admin-content')
    <img src="../storage/galeri_foto/{{$galeri->data_galeri}}" alt="">
    <h1>
        {{$galeri->deskripsi}}
    </h1>
@endsection