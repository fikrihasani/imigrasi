@extends('layouts.app')

@section('content')
    <div class="container" style="margin-bottom: 20px">
        <h3 style="text-align:center">Produk Hukum</h3>
        <hr>
        @foreach ($produklain as $other)             
            <iframe src="../storage/produk/{{$other->data_produk}}" width="90%" height="550px"></iframe>
        @endforeach
    </div>

@endsection