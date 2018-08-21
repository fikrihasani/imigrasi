@extends('layouts.admin')

@section('admin-content')
    <h1>
        {{$biaya->judul_biaya}}
    </h1>
    <iframe src="../storage/biaya/{{$biaya->data_biaya}}" width="90%" height="550px"></iframe>

@endsection