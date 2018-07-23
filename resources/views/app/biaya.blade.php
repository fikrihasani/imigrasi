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
							<table class="table table-bordered table-striped">
									<thead>
										<tr>								
											<th>No</th>
											<th>Keterangan</th>
											<th>Biaya</th>			
										</tr>
									</thead>
								
									<tbody>
										<tr>
											<td>1</td>
											<td>Paspor biasa 48 Halaman</td>
											<td>Rp 355.000</td>
										</tr>
									</tbody>
							</table>
						</div>
                        <div class="tab-pane" id="wna2">
							<table class="table table-bordered table-striped">
									<thead>
										<tr>								
											<th>No</th>
											<th>Penerimaan Negara Bukan Pajak (PNBP)</th>
											<th>Saatuan</th>
											<th>Tarif</th>				
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Ijin Tinggal Kunjungan</td>
											<td>per orang</td>
											<td>Rp 300.000</td>
										</tr>
									</tbody>
							</table>                          
                        </div>
                    </div>
                    
                </div><!--  End span7 --> 
            </div> <!--  End row --> 
        </div>
    </section>
@endsection