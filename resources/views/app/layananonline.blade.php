@extends('layouts.app')

@section('content')
    <section class="span10  ">
        <div  class="col-right">
        
            <div class="row">
                <div class="span10">
                    <h3>Layanan Online Keimigrasian</h3>
                    
                    <!--  Tabs -->   
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#online1" data-toggle="tab">Visa Online</a></li>
                        <li><a href="#online2" data-toggle="tab">Pelaporan Orang Asing</a></li>
                        <li><a href="#online3" data-toggle="tab">Ijin Tinggal Online</a></li>
                        <li><a href="#online4" data-toggle="tab">Antrian Online</a></li>
                    </ul>
                    
                    <div class="tab-content">
                        <div class="tab-pane active" id="online1">
                            Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Nullam mollis.. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapiPhasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapi
                            <p class="text-center"><a href="https://visaonline.imigrasi.go.id/online/" target="_blank" class="button_large">Ajukan Visa Online </a></p>
                        </div>
                        <div class="tab-pane" id="online2">
                            Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapi
                             <p class="text-center"><a href="https://apoa.imigrasi.go.id/poa/" target="_blank" class="button_large">Laporkan Orang Asing</a></p>
                        </div>
                        <div class="tab-pane" id="online3">
                            Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Nullam mollis. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapi
                            <p class="text-center"><a href="https://izintinggal.imigrasi.go.id/IT-online/" target="_blank" class="button_large">Ajukan Ijin Tinggal Online </a></p>
                        </div>
                        <div class="tab-pane" id="online4">
                            Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapi
                            <p class="text-center"><a href="https://antrian.imigrasi.go.id/" target="_blank" class="button_large">Daftar Antrian Online </a></p>
                        </div>
                    </div>
                    
                </div><!--  End span7 --> 
            </div> <!--  End row --> 
        </div>
    </section>
@endsection