@extends('layouts.admin')

@section('admin-content')
    <h1>Perbaharui Data IKM</h1>
    <hr>
    {!! Form::open(['action' => ['KepuasanController@update', $kepuasan->id_kepuasan], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('tahun_kepuasan', 'Tahun Kepuasan')}}
            {{Form::text('tahun_kepuasan',$kepuasan->tahun_kepuasan,['class'=>'form-control', 'placeholder'=>'Masukkan Data Tahun Kepuasan'])}}
        </div>
        <div class="form-group">
            {{Form::label('bulan_kepuasan', 'Bulan Kepuasan')}}
            {{Form::text('bulan_kepuasan',$kepuasan->bulan_kepuasan,['class'=>'form-control', 'placeholder'=>'Masukkan Data Bulan Kepuasan'])}}
        </div>
        <div class="form-group">
            {{Form::file('data_kepuasan')}}
        </div> 
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Save',['class'=>'btn btn-primary'])}}
    {!! Form::close()!!}       
@endsection