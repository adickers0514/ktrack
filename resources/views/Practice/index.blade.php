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

                <p><b>Regularly scheduled practice: Castle High School - 4:00PM - 6:00PM</b></p>


                <p><b>Mid/Long Distance:</b>TRACK WORKOUT:
                                            1 mile warm-up/Active Stretching, drills. Stride outs (4-5 x50m) Speed workday: 2x300 2x200 2x150
                                            (1-2 min recovery between each one) 1 mile cooldown. STRETCH!!! ICE tonight!</p>


                <p><b>Sprinters/Jumpers:</b> 800m Warm-up. Stretch. Speed drills. Specials: Hurdles, High-jump.
                <br />Tempo workout: Jumpers/100/200 = 100m x 8 @75%, 2min rest.
                <br />Tempo workout: 200/400 =  4 x 250 jog @50% + 150m 90% (float speed, in flats, continous/no rest). 4x100 relay full race (spikes on)</p>

          </div>


          </div>
    </div>
  </div>




  <script src="/js/schedule.js"></script>
<script src="/js/offscreen_menu.js"></script>

  </body>

  @stop