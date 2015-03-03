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

                <p><b>Regularly schedule practice: Castle High School - 4:00PM - 6:00PM</b></p>


                <p><b>Mid/Long Distance:</b>1 mile warm-up; active drills; 8x400
                                            90 sec. recovery between each one; be at mile race pace; If you are shooting for a 1 mile cooldown . Stretch. Abs. Push-ups</p>
                <p><b>Sprinters:</b> 800m Warm-up. Stretch. Speed drills. Specials: Hurdles, High-jump (with Castle), Block starts. Relay passes (4x100 steps). Tempo workout: 300m x2, 200m x2, 150x 2/3</p>

          </div>


          </div>
    </div>
  </div>




  <script src="/js/schedule.js"></script>
<script src="/js/offscreen_menu.js"></script>

  </body>

  @stop