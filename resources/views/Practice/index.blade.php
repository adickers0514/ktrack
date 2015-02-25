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

                <p><b>Regularly Schedule Practice @Kalaheo, 3:30 - 5:30PM</b></p>


                <p><b>Mid/Long Distance:</b> 30-40min run. 6x100m striders. Stretch. “B” Lift Day. After practice: Foam Roll & Ice.</p>
                <p><b>Sprinters:</b>Fundamentals: pushing out of 3-point start. Speed day: hills 25m x 8. Lift day: Deadlifts + Pull Ups.</p>







          </div>


          </div>
    </div>
  </div>




  <script src="/js/schedule.js"></script>
<script src="/js/offscreen_menu.js"></script>

  </body>

  @stop