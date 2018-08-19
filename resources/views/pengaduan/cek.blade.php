@extends('layouts.app')

@section('content')
    <center>  
        <h1>Cek Proses Pengaduan</h1>
        <p>Masukkan kode unik pengaduan pada nomer berikut</p>
    </center>
    <form action="/caripengaduan" method="post">
        Masukkan Kode Unik Pengaduan Anda (Kode dikirimkan oleh admin kami melalui email):
        <input type="text" name="kode_unik" id="kode_unik" class="form-control">
        <input type="submit" value="submit">
    </form>
    @if (session('hasil'))
        <table>
            <tr>
                <td>{{$result->nama}}</td>
                <td>{{$result->judul}}</td>
                <td>{{$result->created_at}}</td>
                <td>{{$result->status}}</td>
            </tr>
        </table>
    @endif
@endsection