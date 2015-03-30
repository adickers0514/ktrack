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


                <p>JV Easterns Prep Week / Varsity Bye-week</p>

                <p><b>Mid/Long Distance:</b> See Coach Fiana's <a href="http://kalaheotrack.com/distance">practice and training schedule</a></p>


                <p><b>Sprinters/Jumpers:</b> Warm up. Stretch. .Speed Drills. </p>

                <p>Speed Ladder: 60 / 60 / 100 / 100 / 200 -> 10 min rest <-  200 / 100 / 100 / 60 / 60. Repeated at coaches discretion.</p>

                <p>Lifting day 1:</p>
                <p>A. Back squats - 7 sets. 7th set = Drop set in 3 phases (full weight, half weight, bar-only</p>
                <p>B. Bench Press - 5 sets. SuperSets with 10 push-ups immediately following work set</p>
                <p>C. Calf Raises - 4 sets. 12-15 reps, heavy weight</p>
                <p>D. Core work - 4mins</p>










          </div>


          </div>
    </div>
  </div>




  <script src="/js/schedule.js"></script>
<script src="/js/offscreen_menu.js"></script>

  </body>

  @stop