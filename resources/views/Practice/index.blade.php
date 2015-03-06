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


                <p>Pre-meet Friday: Kalaheo Practice Field: 3:30PM - 4:30-5:00PM</p>

                <b>NOTICE:</b> <p>Next Friday we are having the team picture taken. Please be sure to come to practice next Friday, 5PM, in your uniform top.</p>

                <p><b>Mid/Long Distance:</b> Pre-race: 10-15 min. easy run. 8x100 striders, stretch</p>


                <p><b>Sprinters/Jumpers:</b><p>Ultimate Friday</p><p>4 laps warm up. Stretch. Speed drills. Specials: Hurdles, High Jump introduction</p>

          </div>


          </div>
    </div>
  </div>




  <script src="/js/schedule.js"></script>
<script src="/js/offscreen_menu.js"></script>

  </body>

  @stop