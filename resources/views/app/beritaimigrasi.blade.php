@extends('layouts.app')


@section('content')
    <div class="container" style="margin-bottom: 20px">
        <section class="span10  ">
            <div class="col-right">
                <h2 align="center"><a>Berita Imigrasi</a></h2>
                <br/>
                <hr/>
                @if (count($news) > 0)
                    @foreach ($news as $berita)
                        <div class="strip-lessons">
                            <div class="row">
                                <div class="span3">
                                    <div class="box-style-one borders"><img src="storage/foto_berita/{{$berita->foto_berita}}" alt=""><h5>{{$berita->judul_berita}}</h5></div>
                                </div>
                                <div class="span5">
                                    <span class="label label-default">Imigrasi News</span> |<i class="icon-calendar"></i> {{$berita->updated_at}}
                                    <h4>{{$berita->judul_berita}}</h4>
                                    <p>{{$berita->konten_berita}}</p>
                                    <div class="actions"><a href="/beritaimigrasi/{{$berita->id}}"	class="button_medium pull-right">Read more <i class="icon-chevron-right"></i></a></div>
                                </div>
                            </div>
                        </div><!-- End Strip course -->
                    @endforeach
                    <div class="row justify-content-md-center">
                    {{ $news->links() }}
                    </div>
                @else
                    <center>
                        <div class="alert alert-info">
                            <h3>Maaf Belum ada Berita Imigrasi</h3>
                        </div>
                    </center>
                @endif
            </div><!-- end col right-->	
        </section>
    </div>
@endsection