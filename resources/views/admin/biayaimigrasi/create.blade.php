@extends('layouts.admin')

@section('admin-content')
    <h1>Biaya</h1>
    <hr>
    {!! Form::open(['action' => 'BiayaController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('judul_biaya', 'Judul Biaya')}}
            {{Form::text('judul_biaya','',['class'=>'form-control', 'placeholder'=>'Masukkan Judul Biaya'])}}
        </div>
        <div class="form-group">
            {{Form::label('tipe_biaya', 'Tipe Biaya')}}
            {{Form::select('tipe_biaya', ['0' => 'WNI', '1' => 'WNA'],null,['class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::file('data_biaya')}}
        </div> 
        {{Form::submit('Save',['class'=>'btn btn-primary'])}}
    {!! Form::close()!!}
@endsection