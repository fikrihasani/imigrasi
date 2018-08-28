@extends('layouts.admin')

@section('admin-content')
    <h1>Tambahkan Foto Galeri</h1>
    <hr>
    {!! Form::open(['action' => 'GaleriController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('deskripsi', 'Deskripsi')}}
            {{Form::text('deskripsi','',['class'=>'form-control', 'placeholder'=>'Masukkan Deskripsi'])}}
        </div>
        <div class="form-group">
            {{Form::label('data_galeri', 'Foto Kegiatan')}} <br/>
            {{Form::file('data_galeri')}}
        </div> 
        {{Form::submit('Save',['class'=>'btn btn-primary'])}}
    {!! Form::close()!!}
@endsection