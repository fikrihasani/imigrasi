@extends('layouts.admin')

@section('admin-content')
    <h1>Masukkan Pengaduan Baru</h1>
    <hr>
    {!! Form::open(['action' => 'PengaduanController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('nama', 'Nama Lengkap')}}
            {{Form::text('nama',$pengaduan->nama,['class'=>'form-control', 'placeholder'=>'Masukkan Nama Lengkap Anda'])}}
        </div>
        <div class="form-group">
            {{Form::label('email', 'Email')}}
            {{Form::email('email',$pengaduan->email,['class'=>'form-control', 'placeholder'=>'Masukkan Email Anda'])}}
        </div>
        <div class="form-group">
            {{Form::label('subjek', 'Subjek')}}
            {{Form::text('subjek',$pengaduan->subjek,['class'=>'form-control', 'placeholder'=>'Masukkan Subjek Pengaduan'])}}
        </div>
        <div class="form-group">
            {{Form::label('pesan', 'Konten Pengaduan')}}
            {{Form::textarea('pesan','',['class'=>'form-control', 'placeholder'=>'Masukkan Konten Pengaduan'])}}
        </div>
        <div class="form-group">
            {{Form::label('status', 'Status Pengaduan')}}
            {{Form::select('tipe_berita', ['-1'=>'Belum Diproses','0' => 'Sedang Diproses', '1' => 'Selesai'],'Status Pengaduan: '.$pengaduan->status,['class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('foto_ktp', 'Foto KTP')}}
            <br>
            {{Form::file('foto_ktp')}}
        </div> 
        <br>
        {{Form::submit('Submit Pengaduan',['class'=>'btn btn-primary'])}}
    {!! Form::close()!!}
@endsection