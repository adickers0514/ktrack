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


              <p>NO PRACTICE TODAY, NO PRACTICE MONDAY MAY 4th. Practice resumes Tuesday May 5th, @Castle High School, 4PM</p>
              
              <!--
              <p><b>IMPORTANT</b></p>
              <p>As you are all aware, Kalaheo's prom is Saturday night. Both Coach Tony and Myself will be driving kids to prom, so we are unable to stay for the entire meet. Our intention is to have a bus take all parties TO the meet on Saturday at Mililani. However, we would like to cancel the bus home, as have each athlete procure their own ride home. Currently, we are not contesting a Girls or Boys 4x400, so our last event is at 7:40 with the Boys 3000m. Please make every attempt to get a ride home on Saturday. For tomorrow's trials - we will have a bus going and coming from Mililani.</p>

              <p><b>Mid/Long Distance:</b> See Coach Fiana's <a href="http://kalaheotrack.com/distance">practice and training schedule, updated for April.</a></p>


              <br />

              <p>Vars Champs light workout</p>

              <br />
              <p>800m warm job. Extended Warm up. Speed drills.""

              <br />

              <p><b>4 x 100m</b> (POOL = Arthur, Mark, Jaden, Nate, Keoni, Grant, Julian) relay passes in spikes - 20mins max</p>
              <p>300m hurdles 2 hurdles from blocks - 30mins max</p>
              
              
              <p>Block starts as needed (Jessica, Kiani, Keoni)</p>-->
              

              
          </div>
    </div>
  </div>




  <script src="/js/schedule.js"></script>
<script src="/js/offscreen_menu.js"></script>

  </body>

  @stop