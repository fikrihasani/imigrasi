@extends('layouts.admin')


@section('admin-content')
    <h1>Perbaharui Pengaduan</h1>
    <hr>
    {!! Form::open(['action' => ['PengaduanController@update', $pengaduan->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('status', 'Status Pengaduan')}}
            {{Form::select('status', ['-1'=>'Belum Diproses','0' => 'Sedang Diproses', '1' => 'Selesai'],$pengaduan->status,['class'=>'form-control'])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit Pengaduan',['class'=>'btn btn-primary'])}}
    {!! Form::close()!!}       
@endsection