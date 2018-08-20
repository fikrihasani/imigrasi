@extends('layouts.app')

@section('content')
    <center>  
        <h1>Cek Proses Pengaduan</h1>
        <p>Masukkan kode unik pengaduan pada nomer berikut</p>
    </center>
    <form action="/caripengaduan" method="post">
        {{csrf_field()}}
        Masukkan Kode Unik Pengaduan Anda (Kode dikirimkan oleh admin kami melalui email):
        <input type="text" name="kode_unik" id="kode_unik" class="form-control">
        <input type="submit" value="submit">
    </form>
    @if (session('hasil'))
        <b>Hasil Pencarian:</b>    
        <table class="table">
            <tr>
                <td>{{session('hasil')->nama}}</td>
                <td>{{session('hasil')->subjek}}</td>
                <td>{{session('hasil')->created_at}}</td>
                <td><?php 
                    switch ( session('hasil')->status) {
                        case '-1':
                            echo 'belum diproses';
                            break;
                        case '0':
                            echo 'sedang diproses';
                            break;
                        default:
                            echo 'telah selesai diproses';
                            break;
                    }
                    ?>
                </td>
            </tr>
        </table>
    @else 
        @if (session('error'))
            <div class="alert alert-warning" role="alert">
                <strong>{{session('error')}}</strong>
            </div>
        @else
            @if (session('empty'))
                <div class="alert alert-info" role="alert">
                    <strong>{{session('empty')}}</strong>
                </div>
            @endif
        @endif
    @endif
@endsection