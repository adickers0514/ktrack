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

                <p><b>FIRST PRACTICE AT CASTLE HIGH SCHOOL TODAY</b></p>

                <p>Practice will start between 3:45 and 4:00PM - please meet in the parking lot outside the track.</p>
                <p><b>Mid/Long Distance:</b> 1 mile warm up, active drills. <p>1000 800 600 400 2x200</p> 2 min. recovery between each run. As distance decreases, speed increases: 200's are FULL SPEED (Speed Dev workout). 1 mile cooldown. Stretch. Core work. Push-ups.</p>
                <p><b>Sprinters:</b> 800m warmup. Stretch. Active Stretch. Speed Drills. Introduction to block starts. <p>30/30 200m repeats x 8 sets -> 200m run under :30, :30 rest -> repeat</p> 800m cool down. Stretch.</p>







          </div>


          </div>
    </div>
  </div>




  <script src="/js/schedule.js"></script>
<script src="/js/offscreen_menu.js"></script>

  </body>

  @stop