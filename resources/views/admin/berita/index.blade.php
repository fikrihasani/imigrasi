@extends('layouts.admin')
<?php
    $i = 0;
?>
@section('admin-content')
    <div class="container">
        <h1>
            Berita-Berita Imigrasi 
            <span style="float:right">
                <a href="/berita/create">
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
                <tr>
                    @foreach ($berita2 as $berita)
                    <td>{{$i}}</td>
                    <td>{{$berita->judul_berita}}</td>
                    <td>{{$berita->created_at}}</td>
                    <td>{{$berita->updated_at}}</td>
                    <td>
                        <a href="/berita/edit/{{$berita->id}}"><button class="btn btn-primary">Edit</button></a>
                        <a href="/berita/destroy/{{$berita->id}}"><button class="btn btn-warning">Hapus</button></a>
                        <a href="/berita/{{$berita->id}}"><button class="btn btn-info">Lihat</button></a>
                    </td>
                    @endforeach
                </tr>
            </table>
        @else
            <center>
                <h2>
                    Belum ada berita 
                </h2>
                <a href="/berita/create">
                    <button class="btn btn-primary">Buat Baru</button>
                </a>
            </center>
        @endif
    </div>
@endsection