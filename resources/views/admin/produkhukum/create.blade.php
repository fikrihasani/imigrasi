@extends('layouts.admin')

@section('admin-content')
    <h1>Produk Hukum</h1>
    <hr>
    {!! Form::open(['action' => 'ProdukhukumController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('keterangan', 'Deskripsi Produk Hukum')}}
            {{Form::text('keterangan','',['class'=>'form-control', 'placeholder'=>'Deskripsi Produk Hukum'])}}
        </div>
        <div class="form-group">
            {{Form::label('tipe_produk', 'Tipe Produk Hukum')}}
            {{Form::select('tipe_produk', ['0' => 'Undang-Undang', '1' => 'Presiden', '2' => 'Pemerintah', '3' => 'Menteri'],null,['class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::file('data_produk')}}
        </div> 
        {{Form::submit('Save',['class'=>'btn btn-primary'])}}
    {!! Form::close()!!}
@endsection