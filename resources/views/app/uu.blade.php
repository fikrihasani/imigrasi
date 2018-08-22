@extends('layouts.app')

@section('content')
    <section class="span10  ">
        <div class="col-right">
            <h2 align="center"><a>Produk Undang-Undang</a></h2>
            <br/>
            <hr/>
            @if (count($hukum) > 0)
                @foreach ($hukum as $produk)
                    <div class="strip-lessons">
                        <div class="row">
                            <div class="span3">
                                <div class="box-style-one borders"><inframe src="storage/data_produk/{{$produk->data_produk}}" alt=""></div>
                            </div>
                            <div class="span5">
                                <span class="label label-default">Produk Undang-Undang</span> |<i class="icon-calendar"></i> {{$produk->updated_at}}
                                <h4>{{$produk->keterangan}}</h4>
                                <div class="actions"><a href="/produkhukum/{{$produk->id_produk}}"	class="button_medium pull-right">download<i class="icon-chevron-right"></i></a></div>
                            </div>
                        </div>
                    </div><!-- End Strip course -->
                @endforeach
            @else
                <center>
                    <div class="alert alert-info">
                        <h3>Maaf Belum ada Produk Undang-Undang Imigrasi</h3>
                    </div>
                </center>
            @endif
        </div><!-- end col right-->	
    </section>
@endsection