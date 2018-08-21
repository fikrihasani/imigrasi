@extends('layouts.app')

@section('content')
			<!--Star slider-->
			<section class="slider">
                <div class="fullwidthbanner-container">
                     <div class="fullwidthbanner">
                     <ul>
                     <!-- THE FIRST SLIDE -->
                     <li data-transition="flyin" data-slotamount="1" data-masterspeed="300"  data-thumb="images/thumbs/thumb1.jpg" data-delay="4000" >
                         <img src="images/slides/slide-intro.jpg" alt="">
                             <div class="caption randomrotate"
                                 data-x="center"
                                 data-y="120"
                                 data-speed="300"
                                 data-start="1200"
                                 data-easing="easeOutExpo"  ><img src="images/slides/logo.png" alt="">
                             </div>
                     </li>
                     <!-- THE SECOND SLIDE -->
                     <li data-transition="3dcurtain-horizontal" data-slotamount="1" data-masterspeed="300"  data-thumb="images/thumbs/thumb2.jpg">
                         <img src="images/slides/slide-1.jpg" alt="">
                             <div class="caption randomrotate"
                                 data-x="center"
                                 data-y="90"
                                 data-speed="300"
                                 data-start="1000"
                                 data-easing="easeOutExpo"  ><img src="images/slides/diagram.png" alt="Image 9">
                             </div>
                             <div class="caption randomrotate"
                                 data-x="150"
                                 data-y="80"
                                 data-speed="300"
                                 data-start="2000"
                                 data-easing="easeOutExpo"  >
                                 <img src="images/slides/icon-slide-1.png" alt="">
                             </div>
                             <div class="caption randomrotate"
                                 data-x="180"
                                 data-y="300"
                                 data-speed="300"
                                 data-start="2500"
                                 data-easing="easeOutExpo"  >
                                 <img src="images/slides/icon-slide-2.png" alt="">
                             </div>
                             <div class="caption randomrotate"
                                 data-x="620"
                                 data-y="80"
                                 data-speed="300"
                                 data-start="3000"
                                 data-easing="easeOutExpo"  >
                                 <img src="images/slides/icon-slide-3.png" alt="">
                             </div>
                             <div class="caption randomrotate"
                                 data-x="605"
                                 data-y="300"
                                 data-speed="300"
                                 data-start="3500"
                                 data-easing="easeOutExpo"  >
                                 <img src="images/slides/icon-slide-4.png" alt="">
                             </div>
                         </li>
                         <!-- THE THIRD SLIDE -->
                         <li data-transition="3dcurtain-horizontal" data-slotamount="1" data-masterspeed="300"  data-thumb="images/thumbs/thumb2.jpg">
                             <img src="images/slides/slide-2.jpg" alt="">
                                 <div class="caption very_big_white lfl stl"
                                     data-x="right"
                                     data-y="180"
                                     data-speed="300"
                                     data-start="500"
                                     data-easing="easeOutExpo" 
                                     data-end="8800" 
                                     data-endspeed="300" 
                                     data-endeasing="easeInSine">
                                     JOIN THE COMMUNITY
                                 </div>
                                 <div class="caption lfb stl"
                                     data-x="right"
                                     data-y="250"
                                     data-speed="300"
                                     data-start="500"
                                     data-easing="easeOutExpo" 
                                     data-end="8800" 
                                     data-endspeed="300" 
                                     data-endeasing="easeInSine" >
                                     <a href="about.html" class="button_large">Read more</a>
                                 </div>
                             </li>
                             <!-- THE FOURTH SLIDE -->
                             <li data-transition="cube" data-slotamount="1" data-masterspeed="300"  data-thumb="images/thumbs/thumb2.jpg">
                                 <img src="images/slides/slide-3.jpg" alt="">
                                     <div class="caption very_big_white lfl stl"
                                         data-x="right"
                                         data-y="180"
                                         data-speed="300"
                                         data-start="500"
                                         data-easing="easeOutExpo" 
                                         data-end="8800" 
                                         data-endspeed="300" 
                                         data-endeasing="easeInSine">
                                         DIFFERENT COURSES AVAILABLE
                                     </div>
                                     <div class="caption lfr stl"
                                         data-x="right"
                                         data-y="250"
                                                      data-speed="300"
                                                      data-start="500"
                                                      data-easing="easeOutExpo" data-end="8800" data-endspeed="300" data-endeasing="easeInSine" ><a href="all-courses.html" class="button_large">Read more</a></div>
                                         </li>
                                         <!-- THE FIFTH SLIDE -->
                                         <li data-transition="slideleft" data-slotamount="1" data-masterspeed="300"  data-thumb="images/thumbs/thumb2.jpg">
                                             <img src="images/slides/slide-5.jpg" alt="">
                                             <div class="caption very_big_white lfl stl"
                                                      data-x="30"
                                                      data-y="180"
                                                      data-speed="300"
                                                      data-start="500"
                                                      data-easing="easeOutExpo" data-end="8800" data-endspeed="300" data-endeasing="easeInSine">IMPROVE YOUR SKILLS</div>
 
                                                 <div class="caption big_white lfl stl"
                                                      data-x="30"
                                                      data-y="250"
                                                      data-speed="300"
                                                      data-start="800"
                                                      data-easing="easeOutExpo" data-end="9100" data-endspeed="300" data-endeasing="easeInSine">with expert teachers</div>
                                         </li>
                                         
                                 </ul>
 
                                 <div class="tp-bannertimer tp-bottom"></div>
                             </div>
                         </div>
         </section><!--End slider-->
 
 
         <!--<div class="span15"></div>  biar tengah, span 0.5 sebenarnya-->
 
              <div class="row" id="main-boxes">
                 <div class="span3">
                     <div class="box-style-2 orange">
                         <a href="{{route('wni')}}" title="layanan wni">
                             <h4 align="Center">Layanan Warga Negara Indonesia</h4>
                         </a>
                     </div>
                 </div>
                  <div class="span3">
                     <div class="box-style-2 orange">
                         <a href="{{route('wna')}}" title="Layanan WNA">
                             <h4 align="Center">Layanan Warga Negara Asing</h4>
                         </a>
                     </div>
                 </div>    
        
                 <div class="span25">
                     <div class="box-style-2 orange">
                         <a href="{{route('layananonline')}}" title="Layanan Online">
                             <h4 align="Center">Layanan Online</h4>
                             </br>			
                         </a>
                     </div>
                 </div>
                 
                  <div class="span3">
                     <div class="box-style-2 orange">
                         <a href="{{route('biaya')}}"title="Biaya Keimigrasian">
                             <h4 align="Center">Biaya Keimigrasian</h4>
                             </br>
                         </a>
                     </div>
                 </div>
             </div>
 
         <div class="container">
			 <div class="row">
				 <aside  class="span6">
                    <div class="box-style-1 ribbon borders">
                        <h3>Foto dan Video</h3>
						<iframe height="300" src="http://www.youtube.com/embed/pgk-719mTxM?wmode=transparent"></iframe>
                        <br>
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
                    </div>    
                </aside>


                <aside class="span4">
                    <div class="box-style-1 ribbon borders">
                        <h3 align="center">Link Instansi Terkait</h3>
                        <hr>
                        <a href="https://kemenkumham.go.id/" target="_blank" ><img src="{{asset('img/kemenkumham.jpg')}}" alt="Logo"></a> 
						<br/><a href="http://imigrasi.go.id/" target="_blank" ><img src="{{asset('img/ditjen.jpg')}} "alt="Logo"></a>
						<br/><a href="http://www.politeknikimigrasi.ac.id/" target="_blank" ><img src="{{asset('img/aim.jpg')}}" alt="Logo"></a>
						<br/><a href="https://www.kejaksaan.go.id/" target="_blank" ><img src="{{asset('img/kejaksaan.jpg')}}" alt="Logo" ></a>
						<br/><a href="https://www.kemlu.go.id/id/" target="_blank" ><img src="{{asset('img/deplu.jpg')}}" alt="Logo"></a>
						<a href="https://www.kpk.go.id/id/" target="_blank"><img src="{{asset('img/kpk.jpg')}}" alt="Logo"></a>
                    </div>
                </aside>

			</div>
        </div><!-- end container-->
    
@endsection