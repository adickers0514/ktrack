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


                <p>Regular practice @Kalaheo: 3:30 - 5:30/6:00PM</p>

                <b>NOTICE:</b> <p>TEAM PICTURE IN 2 DAYS!!!!! Please be sure to come to practice on Friday, and bring your uniform top.</p>

                <p><b>Mid/Long Distance:</b> TRACK WORKOUT: 1 mile warm-up; active drills; 8x200 w/60-90 sec. recovery @ 800/mile race pace
                                             10 min. cool down. Stretch. Abs. Pull-ups</p>


                <p><b>Sprinters/Jumpers:</b> Warm up 800m. Stretch. Speed Drills/Form Drills. 6 x 300m (100m @50%, 100m @75%, 100m @90%), walk remaining 100m to start line. 800m cool down. Relay passes, block starts. </p>




          </div>


          </div>
    </div>
  </div>




  <script src="/js/schedule.js"></script>
<script src="/js/offscreen_menu.js"></script>

  </body>

  @stop