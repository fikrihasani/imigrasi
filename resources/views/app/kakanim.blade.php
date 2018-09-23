@extends('layouts.app')

@section('content')
<div class="container" style="margin-bottom: 20px">
    <section class="span10  ">
        <div class="col-right">
        <h2 align="center"><a>Kepala Kantor dari Masa Ke Masa</a></h2>
        <br/>
        <hr/>
        @if (count($kepala) > 0)
            @foreach ($kepala as $kakanim)
                    <div class="strip-lessons">
                        <div class="row">
                            <div class="span3">
                                <div class="box-style-one borders"><img src="storage/foto_kakanim/{{$kakanim->foto_kakanim}}" alt=""><h5>{{$kakanim->nama_kakanim}}</h5></div>
                            </div>
                            <div class="span5">
                                <span class="label label-default">Kepala Kantor Imigrasi</span>
                                <h4>{{$kakanim->deskripsi}}</h4>
                            </div>
                        </div>
                    </div><!-- End Strip course -->
            @endforeach
            <div class="row justify-content-md-center">
            {{ $kepala->links() }}
            </div>
         @else
                <center>
                    <div class="alert alert-info">
                        <h3>Maaf Belum ada Foto Kepala Kantor Imigrasi</h3>
                    </div>
                </center>
          @endif
            
    </section>
</div>
@endsection