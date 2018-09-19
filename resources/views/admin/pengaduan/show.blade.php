@extends('layouts.admin')

@section('admin-content')
    <h1>{{$pengaduan->subjek}}</h1>
    <a href="/pengaduan/{{$pengaduan->id}}/edit"><button class="btn btn-primary">Edit</button></a>
    <p>{{$pengaduan->created_at}}</p>
    <p>{{$pengaduan->pesan}}</p>
    <img src="" alt="">
    
@endsection