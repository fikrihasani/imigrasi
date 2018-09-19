@extends('layouts.app')

@section('content')
    <div class="container" style="margin-bottom: 20px">
        <section class="span10  ">
            <div  class="col-right">
            
                <div class="row">
                    <div class="span10">
                        <h3>Biaya Keimigrasian</h3>
                        
                        <!--  Tabs -->   
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#wna1" data-toggle="tab">Warga Negara Indonesia</a></li>
                            <li><a href="#wna2" data-toggle="tab">Warga Negara Asing</a></li>
                        </ul>
                        
                        <div class="tab-content">
                            <div class="tab-pane active" id="wna1">
                                @if ($biaya != null)
                                    <iframe src="../storage/biaya/{{$biaya->data_biaya}}" width="100%" height="600"></iframe>
                                @endif
                            </div>
                            <div class="tab-pane" id="wna2">
                                @if ($biaya1 != null)
                                    <iframe src="../storage/biaya/{{$biaya1->data_biaya}}" width="100%" height="600"></iframe>                            
                                @endif
                            </div>
                        </div>
                        
                    </div><!--  End span7 --> 
                </div> <!--  End row --> 
            </div>
        </section>
    </div>
@endsection