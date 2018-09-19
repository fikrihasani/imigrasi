@extends('layouts.admin')

@section('admin-content')
    <h1>
        {{$produk->keterangan}}
    </h1>
    <iframe src="../storage/produk/{{$produk->data_produk}}" width="90%" height="550px"></iframe>

@endsection