@extends('layouts.admin')

@section('admin-content')
    <h1>Indeks Kepuasan</h1>
    <hr>
    {!! Form::open(['action' => 'KepuasanController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('tahun_kepuasan', 'Tahun Kepuasan')}}
            {{Form::text('tahun_kepuasan','',['class'=>'form-control', 'placeholder'=>'Masukkan Data Tahun Kepuasan'])}}
        </div>
        <div class="form-group">
            {{Form::label('bulan_kepuasan', 'Bulan Kepuasan')}}
            {{Form::select('bulan_kepuasan', ['0' => 'Januari', '1' => 'Februari', '2' => 'Maret', '3' => 'April', '4' => 'Mei', '5' => 'Juni', '6' => 'Juli', '7' => 'Agustus', '8' => 'September', '9' => 'Oktober', '10' => 'November', '11' => 'Desember'],null,['class'=>'form-control'])}}
            
        </div>
        <div class="form-group">
            {{Form::file('data_kepuasan')}}
        </div> 
        {{Form::submit('Save',['class'=>'btn btn-primary'])}}
    {!! Form::close()!!}
@endsection