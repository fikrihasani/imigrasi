@extends('layouts.app')

@section('content')
<div class="container">

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
					<div class=" span4 picture">
						<a href="img/gallery/1.jpg" title="Title" class="fancybox" rel="gallery1" >
						<span class="photo_icon"></span>
						<img src="img/gallery/1.jpg" alt="">
						</a>
					</div>
					<div class="span4 picture">
						<a href="img/gallery/2.jpg" title="Title" class="fancybox" rel="gallery1">
						<span class="photo_icon"></span>
						<img src="img/gallery/2.jpg" alt="" >
						</a>
					</div>
					<div class="span4 picture">
						<a class="fancybox-media" href="http://www.youtube.com/watch?v=opj24KnzrWo" title="Video youtube"  >
						<span class="video_icon_youtube"></span>
						<img src="img/gallery/3.jpg" alt="">
						</a>
					</div>
                    </div>
                    
                    <div class="row-fluid">
					<div class="span4 picture">
						<a class="fancybox-media" href="http://vimeo.com/36031564" title="Video Vimeo" >
						<span class="video_icon_vimeo"></span>
						<img src="img/gallery/4.jpg" alt="">
						</a>
					</div>
					<div class="span4 picture">
						<a href="img/gallery/5.jpg" title="Title" class="fancybox" rel="gallery1">
						<span class="photo_icon"></span>
						<img src="img/gallery/5.jpg" alt="">
						</a>
					</div>
					<div class="span4 picture">
						<a href="img/gallery/6.jpg" title="Title" class="fancybox" rel="gallery1">
						<span class="photo_icon"></span>
						<img src="img/gallery/6.jpg" alt="">
						</a>
					</div>
                    </div>
                    
                    <div class="row-fluid">
					<div class="span4 picture">
						<a href="img/gallery/4.jpg" title="Title" class="fancybox" rel="gallery1">
						<span class="photo_icon"></span>
						<img src="img/gallery/4.jpg" alt="">
						</a>
					</div>
					<div class="span4 picture">
						<a href="img/gallery/5.jpg" title="Title" class="fancybox" rel="gallery1">
						<span class="photo_icon"></span>
						<img src="img/gallery/5.jpg" alt="">
						</a>
					</div>
					<div class="span4 picture">
						<a href="img/gallery/6.jpg" title="Title"class="fancybox" rel="gallery1" >
						<span class="photo_icon"></span>
						<img src="img/gallery/6.jpg" alt="">
						</a>
					</div>
                    </div>
                    
                    <div class="row-fluid">
					<div class=" span4 picture">
						<a href="img/gallery/7.jpg" title="Title" class="fancybox" rel="gallery1">
						<span class="photo_icon"></span>
						<img src="img/gallery/7.jpg" alt="">
						</a>
					</div>
					<div class="span4 picture">
						<a href="img/gallery/7.jpg" title="Title" class="fancybox" rel="gallery1">
						<span class="photo_icon"></span>
						<img src="img/gallery/7.jpg" alt="">
						</a>
					</div>
					<div class="span4 picture">
						<a href="img/gallery/7.jpg" title="Title" class="fancybox" rel="gallery1">
						<span class="photo_icon"></span>
						<img src="img/gallery/7.jpg" alt="">
						</a>
					</div>
				</div><!-- End row -->
			</div>
		</section><!-- end col right-->
	</div><!-- end row-->
</div><!-- end container-->
@endsection