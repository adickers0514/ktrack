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

                <p><b>Regularly schedule practice: @Kalaheo - 3:30-5:30PM</b></p>


                <p><b>Mid/Long Distance:</b>RUN: 30-40 mins. 6x100m striders. Stretch. “B” Lift Day. After practice: Foam Roll & Ice</p>
                <p><b>Sprinters:</b> 4 laps Warm-up. Stretch. Speed drills. Specials: Hurdles, High-jump. <br />Speed workout: Jumpers/100/200 = 40m x 7, 1min rest. 20m x 7,  <br />200/400  10mins strides. 15mins easy jog </p>

          </div>


          </div>
    </div>
  </div>




  <script src="/js/schedule.js"></script>
<script src="/js/offscreen_menu.js"></script>

  </body>

  @stop