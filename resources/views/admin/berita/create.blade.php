@extends('layouts.admin')

@section('admin-content')
    <h1>Berita Baru</h1>
    <hr>
    {!! Form::open(['action' => 'BeritaController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('judul_berita', 'Judul Berita')}}
            {{Form::text('judul_berita','',['class'=>'form-control', 'placeholder'=>'Masukkan Judul Berita'])}}
        </div>
        <div class="form-group">
            {{Form::label('konten_berita', 'Isi Berita')}}
            {{Form::textarea('konten_berita','',['class'=>'form-control', 'placeholder'=>'Masukkan konten Berita'])}}
        </div>
        <div class="form-group">
            {{Form::label('tipe_berita', 'Tipe Berita')}}
            {{Form::select('tipe_berita', ['0' => 'Imigrasi', '1' => 'Kantor'],null,['class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::file('foto_berita')}}
        </div> 
        {{Form::submit('Save',['class'=>'btn btn-primary'])}}
    {!! Form::close()!!}
@endsection