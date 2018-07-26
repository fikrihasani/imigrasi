@extends('layouts.admin')

@section('admin-content')
    <h1>Perbaharui Berita</h1>
    <hr>
    {!! Form::open(['action' => ['BeritaController@update', $berita->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('judul_berita', 'Judul Berita')}}
            {{Form::text('judul_berita',$berita->judul_berita,['class'=>'form-control', 'placeholder'=>'Masukkan Judul Berita'])}}
        </div>
        <div class="form-group">
            {{Form::label('konten_berita', 'Isi Berita')}}
            {{Form::textarea('konten_berita',$berita->konten_berita,['class'=>'form-control', 'placeholder'=>'Masukkan konten Berita'])}}
        </div>
        <div class="form-group">
            {{Form::label('tipe_berita', 'Tipe Berita')}}
            {{Form::select('tipe_berita', ['0' => 'Imigrasi', '1' => 'Kantor'],$berita->tipe_berita,['class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::file('foto_berita')}}
        </div> 
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Save',['class'=>'btn btn-primary'])}}
    {!! Form::close()!!}       
@endsection