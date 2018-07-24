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
				 <aside class="span1"></aside>
				 <aside  class="span4 ">
						<div class="box-style-1 ribbon borders">
							 <table class="table table-bordered table-striped">
								<thead>
									<tr>								
										<th>Jam Kerja</th>
										<th>Pukul</th>
										<th>S/d</th>				
									</tr>
								</thead>
							
								<tbody>
									<tr>
										<td>Senin - Kamis</td>
										<td>07.30</td>
										<td>16.00</td>
									</tr>
									<tr>
										<td>Istirahat</td>
										<td>12.00</td>
										<td>13.00</td>
									</tr>
									<tr>
										<td>Jumat</td>
										<td>7.30</td>
										<td>16.30</td>
									</tr>
									<tr>
										<td>Istirahat</td>
										<td>11.30</td>
										<td>13.00</td>
									</tr>
								</tbody>
							</table>
                            <br/>
                            <p><a  href="https://antrian.imigrasi.go.id/" title="Antrian Online"><img src="img/online.jpg" alt="Banner" class="img-rounded" height="270" width="300"></a></p>
							<br/>
						    <p><a  href="https://apoa.imigrasi.go.id/poa/" title="Apoa"><img src="img/apoa.jpg" alt="Banner" class="img-rounded" height="420" width="300"></a></p>
				 
						</div>
				</aside>
			</div>
        </div><!-- end container-->
    
@endsection