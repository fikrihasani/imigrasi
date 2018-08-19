@extends('layouts.admin')

@section('admin-content')
<?php
    $i=1;
?>
    <h1>Pengaduan</h1>
    <table class="table">
        <tr>
            <td>No</td>
            <td>Subjek Pengaduan</td>
            <td>Nama Pengadu</td>
            <td>Email Pengadu</td>
            <td>Tanggal Masuk</td>
            <td>Status</td>
            <td>Kode Unik</td>
            <td></td>
        </tr>
        @foreach ($pengaduan as $adu)
        <tr>
            <td>{{$i}}</td>
            <td>{{$adu->subjek}}</td>
            <td>{{$adu->nama}}</td>
            <td>{{$adu->email}}</td>
            <td>{{$adu->created_at}}</td>
            <td><?php
                    switch ($adu->status) {
                        case '-1':
                        echo "Belum ditangani";
                        break;
                        case '0':
                        echo "Sedang ditangani";
                        break;
                        default:
                        echo "Telah ditangani";
                        break;
                    }
                    ?></td>
            <td>{{$adu->kode_unik}}</td>
            <td><a href="/pengaduan/{{$adu->id}}/show">Lihat</a></td>
        </tr>
        @endforeach
    </table>
@endsection
