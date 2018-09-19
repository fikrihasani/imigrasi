@extends('layouts.app')

@section('content')
    <div class="container" style="margin-bottom: 20px">
        <section class="span10  ">
            <div  class="col-right">
                <h1 Align="Center">Survei Kepuasan</h1>     
                    <hr/>
                    <div class="row">
                        <div class="span10">                    
                            <!--  Tabs -->   
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#bulan1" data-toggle="tab">Januari</a></li>
                                <li><a href="#bulan2" data-toggle="tab">Februari</a></li>
                                <li><a href="#bulan3" data-toggle="tab">Maret</a></li>
                                <li><a href="#bulan4" data-toggle="tab">April</a></li>
                                <li><a href="#bulan5" data-toggle="tab">Mei</a></li>
                                <li><a href="#bulan6" data-toggle="tab">Juni</a></li>
                                <li><a href="#bulan7" data-toggle="tab">Juli</a></li>
                                <li><a href="#bulan8" data-toggle="tab">Agustus</a></li>
                                <li><a href="#bulan9" data-toggle="tab">September</a></li>
                                <li><a href="#bulan10" data-toggle="tab">Oktober</a></li>
                                <li><a href="#bulan11" data-toggle="tab">November</a></li>
                                <li><a href="#bulan12" data-toggle="tab">Desember</a></li>
                            </ul>
                        
                            <div class="tab-content">
                                <div class="tab-pane active" id="bulan1">
                                @if ($ikm != null)
                                    <img src="../storage/data_kepuasan/{{$ikm->data_kepuasan}}" width="100%" height="100%">
                                @endif
                                </div>
                                <div class="tab-pane" id="bulan2">
                                @if ($ikm1 != null)
                                    <img src="../storage/data_kepuasan/{{$ikm1->data_kepuasan}}" width="100%" height="100%">
                                @endif
                                </div>
                                <div class="tab-pane" id="bulan3">
                                @if ($ikm2 != null)
                                    <img src="../storage/data_kepuasan/{{$ikm2->data_kepuasan}}" width="100%" height="100%">
                                @endif
                                </div>
                                <div class="tab-pane" id="bulan4">
                                @if ($ikm3 != null)
                                    <img src="../storage/data_kepuasan/{{$ikm3->data_kepuasan}}" width="100%" height="100%">
                                @endif
                                </div>
                                <div class="tab-pane" id="bulan5">
                                @if ($ikm4 != null)
                                    <img src="../storage/data_kepuasan/{{$ikm4->data_kepuasan}}" width="100%" height="100%">
                                @endif
                                </div>
                                <div class="tab-pane" id="bulan6">
                                @if ($ikm5 != null)
                                    <img src="../storage/data_kepuasan/{{$ikm5->data_kepuasan}}" width="100%" height="100%">
                                @endif
                                </div>
                                <div class="tab-pane" id="bulan7">
                                @if ($ikm6 != null)
                                    <img src="../storage/data_kepuasan/{{$ikm6->data_kepuasan}}" width="100%" height="100%">
                                @endif
                                </div>
                                <div class="tab-pane" id="bulan8">
                                @if ($ikm7 != null)
                                    <img src="../storage/data_kepuasan/{{$ikm7->data_kepuasan}}" width="100%" height="100%">
                                @endif
                                </div>
                                <div class="tab-pane" id="bulan9">
                                @if ($ikm8 != null)
                                    <img src="../storage/data_kepuasan/{{$ikm8->data_kepuasan}}" width="100%" height="100%">
                                @endif
                                </div>
                                <div class="tab-pane" id="bulan10">
                                @if ($ikm9 != null)
                                    <img src="../storage/data_kepuasan/{{$ikm9->data_kepuasan}}" width="100%" height="100%">
                                @endif
                                </div>
                                <div class="tab-pane" id="bulan11">
                                @if ($ikm10 != null)
                                    <img src="../storage/data_kepuasan/{{$ikm10->data_kepuasan}}" width="100%" height="100%">
                                @endif
                                </div>
                                <div class="tab-pane" id="bulan12">
                                @if ($ikm11 != null)
                                    <img src="../storage/data_kepuasan/{{$ikm11->data_kepuasan}}" width="100%" height="100%">
                                @endif
                                </div>
                            </div>
                    </div><!--  End span7 --> 
                </div> <!--  End row --> 
            </div>
        </section>
    </div>
@endsection