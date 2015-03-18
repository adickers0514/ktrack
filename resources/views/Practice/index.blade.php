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


                <p>Spring break practice at Castle High School: 4:00-5:30PM</p>

                <p><b>Mid/Long Distance:</b> See Coach Fiana's <a href="http://kalaheotrack.com/distance">practice and training schedule</a></p>


                <p><b>Sprinters/Jumpers:</b> Warm up. Stretch. </p>

                <p>Weight Room:</p>
                <p>Deadlifts, Shoulder Press, Bulgarian Split Squat, Step Ups</p>








          </div>


          </div>
    </div>
  </div>




  <script src="/js/schedule.js"></script>
<script src="/js/offscreen_menu.js"></script>

  </body>

  @stop