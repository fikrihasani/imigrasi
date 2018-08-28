@extends('layouts.admin')

@section('admin-content')
    <h1>Perbaharui data Foto</h1>
    <hr>
    {!! Form::open(['action' => ['GaleriController@update', $galeri->id_galeri], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('deskripsi', 'Deskripsi')}}
            {{Form::text('deskripsi',$galeri->deskripsi,['class'=>'form-control', 'placeholder'=>'Masukkan Deskripsi'])}}
        </div>
        <div class="form-group">
            {{Form::file('data_galeri')}}
        </div> 
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Save',['class'=>'btn btn-primary'])}}
    {!! Form::close()!!}       
@endsection