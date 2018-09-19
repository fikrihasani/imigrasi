@extends('layouts.admin')
<?php
    $i = 1;
?>
@section('admin-content')
    <div class="container">
        <h1>
            Kepala Imigrasi dari Masa ke Masa
            <span style="float:right">
                <a href="/profil/create">
                    <button class="btn btn-primary">
                        Tambahkan Kakanim
                    </button>
                </a>
            </span>
        </h1>
        <hr>
        @if (count($kakanim2) > 0)
            <table class="table table-bordered">
                <tr>
                    <td>No</td>
                    <td>Foto</td>
                    <td>Deskripsi</td>
                </tr>
                @foreach ($kakanim2 as $kakanim)
                    <tr>
                    <td>{{$i}}</td>
                    <td>{{$kakanim->foto_kakanim}}</td>
                    <td>{{$kakanim->deskripsi}}</td>
                    <td>
                        <a href="/profil/{{$kakanim->id_kakanim}}/edit"><button class="btn btn-primary">Edit</button></a>
                    </td>
                    <td>
                        {!!Form::open(['action'=>['KakanimController@destroy', $kakanim->id_kakanim], 'method'=>'POST'])!!}
                            {{Form::hidden('_method','DELETE')}}
                            {{Form::submit('Hapus', ['class'=>'btn btn-warning'])}}
                        {!!Form::close()!!}
                    </td>
                    <td>    
                        <a href="/profil/{{$kakanim->id_kakanim}}"><button class="btn btn-info">Lihat</button></a>
                    </td>
                    <?php $i++;?>
                </tr>
                @endforeach
            </table>
        @else
            <center>
                <h2>
                    Belum ada data Kepala Kantor
                </h2>
            </center>
        @endif
    </div>
@endsection