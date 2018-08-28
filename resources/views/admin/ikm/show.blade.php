@extends('layouts.admin')

@section('admin-content')
    <img src="../storage/data_kepuasan/{{$kepuasan->data_kepuasan}}" alt="">
    <h1>
        {{$kepuasan->bulan_kepuasan}}
    </h1>
    <p>
        {{$kepuasan->tahun_kepuasan}}
    </p>
@endsection