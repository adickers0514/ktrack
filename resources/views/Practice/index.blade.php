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


              <p>Practice @Kalaheo High School, 3:30 - @5:30PM</p>

              <p><b>Mid/Long Distance:</b> See Coach Fiana's <a href="http://kalaheotrack.com/distance">practice and training schedule, updated for April.</a></p>


              <br />



              <p><b>Sprinters/Jumpers:</b>Warm up. Stretch. Speed Drills. </p>

              <p>Pre-championship power workout</p>

              <br />
              <p><b>Focus on power application & mechanics</b></p>
              <p>400m athletes (Kiani, Kelsey, Grant, Zach, Nate, etc)</p>
              <p>50m @90% > jog 150m</p>
              <p>100m @85% > jog 100m</p>
              <p>150m @80% > jog 50m</p>
              <p>200m @75% > jog 200m</p>
              <p>Rest = 7mins.  x 2/3</p>

              <br />

              <p><b>Focus on power application, straight-line-energy, <br />with R E L A X A T I O N</b></p>
              <p>Jumpers, Vaulters, 100/200m athletes (Arthur, Keoni, Mark, Jaden, Kowalski, Anthony, Evelyn, Jessica, Daniel, Corey, Julian, etc)</p>
              <p>20m accelerations x 12 @90%</p>

                <br />
              <p>body weight circuit. 2 lap cool down.</p>

          </div>
    </div>
  </div>




  <script src="/js/schedule.js"></script>
<script src="/js/offscreen_menu.js"></script>

  </body>

  @stop