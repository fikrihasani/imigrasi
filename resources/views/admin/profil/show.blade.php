@extends('layouts.admin')

@section('admin-content')
    <img src="../storage/foto_kakanim/{{$kakanim->foto_kakanim}}" alt="">
    <h1>
        {{$kakanim->nama_kakanim}}
    </h1>
    <p>
        {{$kakanim->deskripsi}}
    </p>
@endsection