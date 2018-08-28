@extends('layouts.admin')
<?php
    $i = 1;
?>
@section('admin-content')
    <div class="container">
        <h1>
            Data Kepuasan Masyarakat 
            <span style="float:right">
                <a href="/ikm/create">
                    <button class="btn btn-primary">
                        Buat Data Baru
                    </button>
                </a>
            </span>
        </h1>
        <hr>
        @if (count($kepuasan2) > 0)
            <table class="table table-bordered">
                <tr>
                    <td>No</td>
                    <td>Tahun</td>
                    <td>Bulan</td>
                    <td>Dibuat Pada</td>
                    <td>Diupdate Pada</td>
                    <td colspan="3">Aksi</td>
                </tr>
                @foreach ($kepuasan2 as $kepuasan)
                    <tr>
                    <td>{{$i}}</td>
                    <td>{{$kepuasan->tahun_kepuasan}}</td>
                    <td>{{$kepuasan->bulan_kepuasan}}</td>
                    <td>{{$kepuasan->created_at}}</td>
                    <td>{{$kepuasan->updated_at}}</td>
                    <td>
                        <a href="/ikm/{{$kepuasan->id_kepuasan}}/edit"><button class="btn btn-primary">Edit</button></a>
                    </td>
                    <td>
                        {!!Form::open(['action'=>['KepuasanController@destroy', $kepuasan->id_kepuasan], 'method'=>'POST'])!!}
                            {{Form::hidden('_method','DELETE')}}
                            {{Form::submit('Hapus', ['class'=>'btn btn-warning'])}}
                        {!!Form::close()!!}
                    </td>
                    <td>    
                        <a href="/ikm/{{$kepuasan->id_kepuasan}}"><button class="btn btn-info">Lihat</button></a>
                    </td>
                    <?php $i++;?>
                </tr>
                @endforeach
            </table>
        @else
            <center>
                <h2>
                    Belum Data Kepuasan 
                </h2>
            </center>
        @endif
    </div>
@endsection