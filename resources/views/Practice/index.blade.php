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

              <p>Practice @Castle High School, 4:00 - @5:30PM</p>

              <p><b>Mid/Long Distance:</b> See Coach Fiana's <a href="http://kalaheotrack.com/distance">practice and training schedule, updated for April.</a></p>


              <br />



              <p><b>Sprinters/Jumpers:</b>  800m job. Warm up. Stretch. Speed Drills. </p>

              <p>Speed endurance workout:</p>
              <p>400 @70%. R = 4mins</p>
              <p>300 @80%. R = 3mins</p>
              <p>200 @85%. R = 2mins</p>
              <p>100 @90%</p>


              <p>Punahou Relays hand-off practice</p>
              <p>Open handoffs for 4 x 200</p>
              <p>Closed handoffs for 4 x 100</p>

              <p>Block starts, High jump / Long jump as desired</p>


          </div>
    </div>
  </div>




  <script src="/js/schedule.js"></script>
<script src="/js/offscreen_menu.js"></script>

  </body>

  @stop