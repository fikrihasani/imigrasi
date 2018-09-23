@extends('layouts.app')

@section('content')
    <div class="container" style="margin-bottom: 20px">
        <section class="span10  ">
            <div class="col-right">
                <h2 align="center"><a>Produk Presiden</a></h2>
                <br/>
                <hr/>
                @if (count($hukum) > 0)
                    @foreach ($hukum as $produk)
                        <div class="strip-lessons">
                            <div class="row">
                                <div class="span2">
                                    <div class="box-style-one borders"><img src="img/pdf.png" width="50%" height="40%"></div>
                                </div>
                                <div class="span5">
                                    <span class="label label-default">Produk Presiden</span> |<i class="icon-calendar"></i> {{$produk->updated_at}}
                                    <h4>{{$produk->keterangan}}</h4>
                                    <div class="actions"><a href="/presiden/{{$produk->id_produk}}"	class="button_medium pull-right">download<i class="icon-chevron-right"></i></a></div>
                                </div>
                            </div>
                        </div><!-- End Strip course -->
                    @endforeach
                    <div class="row justify-content-md-center">
                    {{ $hukum->links() }}
                    </div>
                @else
                    <center>
                        <div class="alert alert-info">
                            <h3>Maaf Belum ada Produk Hukum Presiden untuk Imigrasi</h3>
                        </div>
                    </center>
                @endif
            </div><!-- end col right-->	
        </section>
    </div>
@endsection