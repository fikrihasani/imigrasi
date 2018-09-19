@extends('layouts.admin')

@section('admin-content')
    <h1>Perbaharui Produk Hukum</h1>
    <hr>
    {!! Form::open(['action' => ['ProdukhukumController@update', $produk->id_produk], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('keterangan', 'Deskripsi Produk Hukum')}} 
            {{Form::text('keterangan',$produk->judul_produk,['class'=>'form-control', 'placeholder'=>'Masukkan Deskripsi Produk Hukum'])}}
        </div>
        <div class="form-group">
            {{Form::label('tipe_produk', 'Tipe Produk Hukum')}}
            {{Form::select('tipe_produk', ['0' => 'Undang-Undang', '1' => 'Presiden', '2' => 'Pemerintah', '3' => 'Menteri'],$produk->tipe_produk,['class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::file('data_produk')}}
        </div> 
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Save',['class'=>'btn btn-primary'])}}
    {!! Form::close()!!}       
@endsection