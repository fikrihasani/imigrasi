@extends('layouts.admin')

@section('admin-content')
    <h1>Tambahkan Profil Kakanim</h1>
    <hr>
    {!! Form::open(['action' => 'KakanimController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('nama_kakanim', 'Nama Kepala Kantor')}}
            {{Form::text('nama_kakanim','',['class'=>'form-control', 'placeholder'=>'Masukkan Nama Kakanim'])}}
        </div>
        <div class="form-group">
            {{Form::label('deskripsi', 'Data Kepala Kantor')}}
            {{Form::textarea('deskripsi','',['class'=>'form-control', 'placeholder'=>'Masukkan Data Kepala Kantor'])}}
        </div>
        <div class="form-group">
            {{Form::label('foto_kakanim', 'Foto Kepala Kantor')}} <br/>
            {{Form::file('foto_kakanim')}}
        </div> 
        {{Form::submit('Save',['class'=>'btn btn-primary'])}}
    {!! Form::close()!!}
@endsection