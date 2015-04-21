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

              <p>Practice @Kalaheo High School, 3:30-@4:30-6PM</p>

              <p><b>Mid/Long Distance:</b> See Coach Fiana's <a href="http://kalaheotrack.com/distance">practice and training schedule, updated for April.</a></p>


              <br />



              <p><b>Sprinters/Jumpers:</b>  Extended Warm up. Stretch. Speed Drills. </p>

              <p>Tempo runs:</p>
              <p>(6 x 40m run @75%. jog ends. Continuous. Rest = 4mins.) x 3</p>

              <p>Bodyweight circuit (2/3 laps):</p>
              <p>Work all 4 corners of the field - sprint between stations:</p>
              <p>station 1: push-ups @20 secs.</p>
              <p>station 2: crunches @20 secs</p>
              <p>station 3: mountain climbers @20 secs.</p>
              <p>station 4: burpees @20 secs</p>



              <p>- No weight room today - that's right no weight room today!</p>


          </div>
    </div>
  </div>




  <script src="/js/schedule.js"></script>
<script src="/js/offscreen_menu.js"></script>

  </body>

  @stop