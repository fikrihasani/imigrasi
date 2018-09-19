@extends('layouts.admin')
<?php
    $i = 1;
?>
@section('admin-content')
    <div class="container">
        <h1>
            Kepala Imigrasi dari Masa ke Masa
            <span style="float:right">
                <a href="/galery/create">
                    <button class="btn btn-primary">
                        Tambahkan Kakanim
                    </button>
                </a>
            </span>
        </h1>
        <hr>
        @if (count($galeri2) > 0)
            <table class="table table-bordered">
                <tr>
                    <td>No</td>
                    <td>Foto</td>
                    <td>Deskripsi</td>
                </tr>
                @foreach ($galeri2 as $galeri)
                    <tr>
                    <td>{{$i}}</td>
                    <td>{{$galeri->data_galeri}}</td>
                    <td>{{$galeri->deskripsi}}</td>
                    <td>
                        <a href="/galery/{{$galeri->id_galeri}}/edit"><button class="btn btn-primary">Edit</button></a>
                    </td>
                    <td>
                        {!!Form::open(['action'=>['GaleriController@destroy', $galeri->id_galeri], 'method'=>'POST'])!!}
                            {{Form::hidden('_method','DELETE')}}
                            {{Form::submit('Hapus', ['class'=>'btn btn-warning'])}}
                        {!!Form::close()!!}
                    </td>
                    <td>    
                        <a href="/galery/{{$galeri->id_galeri}}"><button class="btn btn-info">Lihat</button></a>
                    </td>
                    <?php $i++;?>
                </tr>
                @endforeach
            </table>
        @else
            <center>
                <h2>
                    Belum ada data Foto
                </h2>
            </center>
        @endif
    </div>
@endsection