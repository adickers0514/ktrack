@extends('layouts.master')

@section('content')

<title>Practice today</title>

<link href="/css/cover.css" rel="stylesheet" type="text/css">


  <body>

@include('Static.offscreenmenu')

 <div>




           <nav id="followBar-Container" class="follow-lighter">

               <div class="followBarDark">
                   <div class="main-logo">
                     <span class="lightHomePageLogo">Kalaheo Track & Field</span>
                   </div>
                    <div class="navigation-items blackText">
                        @include('Static.navigation-items')
                    </div>
               </div>

           </nav>



            </div>



  <div class="content_wrapper backgroundColorWhite">
    <div class="page_container">
          <div class="page_core page_content">

                <h1 class="colorBlack">Practice Today:</h1>
                <h3> {{ $today }}</h3>


                <p>Practice at Castle High School: 4:00-5:30PM</p>

                <p><b>Mid/Long Distance:</b> See Coach Fiana's <a href="http://kalaheotrack.com/distance">practice and training schedule</a></p>


                <p><b>Sprinters/Jumpers:</b> Warm up. Stretch. Speed Drills (Abbreviated for hurdlers - see below) </p>

                <p>400m runners:</p>
                <p>300m x 4 @80%, flats or spikes / your choice - 0:39-0:43s). Rest = 5mins. 4 x 150s, in spikes. Rest = 2 mins</p>

                <p>100m/200m/Long jumpers runners:</p>
                                <p>200m x 6 @80%, flats or spikes / your choice - 31.2s-36.0s. Rest = 3 mins. 4 x 150s, in spikes. Rest = 2 mins</p>

                <p>Hurdlers:</p>
                <p>300m x 3 @90% OVER HURDLES, in spikes (un-timed). Rest = 25 mins. 2 x 150s. Rest = 2 mins</p>









          </div>


          </div>
    </div>
  </div>




  <script src="/js/schedule.js"></script>
<script src="/js/offscreen_menu.js"></script>

  </body>

  @stop