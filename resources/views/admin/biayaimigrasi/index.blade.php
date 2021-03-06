@extends('layouts.admin')
<?php
    $i = 1;
?>
@section('admin-content')
    <div class="container">
        <h1>
            Biaya Imigrasi
            <br>
            <span style="">
                <a href="/biayaimigrasi/create">
                    <button class="btn btn-primary">
                        Tambahkan Biaya
                    </button>
                </a>
            </span>
        </h1>
        <hr>
        @if (count($biaya2) > 0)
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Judul Biaya</th>
                    <th>Dibuat Pada</th>
                    <th>Diupdate Pada</th>
                    <th>Aksi</th>
                </tr>
                @foreach ($biaya2 as $biaya)
                    <tr>
                    <td>{{$i}}</td>
                    <td>{{$biaya->judul_biaya}}</td>
                    <td>{{$biaya->created_at}}</td>
                    <td>{{$biaya->updated_at}}</td>
                    <td>
                        <a href="/biayaimigrasi/{{$biaya->id_biaya}}/edit"><button class="btn btn-primary">Edit</button></a>
                    </td>
                    <td>
                        {!!Form::open(['action'=>['BiayaController@destroy', $biaya->id_biaya], 'method'=>'POST'])!!}
                            {{Form::hidden('_method','DELETE')}}
                            {{Form::submit('Hapus', ['class'=>'btn btn-warning'])}}
                        {!!Form::close()!!}
                    </td>
                    <td>
                        <a href="/biayaimigrasi/{{$biaya->id_biaya}}"><button class="btn btn-info">Lihat</button></a>
                    </td>
                    <?php $i++;?>
                </tr>
                @endforeach
            </table>
        @else
            <center>
                <h2>
                    Belum ada biaya
                </h2>
            </center>
        @endif
    </div>
@endsection
