@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-8 col-md-8">
            <div class="card">
                <div class="card-body">
                    <img src="/storage/foto_berita/{{$berita->foto_berita}}" alt="No image" width="100%" height="100%">
                    <hr>
                    <h1 style="text-align:center">{{$berita->judul_berita}}</h1>
                    <p style="text-align:center">{{date('d',strtotime($berita->updated_at))." ".date('F',strtotime($berita->updated_at))." ".date('Y',strtotime($berita->updated_at))}}</p>
                    <br>
                    <p style="font-size:14pt">{{$berita->konten_berita}}</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4">
            <div class="card">
                <div class="card-body">
                    <h3 style="text-align:center">Berita Terkait</h3>
                    <hr>
                    @foreach ($beritalain as $other)
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <img src="/storage/foto_berita/{{$other->foto_berita}}" alt="No image" width="100%" height="100%">
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                        {{$other->konten_berita}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection