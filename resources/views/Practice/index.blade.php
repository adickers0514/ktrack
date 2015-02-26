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

                <p><b>Practice at Castle High School - 4PM to 6PM</b></p>


                <p><b>Mid/Long Distance:</b> mile warm-up, active drills.</p>
                <p>8x200 w/60-90 sec. recovery @ 800/mile race pace 10 min. cooldown . Stretch. Abs. Pull-ups</p>
                <p><b>Sprinters:</b> 800m warm-up. Static stretching. Active stretching. Speed drills. Starting block fundamentals - be sure to bring your spikes. Introduction to relays (4x100, 4x400, hand offs)</p>
                <p>Track Meet Practice: 400, 200, 100. 100%. You will be placed into heats, full block starts. 10mins between events. </p>







          </div>


          </div>
    </div>
  </div>




  <script src="/js/schedule.js"></script>
<script src="/js/offscreen_menu.js"></script>

  </body>

  @stop