@extends('layouts.admin')

@section('admin-content')
    <h1>Perbaharui Data Kepala Kantor</h1>
    <hr>
    {!! Form::open(['action' => ['KakanimController@update', $kakanim->id_kakanim], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('nama_kakanim', 'Nama Kepala Kantor')}}
            {{Form::text('nama_kakanim',$kakanim->nama_kakanim,['class'=>'form-control', 'placeholder'=>'Masukkan Nama Kepala Kantor'])}}
        </div>
        <div class="form-group">
            {{Form::label('deskripsi', 'Data Kepala Kantor')}}
            {{Form::textarea('deskripsi',$kakanim->deskripsi,['class'=>'form-control', 'placeholder'=>'Masukkan Data Kepala Kantor'])}}
        </div>
        <div class="form-group">
            {{Form::label('foto_kakanim', 'Foto Kepala Kantor')}} <br/>
            {{Form::file('foto_kakanim')}}
        </div> 
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Save',['class'=>'btn btn-primary'])}}
    {!! Form::close()!!}       
@endsection