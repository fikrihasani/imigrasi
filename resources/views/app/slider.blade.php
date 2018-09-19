@extends('layouts.app')

@section('content')
			<!--Star slider-->
			<section class="slider">
                <div class="fullwidthbanner-container">
                     <div class="fullwidthbanner">
                     <ul>
                     <!-- THE FIRST SLIDE -->
                     <li data-transition="flyin" data-slotamount="1" data-masterspeed="300"  data-delay="4000" >
                         <img src="images/slides/slide-1.png" alt="">
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
                         <img src="images/slides/slide-1.png" alt="">
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
@endsection