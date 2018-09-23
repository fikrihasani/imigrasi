@extends('layouts.app')

@section('content')
<div class="container" style="margin-bottom: 20px">
	<div class="row">
		<h1 class="span12">Gallery</h1>     
      
	<!-- =========================Start Col left section ============================= -->        
		<aside class="span3 ">
            <div class="col-left">
                <h4>Photo and video Gallery</h4>
                <p>Suspendisse quis risus turpis, ut pharetra arcu. Donec adipiscing, quam non faucibus luctus, mi arcu blandit diam, at faucibus mi ante vel augue.</p>
                <h6>We are looking for</h6>
            </div>
		</aside>
        
        <!-- =========================Start Col right section ============================= -->
		<section class="span8 ">
			<div class="col-right">
				<div class="row-fluid">
					@if (count($galeri) > 0)
						@foreach ($galeri as $foto)
								<div class=" span4 picture" class="box-style-one borders">
									<a href="storage/galeri_foto/{{$foto->data_galeri}}" title="{{$foto->deskripsi}}"class="fancybox" rel="gallery1" >
										<span class="photo_icon"></span>
										<img src="storage/galeri_foto/{{$foto->data_galeri}}">
									</a>			
								</div><!-- End Strip course -->
						@endforeach
						<div class="row justify-content-md-center">
						{{ $galeri->links() }}
						</div>
					@else
							<center>
								<div class="alert alert-info">
									<h3>Maaf Belum ada Foto Kepala Kantor Imigrasi</h3>
								</div>
							</center>
					@endif
				</div>
			</div>
		</section><!-- end col right-->
	</div><!-- end row-->
</div><!-- end container-->
@endsection