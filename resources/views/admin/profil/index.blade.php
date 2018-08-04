@extends('layouts.admin')
<?php
    $i = 1;
?>
@section('admin-content')
    <div class="container">
        <h1>
            Berita-Berita Imigrasi 
            <span style="float:right">
                <a href="/profil/create">
                    <button class="btn btn-primary">
                        Buat Baru
                    </button>
                </a>
            </span>
        </h1>
        <hr>
        @if (count($berita2) > 0)
            <table class="table table-bordered">
                <tr>
                    <td>No</td>
                    <td>Judul Berita</td>
                    <td>Dibuat Pada</td>
                    <td>Diupdate Pada</td>
                    <td>Aksi</td>
                </tr>
                @foreach ($berita2 as $berita)
                    <tr>
                    <td>{{$i}}</td>
                    <td>{{$berita->judul_berita}}</td>
                    <td>{{$berita->created_at}}</td>
                    <td>{{$berita->updated_at}}</td>
                    <td>
                        <a href="/berita/{{$berita->id}}/edit"><button class="btn btn-primary">Edit</button></a>
                        {!!Form::open(['action'=>['BeritaController@destroy', $berita->id], 'method'=>'POST'])!!}
                            {{Form::hidden('_method','DELETE')}}
                            {{Form::submit('Hapus', ['class'=>'btn btn-warning'])}}
                        {!!Form::close()!!}
                        <a href="/berita/{{$berita->id}}"><button class="btn btn-info">Lihat</button></a>
                    </td>
                    <?php $i++;?>
                </tr>
                @endforeach
            </table>
        @else
            <center>
                <h2>
                    Belum ada berita 
                </h2>
            </center>
        @endif
    </div>
@endsection