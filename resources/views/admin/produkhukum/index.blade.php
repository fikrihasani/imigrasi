@extends('layouts.admin')
<?php
    $i = 1;
?>
@section('admin-content')
    <div class="container">
        <h1>
            Produk Hukum
            <br>
            <span style="">
                <a href="/produkhukum/create">
                    <button class="btn btn-primary">
                        Tambahkan Produk Hukum
                    </button>
                </a>
            </span>
        </h1>
        <hr>
        @if (count($produk2) > 0)
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Keterangan</th>
                    <th>Dibuat Pada</th>
                    <th>Diupdate Pada</th>
                    <th>Aksi</th>
                </tr>
                @foreach ($produk2 as $produk)
                    <tr>
                    <td>{{$i}}</td>
                    <td>{{$produk->keterangan}}</td>
                    <td>{{$produk->created_at}}</td>
                    <td>{{$produk->updated_at}}</td>
                    <td>
                        <a href="/produkhukum/{{$produk->id_produk}}/edit"><button class="btn btn-primary">Edit</button></a>
                    </td>
                    <td>
                        {!!Form::open(['action'=>['ProdukhukumController@destroy', $produk->id_produk], 'method'=>'POST'])!!}
                            {{Form::hidden('_method','DELETE')}}
                            {{Form::submit('Hapus', ['class'=>'btn btn-warning'])}}
                        {!!Form::close()!!}
                    </td>
                    <td>
                        <a href="/produkhukum/{{$produk->id_produk}}"><button class="btn btn-info">Lihat</button></a>
                    </td>
                    <?php $i++;?>
                </tr>
                @endforeach
            </table>
        @else
            <center>
                <h2>
                    Belum ada Produk Hukum
                </h2>
            </center>
        @endif
    </div>
@endsection
