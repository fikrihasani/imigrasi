@extends('layouts.app')

@section('content')
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
							<iframe src="../storage/biaya/{{$biaya->id_biaya}}" width="100%" height="100%"></iframe>
						</div>
                        <div class="tab-pane" id="wna2">
							 
							
                        </div>
                    </div>
                    
                </div><!--  End span7 --> 
            </div> <!--  End row --> 
        </div>
    </section>
@endsection