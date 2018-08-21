@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-body">
        @if (!session('success'))
            <h1>Masukkan Pengaduan Baru</h1>
            <hr>
            {!! Form::open(['action' => 'PengaduanController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                <div class="form-group">
                    {{Form::label('nama', 'Nama Lengkap')}}
                    {{Form::text('nama','',['class'=>'form-control', 'placeholder'=>'Masukkan Nama Lengkap Anda'])}}
                </div>
                <div class="form-group">
                    {{Form::label('email', 'Email')}}
                    {{Form::email('email','',['class'=>'form-control', 'placeholder'=>'Masukkan Email Anda'])}}
                </div>
                <div class="form-group">
                    {{Form::label('subjek', 'Subjek')}}
                    {{Form::text('subjek','',['class'=>'form-control', 'placeholder'=>'Masukkan Subjek Pengaduan'])}}
                </div>
                <div class="form-group">
                    {{Form::label('pesan', 'Konten Pengaduan')}}
                    {{Form::textarea('pesan','',['class'=>'form-control', 'placeholder'=>'Masukkan Konten Pengaduan'])}}
                </div>
                <div class="form-group">
                    {{Form::label('foto_ktp', 'Foto KTP')}}
                    <br>
                    {{Form::file('foto_ktp')}}
                </div> 
                <br>
                {{Form::submit('Submit Pengaduan',['class'=>'btn btn-primary'])}}
            {!! Form::close()!!}
        @else
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session('success')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
    </div>
  </div>
@endsection